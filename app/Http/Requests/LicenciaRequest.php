<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicenciaRequest extends FormRequest
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
        $licencia = $this->route()->parameter('licencia');

        $rules = [
            'nombre' => 'required|string|min:3|max:255',
            'slug' => 'required|unique:licencias',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'tipo_licencia_id' => 'required|integer',
            'profesore_id' => 'required|integer',
        ];

        if($licencia){
            $rules['slug'] = 'required|unique:licencias,slug,' . $licencia->id;
        }

        return $rules;
    }
}
