<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoLicenciaRequest extends FormRequest
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
        $tipolicencia = $this->route()->parameter('tipolicencia');

        $rules = [
            'nombre' => 'required|string|min:3|max:255',
            'slug' => 'required|unique:tipo_licencias',
            'descripcion' => 'nullable|string|min:3|max:500',
        ];

        if($tipolicencia){
            $rules['slug'] = 'required|unique:tipo_licencias,slug,' . $tipolicencia->id;
        }

        return $rules;
    }
}
