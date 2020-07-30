<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('tipo_servicio');
            $table->string('lugar_servicio');
            $table->string('plan');
            $table->string('periodicidad');
            $table->string('nombre_cliente');
            $table->string('email');
            $table->string('celular_contacto');
            $table->string('fijo_contacto')->nullable();
            $table->string('ciudad');
            $table->string('barrio')->nullable();
            $table->string('observacion')->nullable();
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
        Schema::dropIfExists('cotizaciones');
    }
}
