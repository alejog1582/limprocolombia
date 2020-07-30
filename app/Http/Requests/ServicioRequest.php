<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
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
            'ciudad' => 'required',
            'fecha_servicio' => 'required|after:yesterday',
            'lugar_servicio' => 'required',
            'plan' => 'required',
            'tipo_servicio' => 'required',
            'tipo_documento' => 'required',
            'numero_documento' => 'required',
            'nombre_cliente' => 'required',
            'email' => ['required', 'email'],
            'celular_contacto' => 'required',
            'direccion_servicio' => 'required',
            'metodo_pago' => 'required',
            'privacidad' => 'required',
        ];
    }
    public function messages() {
		return [
            'ciudad.required' => 'EL campo Ciudad del Servicio es obligatorio',
            'fecha_servicio.required' => 'El campo Fecha de Servicio es obligatorio',
            'fecha_servicio.after' => 'La fecha debe ser superior o igual a la fecha de hoy',
            'lugar_servicio.required' => 'EL campo Lugar de Servicio es obligatorio',
            'plan.required' => 'El campo Plan es obligatorio',
            'tipo_servicio.required' => 'El campo Tipo de Servicio es obligatorio',
			'tipo_documento.required' => 'El campo Tipo de Documento es obligatorio',
			'numero_documento.required' => 'El campo Documento es obligatorio',
			'nombre_cliente.required' => 'El campo Nombre Cliente es obligatorio',
            'email.required' => 'El campo Email es obligatorio',
            'email.email' => 'La informacion ingresada no corresponde a un Email valido',
            'celular_contacto.required' => 'El campo Celular es obligatorio',
            'direccion_servicio.required' => 'El campo Direccion es obligatorio',
            'metodo_pago.required' => 'El campo Metodo de Pago es obligatorio',
            'privacidad.required' => 'Debe leer y autorizar la politica de privacidad',
        ];
    }
}
