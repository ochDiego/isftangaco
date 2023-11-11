<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Http\Requests\CarreraRequest;

class CarreraController extends Controller
{

    public function index()
    {
        return view('admin.carreras.index');
    }

    public function create()
    {
        return view('admin.carreras.create');
    }

    public function store(CarreraRequest $request)
    {
        $carrera = Carrera::create($request->all());

        return redirect()->route('admin.carreras.edit',$carrera)->with('info','Carrera creada satisfactoriamente');
    }

    public function edit(Carrera $carrera)
    {
        return view('admin.carreras.edit',compact('carrera'));
    }

    public function update(CarreraRequest $request, Carrera $carrera)
    {
        $carrera->update($request->all());

        return redirect()->route('admin.carreras.edit',$carrera)->with('info','Carrera actualizada satisfactoriamente');
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();

        return redirect()->route('admin.carreras.index')->with('info','Carrera eliminada satisfactoriamente');
    }
}
