<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoRequest extends FormRequest
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
            'direccion_envio' => 'required',
			'barrio' => 'required',
            'fecha_entrega' => 'required|date|after:yesterday',
            'tipo_documento' => 'required',
            'identificacion_cliente' => 'required',       
			'nombre_contacto' => 'required',
			'celular_contacto' => 'required',
			'email_contacto' => ['required', 'email'],
			'forma_pago' => 'required',
			'privacidad' => 'required',
        ];
    }
    public function messages() {
		return [
			'direccion_envio.required' => 'El campo direccion de envio es requerido',
			'barrio.required' => 'El campo barrio es requerido',
			'fecha_entrega.required' => 'El campo fecha de entrega es requerido',
			'fecha_entrega.after' => 'La fecha de entrega no puede ser anterior a la fecha de hoy',
            'nombre_contacto.required' => 'El campo nombre de contaco es requerido',
            'tipo_documento.required' => 'El campo tipo de documento de contaco es requerido',
            'identificacion_cliente.required' => 'El campo identificacion de contaco es requerido',
			'celular_contacto.required' => 'El campo celular de contaco es requerido',
			'email_contacto.required' => 'El campo email de contaco es requerido',
			'email_contacto.email' => 'El email ingresado no tiene el formato correcto',
			'forma_pago.required' => 'El campo forma de pago es requerido',
			'privacidad.required' => 'Debes leer y aceptar la Politica de Privacidad',
		];
	}
}
