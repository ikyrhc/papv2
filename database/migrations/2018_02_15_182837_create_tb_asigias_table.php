<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAsigiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_asigias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_int', 5)->unique()->comment('Identificador Unico de Clientes');
            $table->string('rfc', 13)->unique()->comment('RFC del Cliente');
            $table->string('raz_soc')->comment('Razon Social del Cliente');
            $table->string('dom')->comment('Domicilio del Cliente');
            $table->string('no_int', 10)->nullable()->comment('Numero Interior');
            $table->string('no_ext', 10)->comment('Numero Exterior');
            $table->string('col', 150)->comment('Colonia en base a Ctl_Cp');
            $table->string('mun', 150)->comment('Municipio en Base a Ctl_Cp');
            $table->string('edo', 150)->comment('Estado en Base a Ctl_Cp');
            $table->string('ciu', 150)->comment('Ciudad en base a Ctl_CP');
            $table->string('cp', 5)->comment('Codigo Postal en Base a Ctl_Cp');
            $table->string('tel_of', 13)->comment('Telefono de Oficina');
            $table->string('tel_of2', 13)->nullable()->comment('Telefono Secundario de la Oficina');
            $table->string('fax', 13)->nullable()->comment('Fax de la Empresa');
            $table->string('email', 50)->nullable()->comment('Email de La Empresa');
            $table->string('http', 50)->nullable()->comment('Direccion WEB de la Empresa');
            $table->date('fe_reg')->comment('Fecha de Registro en el Sistema');
            $table->string('estatus', 1)->default(1)->comment('Estatus del Sistema 1 Activo 0 Inactivo');
            $table->longText('observa')->comment('Observaciones');
            $table->string('contra', 15)->comment('Contrasena del Cliente');
            $table->string('empresa', 15)->default('PAP')->comment('Empresa se Utiliza para el Uso de Multiempresas');
            $table->string('p_conta', 50)->comment('Persona de Contacto en la Empresa');
            $table->string('p_email', 50)->comment('eMail de Contacto en la Empresa');
            $table->string('sc_prin', 20)->comment('SubCliente Principal');
            $table->string('cve_vend', 15)->comment('Clave del Vendedor Viene de la tabla de Personal');
            $table->string('ad_gu_pr', 1)->comment('Cliente Administra Guias Propias');
            $table->string('ubica', 3)->comment('Ubicacion de el Cliente en base a catalogo de IATAS');
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
        Schema::dropIfExists('tb_asigias');
    }
}
