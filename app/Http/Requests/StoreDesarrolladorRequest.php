<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDesarrolladorRequest extends FormRequest
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
        return [
            "nombre_desarrollador" => "required|string|max:50"
        ];
    }

    public function messages() {
        return [
            "nombre_desarrollador.required"=> "El campo nombre es obligatorio",
            "nombre_desarrollador.max"=> "El campo nombre no puede superar los 50 caracteres",
            "nombre_desarrollador.string"=> "El campo nombre debe ser una cadena de texto"
        ];
    }
}
