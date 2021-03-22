<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarEmpleadoRequest extends FormRequest
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
            'nombre_completo'=>'required',
            'departamento'=>'required',
            'categoria'=>'required',
            'email'=>'required',
            'telefono'=>'required',
            'fecha_alta'=>'required',
            'observaciones'=>'required',
        ];
    }
}
