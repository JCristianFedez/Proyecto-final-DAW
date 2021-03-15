<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        return [
            "name" => "required|max:40",
			"email" => "required|email",
			"password" => "required|min:6"
        ];
    }

    public function attributes(){
        return [
            "name" => "Nombre del usuario",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Nombre del usuario obligatorio",
            "password.required" => "Contraseña obligatoria"
        ];
    }
}
