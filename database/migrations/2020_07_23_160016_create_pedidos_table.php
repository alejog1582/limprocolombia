<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('estado');
			$table->integer('id_producto')->unsigned();
			$table->string('nombre_producto');
			$table->integer('cantidades');
			$table->string('direccion_envio');
			$table->string('apto_casa_oficina')->nullable();
			$table->string('barrio');
			$table->date('fecha_entrega');
			$table->time('hora_entrega')->nullable();
            $table->string('tipo_documento');
            $table->string('identificacion_cliente');
            $table->string('nombre_contacto');
			$table->string('celular_contacto');
			$table->string('email_contacto');
			$table->string('medio_pago');
			$table->integer('valor_producto');
            $table->string('valor_pedido');
            $table->string('observacion')->nullable();
            $table->date('fecha_despacho')->nullable();
			$table->string('codigo_promocional')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
