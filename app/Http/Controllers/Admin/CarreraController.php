<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Http\Requests\CarreraRequest;
use App\Models\Asignatura;

class CarreraController extends Controller
{

    public function index()
    {
        return view('admin.carreras.index');
    }

    public function create()
    {
        $asignaturas = Asignatura::select('id','nombre')->get();

        return view('admin.carreras.create',compact('asignaturas'));
    }

    public function store(CarreraRequest $request)
    {
        $carrera = Carrera::create($request->all());

        $carrera->asignaturas()->sync($request->asignaturas);

        return redirect()->route('admin.carreras.edit',$carrera)->with('info','Carrera creada satisfactoriamente');
    }

    public function show(Carrera $carrera)
    {
        return view('admin.carreras.show',compact('carrera'));
    }

    public function edit(Carrera $carrera)
    {
        $asignaturas = Asignatura::select('id','nombre')->get();

        return view('admin.carreras.edit',compact('carrera','asignaturas'));
    }

    public function update(CarreraRequest $request, Carrera $carrera)
    {
        $carrera->update($request->all());

        $carrera->asignaturas()->sync($request->asignaturas);

        return redirect()->route('admin.carreras.edit',$carrera)->with('info','Carrera actualizada satisfactoriamente');
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();

        return redirect()->route('admin.carreras.index')->with('info','Carrera eliminada satisfactoriamente');
    }
}
