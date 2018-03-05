<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTbPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_personal', function(Blueprint $table)
		{
           $table->increments('id')->comment('Identificador Unico del Empleado Uso Interno');
            $table->string('usuario', 15)->unique()->comment('Clave Unica del Usuario');
            $table->string('nom', 50)->comment('Nombre(s) del Empleado');
            $table->string('a_pat', 50)->comment('Apellido Paterno del Empleado');
            $table->string('a_mat', 50)->comment('Apellido Materno del Empleado');
            $table->date('fe_nac')->comment('Fecha de Nacimiento');
            $table->string('rfc', 15)->comment('RFC del Empleado');
            $table->string('curp', 30)->nullable()->comment('CURP del Empleado');
            $table->string('nss', 30)->nullable()->comment('Numero de Seguro Social');
            $table->string('dom')->nullable()->comment('Domicilio del Empleado Calle');
            $table->string('no_int', 10)->nullable()->comment('No Interior del Domcilio');
            $table->string('no_ext', 10)->comment('No Exterior del Domicilio');
            $table->string('col', 150)->nullable()->comment('Colonia en base al Catalogo de CP');
            $table->string('mun', 150)->nullable()->comment('Municipio en base al catalogo de CP');
            $table->string('edo', 150)->nullable()->comment('Estado en Base al Catalogo de CP');
            $table->string('ciu', 150)->comment('Ciudad en base a Ctl_CP');
            $table->string('cp', 5)->nullable()->comment('Codigo Postal en Base al Catalogo de CP');
            $table->string('tel_casa', 15)->nullable()->comment('Telefono de Casa Particular');
            $table->string('tel_casa_r', 15)->nullable()->comment('Telefono de Recados');
            $table->string('tel_cel', 15)->nullable()->comment('Telefono Celular Personal');
            $table->string('tel_cel_e', 15)->nullable()->comment('Telefono Celular de la Empresa');
            $table->string('email_p', 50)->nullable()->comment('eMail Personal');
            $table->string('email_e', 50)->nullable()->comment('eMail de la Empresa');
            $table->tinyInteger('foto')->nullable()->comment('Identificador si Tiene Foto');
            $table->string('dir_foto', 100)->nullable()->comment('Ubicacion en el Servidor de la Foto RUTA');
            $table->string('edo_civ', 10)->nullable()->comment('Estado Civil');
            $table->string('tpo_san', 10)->nullable()->comment('Tipo de Sangre');
            $table->tinyInteger('doc_se')->nullable()->comment('Solicitud de Empleo');
            $table->tinyInteger('doc_ife')->nullable()->comment('Credencial de Elector IFE');
            $table->tinyInteger('doc_curp')->nullable()->comment('Cedula Unica Registro de Poblacion');
            $table->tinyInteger('doc_an')->nullable()->comment('Acta de Nacimiento');
            $table->tinyInteger('doc_cap')->nullable()->comment('Carta de Antecedentes Penales');
            $table->tinyInteger('doc_cdom')->nullable()->comment('Comprobante de Domicilio');
            $table->tinyInteger('doc_imss')->nullable()->comment('Cedula de Alta ante el IMSS');
            $table->tinyInteger('doc_reco')->nullable()->comment('Cartas de Recomendacion');
            $table->tinyInteger('doc_cest')->nullable()->comment('Comprobante de Estudios');
            $table->tinyInteger('doc_lic')->nullable()->comment('Licencia de Conducir');
            $table->tinyInteger('doc_cred_e')->nullable()->comment('Credencial de la Empresa');
            $table->date('fe_ing')->comment('Fecha de Ingreso a la Empresa');
            $table->date('fe_baja')->nullable()->comment('Fecha de Baja o Separacion de la Empresa');
            $table->string('estatus', 1)->comment('Estaus 1 Activo 0 Inactivo');
            $table->longText('observa')->nullable()->comment('Observaciones Generales acerca del Empleado');
            $table->string('password',20)->nullable()->comment('Contrasena');
            $table->string('sede', 20)->nullable()->comment('Plaza Sede del Empleado');
            $table->string('cargo', 20)->nullable()->comment('Cargo desempeñado en la Empresa');
            $table->string('t_acceso_1', 20)->nullable()->comment('Tipo de Acceso 1');
            $table->string('empresa', 15)->nullable()->default('PAP')->comment('Empresa que sera Utilizado por el Sistema Multiempresas');
            $table->string('t_mens', 20)->nullable()->default('PRP') ->comment('Tipo de Mensajero');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_personal');
    }
}
