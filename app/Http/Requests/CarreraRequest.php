<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarreraRequest extends FormRequest
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
        $carrera = $this->route()->parameter('carrera');

        $rules = [
            'nombre' => 'required|string|min:3|max:255',
            'slug' => 'required|unique:carreras',
            'descripcion' => 'nullable|string|min:3|max:2000',
        ];

        if($carrera){
            $rules['slug'] = 'required|unique:carreras,slug,' . $carrera->id;
        }

        return $rules;
    }
}
