<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nombre_producto');
            $table->string('foto_producto');
            $table->string('caracteristicas_producto');
            $table->string('presentacion_producto')->nullable();
            $table->integer('precio_producto');
            $table->string('categoria_producto');
            $table->string('subcategoria_producto')->nullable();
            $table->string('estado_producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
