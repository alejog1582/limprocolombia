<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canjes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('codigo_canje');
			$table->string('valor_canje');
			$table->string('estado');
            $table->string('email')->nullable();
            $table->string('servicio_canjeado')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canjes');
    }
}
