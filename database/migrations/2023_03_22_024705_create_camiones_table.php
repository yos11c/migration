<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camiones', function (Blueprint $table) {
            $table->id('placa');
            $table-> string('placa_camion',6);
            $table->string('marca',25);
            $table->string('color',25);
            $table->date('model');
            $table->integer('capacidad_toneladas');
            $table->unsignedBigInteger('transporte_id')->nullable();
            $table->foreign('transporte_id')->references('id')->on('transporte')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camiones');
    }
}
