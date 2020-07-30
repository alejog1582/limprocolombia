<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('tipo_servicio');
            $table->string('ciudad');
            $table->string('fecha_servicio');
			$table->string('plan');
			$table->integer('valor_plan');
            $table->string('hora_inicio')->nullable();
            $table->string('lugar_servicio');
            $table->string('tipo_documento');
            $table->string('numero_documento');
			$table->string('nombre_cliente');
			$table->string('direccion_servicio');
			$table->string('detalle_direccion')->nullable();
			$table->string('email');
			$table->string('celular_contacto');
			$table->string('fijo_contacto')->nullable();
			$table->integer('id_funcionaria_asignada')->nullable()->unsigned();
            $table->string('metodo_pago')->nullable();
            $table->string('kit_productos')->nullable();
			$table->string('estado');
			$table->integer('id_calificacion')->nullable()->unsigned();
			$table->string('canje')->nullable();
			$table->string('observacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
