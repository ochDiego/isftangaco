<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
        $empresa = $this->route()->parameter('empresa');

        $rules = [
            'nombre' => 'required|string|min:3|max:255',
            'slug' => 'required|unique:empresas,slug,' . $empresa->id,
            'telefono' => 'nullable|integer|min_digits:10|max_digits:10',
            'ubicacion' => 'nullable|string|min:3|max:255',
        ];

        return $rules;
    }
}
