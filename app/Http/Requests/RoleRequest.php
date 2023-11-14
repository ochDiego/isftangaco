<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
        $role = $this->route()->parameter('role');

        $rules = [
            'name' => 'required|string|min:3|max:100|unique:roles'
        ];

        if($role){
            $rules['name'] = 'required|string|min:3|max:100|unique:roles,name,' . $role->id;
        }

        return $rules;
    }
}
