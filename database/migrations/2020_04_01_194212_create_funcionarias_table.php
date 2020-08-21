<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('tipo_documento');
			$table->string('numero_documento');
            $table->string('nombre_funcionaria');
            $table->string('edad');
			$table->string('email');
			$table->string('celular_contacto');
            $table->string('fijo_contacto')->nullable();
            $table->string('ciudad');
            $table->string('direccion_casa');
            $table->string('barrio_casa');
            $table->string('oficio');
            $table->string('experiencia_oficio');
			$table->string('url_foto')->nullable();
            $table->string('nombre_funcionaria_abreviado')->nullable();
            $table->string('fecha_nacimiento')->nullable();
			$table->string('tipo_sangre')->nullable();
            $table->string('fecha_expedicion_cedula')->nullable();
            $table->string('eps')->nullable();
            $table->string('pension')->nullable();
            $table->string('operador_celular')->nullable();
            $table->string('cuenta_ahorro')->nullable();
            $table->string('numero_cuenta_ahorro')->nullable();
            $table->string('talla_uniforme')->nullable();
            $table->string('talla_zapato')->nullable();
            $table->string('cocina')->nullable();
            $table->string('plancha')->nullable();
            $table->string('cafeteria')->nullable();
            $table->string('tratamiento_pisos')->nullable();
            $table->string('productos_aseo')->nullable();
            $table->string('manipulacion_alimentos')->nullable();
            $table->string('fecha_manipulacion_alimentos')->nullable();
			$table->string('nombre_acudiente')->nullable();
            $table->string('celular_acudiente')->nullable();
            $table->string('trabajo_anterior')->nullable();
            $table->string('experiencia_laboral')->nullable();
            $table->string('experiencia_tiempo')->nullable();
            $table->string('fortalezas')->nullable();
            $table->string('debilidades')->nullable();
            $table->string('hijos')->nullable();
            $table->string('conformacion_familia')->nullable();
            $table->string('tipo_vivienda')->nullable();
            $table->string('estudios')->nullable();
            $table->string('tiempo_libre')->nullable();
            $table->string('disponibilidad_tiempo')->nullable();
            $table->string('antecedentes_medicos')->nullable();
            $table->string('fecha_entrevista')->nullable();
            $table->string('concepto_entrevista')->nullable();
            $table->string('examenes_medicos')->nullable();
            $table->string('visita_domiciliaria')->nullable();
            $table->string('antecedentes')->nullable();
            $table->string('referencias_laborales')->nullable();
            $table->string('fecha_vinculacion')->nullable();
            $table->string('fecha_dotacion')->nullable();
            $table->string('capacitaciones')->nullable();
            $table->string('fecha_desvinculacion')->nullable();
            $table->string('motivo_desvinculacion')->nullable();
			$table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarias');
    }
}
