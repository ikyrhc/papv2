<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario', 15)->comment('Usuario que Realiza la operacion');
            $table->date('fecha')->comment('Fecha en Que se Realiza La Transaccion');
            $table->time('hora')->comment('Hora en Que se Realiza la Transaccion');
            $table->string('os', 30)->comment('Orden de Servicio que se Consulta');
            $table->string('tipo', 20)->comment('Tipo de Operacion Solicitada');
            $table->longText('consulta')->comment('Codigo Sql Utilizado para Realizar la Consulta');
            $table->string('ip_acc', 20)->comment('Ip Utilizada para Accesar el Sistema y Realizar la Transaccion');
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
        Schema::dropIfExists('tb_tracks');
    }
}
