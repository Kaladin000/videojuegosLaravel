<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            "nombre" => "string|required|max:255",
            "direccion" => "string|max:255",
            "telefono" => "string|required|max:255",
            "email" => "string|required|max:255|email|unique:users",
            "password" => "string|required|min:8"
        ];
    }
}
