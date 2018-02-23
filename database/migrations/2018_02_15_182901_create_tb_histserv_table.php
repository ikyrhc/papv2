<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbHistservTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_histserv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('os', 30)->comment('Orden de Servicio Consultada');
            $table->string('estatus', 15)->comment('En Base a Catalogo de Estatus');
            $table->string('sub_est', 20)->comment('En Base a Catalogo de Estatus');
            $table->string('descrip', 100)->comment('Descripcion del Estatus');
            $table->string('observa')->nullable()->comment('Observaciones del Mensajero Referentes a la Visita');
            $table->string('id_mens', 15)->comment('Identificador del Mensajero');
            $table->date('fe_visita')->comment('Fecha de la Visita');
            $table->time('hr_visita')->comment('Hora de la Visita');
            $table->date('fe_mov')->comment('Fecha de Captura en Sistema');
            $table->time('hr_mov')->comment('Hora de Captura en Sistema');
            $table->string('usuario', 15)->comment('Identificador del Usuario que Captura en Sistema');
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
        Schema::dropIfExists('tb_histserv');
    }
}
