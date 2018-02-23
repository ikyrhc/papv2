<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtlTpotransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctl_tpotrans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cve', 3)->comment('Clave');
            $table->string('des', 25)->comment('Descripcion');
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
        Schema::dropIfExists('ctl_tpotrans');
    }
}
