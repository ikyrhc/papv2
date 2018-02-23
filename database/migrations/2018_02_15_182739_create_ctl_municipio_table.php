<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtlMunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctl_municipio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado', 150)->nullable()->comment('Identificador de Estado');
            $table->string('Municipio', 150)->nullable()->comment('Nombre del Municipio');
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
        Schema::dropIfExists('ctl_municipio');
    }
}
