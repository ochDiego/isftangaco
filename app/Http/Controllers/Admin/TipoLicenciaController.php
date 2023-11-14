<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoLicencia;
use App\Http\Requests\TipoLicenciaRequest;

class TipoLicenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.tiposlicencia.index')->only('index');
        $this->middleware('can:admin.tiposlicencia.create')->only('create','store');
        $this->middleware('can:admin.tiposlicencia.edit')->only('edit','update');
        $this->middleware('can:admin.tiposlicencia.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.tiposlicencia.index');
    }

    public function create()
    {
        return view('admin.tiposlicencia.create');
    }

    public function store(TipoLicenciaRequest $request)
    {
        $tipolicencia = TipoLicencia::create($request->all());

        return redirect()->route('admin.tiposlicencia.edit',$tipolicencia)->with('info','Tipo de licencia creada satisfactoriamente');
    }

    public function edit(TipoLicencia $tipolicencia)
    {
        return view('admin.tiposlicencia.edit',compact('tipolicencia'));
    }

    public function update(TipoLicenciaRequest $request, TipoLicencia $tipolicencia)
    {
        $tipolicencia->update($request->all());

        return redirect()->route('admin.tiposlicencia.edit',$tipolicencia)->with('info','Tipo de licencia actualizada satisfactoriamente');
    }

    public function destroy(TipoLicencia $tipolicencia)
    {
        $tipolicencia->delete();

        return redirect()->route('admin.tiposlicencia.index')->with('info','Tipo de licencia eliminada satisfactoriamente');
    }
}
