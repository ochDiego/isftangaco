<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Asistencia;
use App\Models\Profesore;

class Formulario extends Component
{

    public $dni;

    protected $rules = [
        'dni' => 'required|numeric|min:9000000|max:99999999',
    ];


    public function render()
    {
        return view('livewire.formulario');
    }

    public function entrada()
    {
        $this->validate();

        $profesore = Profesore::where('dni',$this->dni)->first();

        if($profesore){
            $fecha = date("Y-m-d h:i:s");

            $fechaDB = Asistencia::select('entrada')->where('profesore_id',$profesore->id)->orderByDesc('id')->first();

            if ($fechaDB == null) {

                Asistencia::create([
                    'entrada' => $fecha,
                    'profesore_id' => $profesore->id,
                ]);
    
                $this->dispatch('entrada','HOLA, BIENVENIDO');

                $this->reset('dni');

            } else {

                if (substr($fecha,0,10) == substr($fechaDB->entrada,0,10)) {
                    $this->dispatch('alert','YA REGISTRASTE TU ENTRADA');
    
                    $this->reset('dni');
                } else {
                    Asistencia::create([
                        'entrada' => $fecha,
                        'profesore_id' => $profesore->id,
                    ]);
        
                    $this->dispatch('entrada','HOLA, BIENVENIDO');
    
                    $this->reset('dni');
                }

            }
            

        }else{
            $this->dispatch('alert','EL DNI INGRESADO NO EXISTE');

            $this->reset('dni');
        }
    }

    public function salida()
    {
        $this->validate();

        $profesore = Profesore::where('dni',$this->dni)->first();

        if($profesore){

            $fecha = date("Y-m-d h:i:s");

            $asistencia_id = Asistencia::where('profesore_id',$profesore->id)->orderByDesc('id')->first();
            
            
            if ($asistencia_id == null) {
                $this->dispatch('alert','PRIMERO DEBES REGISTRAR TU ENTRADA');

                $this->reset('dni');
            } else {
                $asistencia = Asistencia::where('id',$asistencia_id->id)->first();

            if (substr($fecha,0,10) != substr($asistencia_id->entrada,0,10)) {
                $this->dispatch('alert','PRIMERO DEBES REGISTRAR TU ENTRADA');

                $this->reset('dni');
            } else {
                $fechaDB = Asistencia::select('salida')->where('profesore_id',$profesore->id)->orderByDesc('id')->first();

                if (substr($fecha,0,10) == substr($fechaDB->salida,0,10)) {
                    $this->dispatch('alert','YA REGISTRASTE TU SALIDA');

                    $this->reset('dni');
                } else {

                    $asistencia->where('id',$asistencia->id)->update(['salida' => $fecha]);

                    $this->dispatch('entrada','ADIÓS, VUELVE PRONTO');

                    $this->reset('dni');
                } 
            }
            }
            
          
        }else{
            $this->dispatch('alert','EL DNI INGRESADO NO EXISTE');

            $this->reset('dni');
        }
    }
}

