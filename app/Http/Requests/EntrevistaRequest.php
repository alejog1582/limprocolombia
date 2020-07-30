<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntrevistaRequest extends FormRequest
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
			'nombre_funcionaria_abreviado' => 'required',
			'fecha_nacimiento' => 'required',
            'tipo_sangre' => 'required',
            'fecha_expedicion_cedula' => 'required',
			'eps' => 'required',
			'pension' => 'required',
            'operador_celular' => 'required',
            'cuenta_ahorro' => 'required',
            'numero_cuenta_ahorro' => 'required',
            'talla_uniforme' => 'required',
            'talla_zapato' => 'required',
            'cocina' => 'required',
            'cafeteria' => 'required',
            'plancha' => 'required',
            'tratamiento_pisos' => 'required',
            'productos_aseo' => 'required',
            'manipulacion_alimentos' => 'required',
            'nombre_acudiente' => 'required',
            'celular_acudiente' => 'required',
            'trabajo_anterior' => 'required',
            'experiencia_laboral' => 'required',
            'fortalezas' => 'required',
            'debilidades' => 'required',
            'hijos' => 'required',
            'conformacion_familia' => 'required',
            'tipo_vivienda' => 'required',
            'estudios' => 'required',
            'tiempo_libre' => 'required',
            'disponibilidad_tiempo' => 'required',
            'antecedentes_medicos' => 'required',
            'concepto_entrevista' => 'required',
            'fecha_entrevista' => 'required',
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
            'oficio.required' => 'El campo Cargo de Interes es obligatorio',
            'ciudad.required' => 'El campo Ciudad es obligatorio',
            'experiencia_oficio.required' => 'El campo Experiencia es obligatorio',
            'nombre_funcionaria_abreviado.required' => 'El campo Nombre Avrebiad es obligatorio',
			'fecha_nacimiento.required' => 'El campo Fecha de Nacimiento es obligatorio',
            'tipo_sangre.required' => 'El campo Tipo de Sangre es obligatorio',
            'fecha_expedicion_cedula.required' => 'El campo Fecha de Expedicion de Cedula es obligatorio',
			'eps.required' => 'El campo EPS es obligatorio',
			'pension.required' => 'El campo Pension es obligatorio',
            'operador_celular.required' => 'El campo Operador Celular es obligatorio',
            'cuenta_ahorro.required' => 'El campo Banco Cuenta de Ahorro es obligatorio',
            'numero_cuenta_ahorro.required' => 'El campo Numero de Cuenta es obligatorio',
            'talla_uniforme.required' => 'El campo Talla Uniforme es obligatorio',
            'talla_zapato.required' => 'El campo Talla Zapatos es obligatorio',
            'cocina.required' => 'El campo Cocina es obligatorio',
            'cafeteria.required' => 'El campo Greca es obligatorio',
            'plancha.required' => 'El campo Plancha es obligatorio',
            'tratamiento_pisos.required' => 'El campo T. Pisos es obligatorio',
            'productos_aseo.required' => 'El campo P. Aseo es obligatorio',
            'manipulacion_alimentos.required' => 'El campo M. Alimentos es obligatorio',
            'nombre_acudiente.required' => 'El campo Nombre Acudiente es obligatorio',
            'celular_acudiente.required' => 'El campo Celular Acudiente es obligatorio',
            'trabajo_anterior.required' => 'El campo Trabajo Anterior es obligatorio',
            'experiencia_laboral.required' => 'El campo Experiencia Laboral es obligatorio',
            'fortalezas.required' => 'El campo Fortalezas es obligatorio',
            'debilidades.required' => 'El campo Debilidades es obligatorio',
            'hijos.required' => 'El campo Hijos es obligatorio',
            'conformacion_familia.required' => 'El campo Conformacion Familiar es obligatorio',
            'tipo_vivienda.required' => 'El campo Tipo Vivienda es obligatorio',
            'estudios.required' => 'El campo Estudio es obligatorio',
            'tiempo_libre.required' => 'El campo Tiempo Libre es obligatorio',
            'disponibilidad_tiempo.required' => 'El campo Disponibilidad de Tiempo es obligatorio',
            'antecedentes_medicos.required' => 'El campo Antecedentes es obligatorio',
            'concepto_entrevista.required' => 'El campo Concepto de Entrevista es obligatorio',
            'fecha_entrevista.required' => 'El campo Fecha d Entrevista es obligatorio',
        ];
    }
}
