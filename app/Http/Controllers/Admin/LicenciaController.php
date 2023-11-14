<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Licencia;
use App\Models\TipoLicencia;
use App\Models\Profesore;
use App\Http\Requests\LicenciaRequest;

class LicenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.licencias.index')->only('index');
        $this->middleware('can:admin.licencias.create')->only('create','store');
        $this->middleware('can:admin.licencias.edit')->only('edit','update');
        $this->middleware('can:admin.licencias.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.licencias.index');
    }

    public function create()
    {
        $profesores = Profesore::pluck('nombre','id');
        $tiposlicencia = TipoLicencia::pluck('nombre','id');

        return view('admin.licencias.create',compact('profesores','tiposlicencia'));
    }

    public function store(LicenciaRequest $request)
    {
        $licencia = Licencia::create($request->all());

        return redirect()->route('admin.licencias.edit',$licencia)->with('info','Licencia creada satisfactoriamente');
    }

    public function edit(Licencia $licencia)
    {
        $profesores = Profesore::pluck('nombre','id');
        $tiposlicencia = TipoLicencia::pluck('nombre','id');

        return view('admin.licencias.edit',compact('licencia','profesores','tiposlicencia'));
    }

    public function update(LicenciaRequest $request, Licencia $licencia)
    {
        $licencia->update($request->all());

        return redirect()->route('admin.licencias.edit',$licencia)->with('info','Licencia actualizada satisfactoriamente');
    }

    public function destroy(Licencia $licencia)
    {
        $licencia->delete();

        return redirect()->route('admin.licencias.index')->with('info','Licencia eliminada satisfactoriamente');
    }
}
