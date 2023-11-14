<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;

class EmpresaController extends Controller
{

    public function index()
    {
        $empresa = Empresa::find(1);

        return view('admin.empresas.index',compact('empresa'));
    }

    public function edit(Empresa $empresa)
    {
        return view('admin.empresas.edit',compact('empresa'));
    }

    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        $empresa->update($request->all());

        return redirect()->route('admin.empresas.edit',$empresa)->with('info','Insitución actualizada satisfactoriamente');
    }

}
