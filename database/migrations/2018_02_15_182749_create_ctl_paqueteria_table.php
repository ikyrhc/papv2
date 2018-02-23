<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtlPaqueteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctl_paqueteria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bq_inicial', 15)->nullable()->comment('Bloque Inicial de Guias');
            $table->string('bq_final', 15)->nullable()->comment('Bloque Final de Guias');
            $table->string('estatus', 1)->nullable()->default('1')->comment('Estatus 1 Activo 0 Inactivo');
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
        Schema::dropIfExists('ctl_paqueteria');
    }
}
