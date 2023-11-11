<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asignatura;
use App\Models\Profesore;
use App\Http\Requests\AsignaturaRequest;

class AsignaturaController extends Controller
{

    public function index()
    {
        return view('admin.asignaturas.index');
    }

    public function create()
    {
        $profesores = Profesore::pluck('nombre','id');

        return view('admin.asignaturas.create',compact('profesores'));
    }

    public function store(AsignaturaRequest $request)
    {
        $asignatura = Asignatura::create($request->all());

        return redirect()->route('admin.asignaturas.edit',$asignatura)->with('info','Asignatura creada satisfactoriamente');
    }

    public function edit(Asignatura $asignatura)
    {
        $profesores = Profesore::pluck('nombre','id');

        return view('admin.asignaturas.edit',compact('asignatura','profesores'));
    }

    public function update(AsignaturaRequest $request, Asignatura $asignatura)
    {
        $asignatura->update($request->all());

        return redirect()->route('admin.asignaturas.edit',$asignatura)->with('info','Asignatura actualizada satisfactoriamente');
    }

    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();

        return redirect()->route('admin.asignaturas.index')->with('info','Asignatura eliminada satisfactoriamente');
    }
}
