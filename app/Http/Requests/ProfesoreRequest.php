<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesoreRequest extends FormRequest
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
        $profesore = $this->route()->parameter('profesore');

        $rules = [
            'nombre' => 'required|string|min:3|max:90',
            'slug' => 'required|unique:profesores',
            'dni' => 'required|integer|min_digits:8|max_digits:8|unique:profesores',
            'fecha_nac' => 'nullable|date',
            'email' => 'required|email|unique:profesores',
            'telefono' => 'nullable|integer|min_digits:10|max_digits:10',
            'domicilio' => 'nullable|string|min:3|max:255',
            'cv' => 'nullable|file|mimes:pdf|max:5120',
            'file' => 'nullable|image|mimes:jpg,png,jpeg|max:3072',
        ];

        if($profesore){
            $rules['slug'] = 'required|unique:profesores,slug,' . $profesore->id;
            $rules['dni'] = 'required|integer|min_digits:8|max_digits:8|unique:profesores,dni,' . $profesore->id;
            $rules['email'] = 'required|email|unique:profesores,email,' . $profesore->id;
        }

        return $rules;
    }
}
