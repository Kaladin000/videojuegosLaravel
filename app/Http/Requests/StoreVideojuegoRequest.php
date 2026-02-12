<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreVideojuegoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return (Auth::user()->hasRole('Usuario'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'numero' => 'required|integer',
            'genero' => 'required|string',
            'subgenero' => 'required|string',
            'mes' => 'required|integer|min:1|max:12',
            'año' => 'required|integer',
            'desarrollador_id' => 'required',
            'editor_id' => 'required|exists:editors,id'
        ];
    }
}
