<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtlEstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctl_estatus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estatus', 15)->comment('Estaus');
            $table->string('sub_est', 20)->comment('Sub Estaus');
            $table->string('descrip', 100)->comment('Descripcion del Estatus');
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
        Schema::dropIfExists('ctl_estatus');
    }
}
