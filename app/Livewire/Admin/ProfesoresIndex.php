<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Profesore;
use Livewire\WithPagination;

class ProfesoresIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $profesores = Profesore::where('estado',true)
                            ->where('nombre','like','%' . $this->search . '%')
                            ->orWhere('dni','like','%' . $this->search . '%')
                            ->orWhere('email','like','%' . $this->search . '%')
                            ->orWhere('telefono','like','%' . $this->search . '%')
                            ->orWhere('fecha_nac','like','%' . $this->search . '%')
                            ->orWhere('domicilio','like','%' . $this->search . '%')
                            ->orderByDesc('id')
                            ->paginate();

        return view('livewire.admin.profesores-index',compact('profesores'));
    }
}
