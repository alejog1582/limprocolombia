<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CotizacionRequest extends FormRequest
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
            'tipo_servicio' => 'required',
			'lugar_servicio' => 'required',
			'plan' => 'required',
            'periodicidad' => 'required',
            'nombre_cliente' => 'required',
            'email' => ['required', 'email'],
            'celular_contacto' => 'required',
            'ciudad' => 'required',
            'privacidad' => 'required',
        ];
    }

    public function messages() {
		return [
			'tipo_servicio.required' => 'El campo Servicio de Interes es obligatorio',
			'lugar_servicio.required' => 'EL campo Lugar de Servicio es obligatorio',
			'plan.required' => 'El campo Plan es obligatorio',
            'periodicidad.required' => 'El campo Periodicidad es obligatorio',
            'nombre_cliente.required' => 'El campo Nombre es obligatorio',
			'email.required' => 'El campo Email es obligatorio',
			'email.email' => 'La informacion ingresada no corresponde a un Email valido',
			'celular_contacto.required' => 'El campo Celular es obligatorio',
            'ciudad.required' => 'El campo Ciudad es obligatorio',
            'privacidad.required' => 'Debe leer y autorizar la politica de privacidad',
        ];
    }
}
