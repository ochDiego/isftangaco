<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignaturaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //alpha:ascii

        $asignatura = $this->route()->parameter('asignatura');

        $rules = [
            'nombre' => 'required|string|min:3|max:255',
            'slug' => 'required|unique:asignaturas',
            'cantidad_horas' => 'nullable|numeric|integer',
            'profesore_id' => 'numeric|integer',
        ];

        if($asignatura){
            $rules['slug'] = 'required|unique:asignaturas,slug,' . $asignatura->id;
        }

        return $rules;
    }
}
