<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtlCpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctl_cp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cp', 5)->comments('Codigo Postal de 5 Pos 0 al principio para Delegaciones');
            $table->string('colonia', 150)->nullable()->comments('Nombre de la Colonia');
            $table->string('tpo_asen', 100)->nullable()->comments('Tipo de Asentamiento');
            $table->string('municipio', 150)->nullable()->comments('Municipio');
            $table->string('estado', 150)->comments('Estado');
            $table->string('ciudad', 150)->comments('Ciudad');
            $table->string('estatus', 1)->nullable()->default('1')->comments('Estaus del Codigo Postal 1 Activo 0 Inactivo');
            $table->string('cve', 3)->default('--')->comment('Clave');
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
        Schema::dropIfExists('ctl_cp');
    }
}
