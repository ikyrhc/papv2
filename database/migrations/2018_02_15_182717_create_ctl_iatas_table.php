<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtlIatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctl_iatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cve', 3)->nullable()->comment('Clave IATA');
            $table->string('des', 25)->nullable()->comment('Descripcion');
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
        Schema::dropIfExists('ctl_iatas');
    }
}
