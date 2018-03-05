<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSubclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_subclientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_int', 20)->comment('Identificador del Cliente');
            $table->string('sc_prin', 20)->comment('ID del SubCliente Principal');
            $table->string('rfc', 13)->comment('RFC del Cliente');
            $table->string('raz_soc')->comment('Razon Social del Cliente');
            $table->string('dom')->comment('Domicilio del Cliente');
            $table->string('no_int', 10)->nullable()->comment('No Interior del Domcilio del Cliente');
            $table->string('no_ext', 10)->comment('No Exterior del Domicilio del Cliente');
            $table->string('col', 150)->comment('Colonia en Base a Ctl_CP');
            $table->string('mun', 150)->comment('Municipio en base Ctl_CP');
            $table->string('edo', 150)->comment('Estado en base a Ctl_CP');
            $table->string('ciu', 150)->comment('Ciudad en base a Ctl_CP');
            $table->string('cp', 5)->comment('Codigo Postal eb base a Ctl_CP');
            $table->string('tel_of', 13)->comment('Telefono de la Oficina del Cliente');
            $table->string('tel_of_2', 13)->nullable()->comment('Telefono Secundario del Cliente');
            $table->string('tel_cel', 13)->nullable()->comment('Telefono Celular del Cliente');
            $table->string('fax', 13)->nullable()->comment('Numero de Fax del Cliente');
            $table->string('http', 50)->nullable()->comment('Pagina WEB del Cliente');
            $table->date('fe_reg')->comment('Fecha de Registro del Cliente');
            $table->string('estatus', 1)->default('1')->comment('Estatus del Cliente 1 Activo 0 Inactivo');
            $table->longText('observa')->nullable()->comment('Observaciones del Cliente');
            $table->string('contra', 15)->comment('Contrasena del Cliente');
            $table->string('empresa', 15)->default('PAP')->comment('Uso interno del Sistema Multiempresas');
            $table->string('p_conta', 50)->comment('Persona de Contacto');
            $table->string('p_email', 50)->comment('eMail de Contacto de la Empresa');
            $table->string('cve_ven', 15)->comment('Clave del Vendedor en base a tb_personal');
            $table->string('ad_gu_pr', 1)->default('0')->comment('Administra Guias Propias 0 No Admiinistra 1 Administra');
            $table->string('ubica', 3)->comment('Ubicacion en base al catalogo de IATAS');            
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
        Schema::dropIfExists('tb_subclientes');
    }
}
