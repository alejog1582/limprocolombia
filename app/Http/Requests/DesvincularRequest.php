<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesvincularRequest extends FormRequest
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
            'motivo_desvinculacion' => 'required',
			'fecha_desvinculacion' => 'required',
        ];
    }
    public function messages() {
		return [
			'motivo_desvinculacion.required' => 'El campo Motivo de Desvinculacion es obligatorio',
			'fecha_desvinculacion.required' => 'EL campo Fecha de Desvinculacion es obligatorio',
        ];
    }
}
