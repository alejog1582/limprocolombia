<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AspiranteRequest extends FormRequest
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
            'tipo_documento' => 'required',
			'numero_documento' => 'required',
            'nombre_funcionaria' => 'required',
            'edad' => 'required',
			'email' => ['required', 'email'],
			'celular_contacto' => 'required',
            'direccion_casa' => 'required',
            'barrio_casa' => 'required',
            'ciudad' => 'required',
            'oficio' => 'required',
			'experiencia_oficio' => 'required',
			'privacidad' => 'required',
        ];
    }
    public function messages() {
		return [
			'tipo_documento.required' => 'El campo Tipo Documento es obligatorio',
			'numero_documento.required' => 'EL campo Numero de Documento es obligatorio',
			'nombre_funcionaria.required' => 'El campo Nombre es obligatorio',
			'edad.required' => 'El campo Edad es obligatorio',
			'email.required' => 'El campo Email es obligatorio',
			'email.email' => 'La informacion ingresada no corresponde a un Email valido',
			'celular_contacto.required' => 'El campo Celular es obligatorio',
            'direccion_casa.required' => 'El campo Direccion es obligatorio',
            'barrio_casa.required' => 'El campo Barrio es obligatorio',
            'ciudad.required' => 'El campo Ciudad es obligatorio',
            'oficio.required' => 'El campo Cargo de Interes es obligatorio',
            'experiencia_oficio.required' => 'El campo Experiencia es obligatorio',
			'privacidad.required' => 'Debe leer y autorizar la politica de privacidad',
        ];
    }
}
