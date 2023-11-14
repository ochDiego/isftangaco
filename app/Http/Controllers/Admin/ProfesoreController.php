<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profesore;
use App\Http\Requests\ProfesoreRequest;
use Illuminate\Support\Facades\Storage;

class ProfesoreController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.profesores.index')->only('index');
        $this->middleware('can:admin.profesores.create')->only('create','store');
        $this->middleware('can:admin.profesores.edit')->only('edit','update');
        $this->middleware('can:admin.profesores.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.profesores.index');
    }

    public function create()
    {
        return view('admin.profesores.create');
    }

    public function store(ProfesoreRequest $request)
    {
        $profesore = Profesore::create($request->all());
        
        if($request->file('file')){
            $url = Storage::put('profesores',$request->file('file'));
            
            $profesore->image()->create([
                'url' => $url
            ]);
        }

        if($request->file('cv')){
            $uri = Storage::put('pdfs',$request->file('cv'));

            $profesore->cv = $uri;
            $profesore->save();
        }

        return redirect()->route('admin.profesores.edit',$profesore)->with('info','Profesor creado satisfactoriamnete');
    }

    public function show(Profesore $profesore)
    {
        return view('admin.profesores.show',compact('profesore'));
    }

    public function edit(Profesore $profesore)
    {
        return view('admin.profesores.edit',compact('profesore'));
    }

    public function update(ProfesoreRequest $request, Profesore $profesore)
    {
        $profesore->update($request->all());

        if($request->file('file')){
            $url = Storage::put('profesores',$request->file('file'));

            if($profesore->image){
                Storage::delete($profesore->image->url);

                $profesore->image->update([
                    'url' => $url,
                ]);
            }else{
                $profesore->image()->create([
                    'url' => $url,
                ]);
            }
        }

        if($request->file('cv')){
            $uri = Storage::put('pdfs',$request->file('cv'));

            if($profesore->cv){
                Storage::delete($profesore->cv);

                $profesore->update([
                    'cv' => $uri,
                ]);
            }
        }

        return redirect()->route('admin.profesores.edit',$profesore)->with('info','Profesor actualizado satisfactoriamnete');
    }

    public function destroy(Profesore $profesore)
    {
        if($profesore->image){
            Storage::delete($profesore->image->url);
        }

        if($profesore->cv){
            Storage::delete($profesore->cv);
        }

        $profesore->delete();

        return redirect()->route('admin.profesores.index')->with('info','Profesor eliminado satisfactoriamnete');
    }
}
