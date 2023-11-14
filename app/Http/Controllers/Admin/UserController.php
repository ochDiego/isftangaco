<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.usuarios.index')->only('index');
        $this->middleware('can:admin.usuarios.edit')->only('edit','update');
        $this->middleware('can:admin.usuarios.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.usuarios.index');
    }

    public function edit(User $usuario)
    {
        $roles = Role::all();

        return view('admin.usuarios.edit',compact('usuario','roles'));
    }

    public function update(Request $request, User $usuario)
    {
        $usuario->roles()->sync($request->roles);

        return redirect()->route('admin.usuarios.edit',$usuario)->with('info','Rol/es asignado/s satisfactoriamente');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();

        return redirect()->route('admin.usuarios.index')->with('info','Usuario eliminado satisfactoriamente');
    }
}
