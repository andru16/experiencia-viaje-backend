<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CiudadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Añade aquí la lógica de autorización basada en roles u otros criterios
        return true; // Cambia esto según sea necesario
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_pais' => 'required|integer', // Ejemplo de validación adicional
            // Añade más reglas de validación según sea necesario
        ];
    }

    // Opcional: Define mensajes de error personalizados
    public function messages()
    {
        return [
            'id_pais.required' => 'El ID del país es requerido.',
            'id_pais.integer' => 'El ID del país debe ser un número.',
            // Añade más mensajes de error personalizados según sea necesario
        ];
    }
}
