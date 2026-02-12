<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateVideojuegoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Usuario'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "titulo" => ["sometimes","string","max:255"],
            "descripcion" => ["sometimes","string","max:1000"],
            "numero" => ["sometimes","integer","min:0"],
            "genero" => ["sometimes","string","max:100"],
            "subgenero" => ["nullable","string","max:100"],
            "mes" => ["sometimes","integer","between:1,12"],
            "año" => ["sometimes","integer","min:1950","max:2100"],


            "editor_id" => ["sometimes","exists:editors,id"],
            "desarrollador_id" => ["sometimes","exists:desarrolladors,id"]
        ];
    }
}
