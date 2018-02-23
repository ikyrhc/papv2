<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtlRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctl_region', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regional', 5)->comment('Identificador de la Region');
            $table->string('des', 15)->comment('Descripcion');
            $table->string('empresa')->default('PAP')->comment('Empresa para MultiEmpresas');
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
        Schema::dropIfExists('ctl_region');
    }
}
