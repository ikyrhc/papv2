<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_servicios', function (Blueprint $table) {
            $table->increments('id')->comment('Identificador Unico del registro para uso Interno');
            $table->string('os', 30)->unique()->comment('Numero de Guia PAP');
            $table->string('os_c', 30)->nullable()->comment('Orden de Servicio del Cliente');
            $table->string('estatus', 15)->comment('Estatus que Guarda el Servicio en el Sistema ULTIMO');
            $table->string('sub_est', 20)->comment('Sub Estatus segun el ctl_estatus');
            $table->string('descrip', 100)->comment('Descripcion segun ctl_estatus');
            $table->date('fe_alta')->comment('Fecha de alta del Servicio');
            $table->time('hr_alta')->comment('Hora de alta del Servicio');
            $table->date('fe_cierre')->nullable()->comment('Fecha de cierre en el Sistema del Servicio');
            $table->time('hr_cierre')->nullable()->comment('Hora de cierre en el Sistema del Servicio');
            $table->date('fe_entrega')->nullable()->comment('Fecha de entrega del Envio');
            $table->time('hr_entrega')->nullable()->comment('Hora de entrega del Envio');
            $table->string('id_mens', 10)->nullable()->comment('Identificador del Mensajero');
            $table->string('tp_mens', 20)->nullable()->comment('Tipo de Mensajero');
            $table->string('id_coord', 10)->nullable()->comment('Identificador del Cordinador');
            $table->string('tpo_serv', 3)->nullable()->comment('Tipo de Servicio');
            $table->string('tpo_trans', 3)->nullable()->comment('Tipo de Transporte');
            $table->integer('pzas')->default('1')->comment('Numero de Piezas Por Defecto 1 Pza');
            $table->integer('peso')->default('1')->nullable()->comment('Peso del Envio Por Defecto 1 KG');
            $table->integer('alto')->defaul('0')->nullable()->comment('Alto del Paquete en Centimetros');
            $table->integer('ancho')->default('0')->nullable()->comment('Ancho del Paquete en Centimetros');
            $table->integer('largo')->default('0')->nullable()->comment('Largo del Paquete en Centimetros');
            $table->integer('peso_vol')->default('0')->nullable()->comment('Peso Volumen calculado por Sistema');
            $table->integer('peso_amp')->default('0')->nullable()->comment('Peso Amparado por la Guia');
            $table->double('vcod', 8, 2)->default('0')->nullable()->comment('Valor de COD');
            $table->double('costo', 8, 2)->default('0')->nullable()->comment('Precio de la Guia Viene de la tb_asigias');
            $table->double('c_adic', 8, 2)->default('0')->nullable()->comment('Costo Adicional de la Guia');
            $table->string('f_pago', 2)->comment('Forma de Pago');
            $table->string('id_int', 20)->comment('Identificador Interno del Cliente');
            $table->string('rtm_nom', 100)->comment('Nombre del Remitente');
            $table->string('rtm_emp', 100)->nullable()->comment('Empresa del Remitente');
            $table->string('rtm_hora_r', 20)->nullable()->comment('Hora de Recoleccion');
            $table->string('rtm_obs')->nullable()->comment('Observaciones para Recoleccion');
            $table->string('rtm_dom')->comment('Domicilio de la Recoleccion');
            $table->string('rtm_no_int', 10)->nullable()->comment('No Interior del Domcilio del Cliente');
            $table->string('rtm_no_ext', 10)->comment('No Exterior del Domicilio del Cliente');
            $table->string('rtm_col', 150)->comment('Colonia en Base ctl_cp');
            $table->string('rtm_mun', 150)->comment('Municipio en Base ctl_cp');
            $table->string('rtm_edo', 150)->comment('Estado en Base ctl_cp');
            $table->string('rtm_ciu', 150)->comment('Ciudad en base a Ctl_CP');
            $table->string('rtm_cp', 5)->comment('Codigo Postal en base ctl_cp');
            $table->string('rtm_ref')->nullable()->comment('Referencias del Remitente');
            $table->string('rtm_tel', 15)->nullable()->comment('Telefono del Remitente');
            $table->string('rtm_cel', 15)->nullable()->comment('Telefono Celular del Remitente');
            $table->string('rtm_email', 50)->nullable()->comment('Email del Remitente');
            $table->string('id_subcte', 20)->nullable()->comment('Identificador del SubCliente o Destinatario');
            $table->string('des_nom', 100)->comment('Nombre del Destinatario');
            $table->string('des_emp', 100)->nullable()->comment('Empresa del Destinatario');
            $table->string('des_hora_e', 20)->nullable()->comment('Hora de Entrega Solicitada RANGO');
            $table->string('des_obs')->nullable()->comment('Observaciones Destinatario');
            $table->string('des_dom')->comment('Domicilio del Destinatario');
            $table->string('des_no_int', 10)->nullable()->comment('No Interior del Domcilio del Cliente');
            $table->string('des_no_ext', 10)->comment('No Exterior del Domicilio del Cliente');
            $table->string('des_col', 150)->comment('Colonia en base ctl_cp');
            $table->string('des_mun', 150)->comment('Municipio en base ctl_cp');
            $table->string('des_edo', 150)->comment('Estado en base ctl_cp');
            $table->string('des_ciu', 150)->comment('Ciudad en base a Ctl_CP');
            $table->string('des_cp', 5)->comment('Codigo Postal en base ctl_cp');
            $table->string('des_ref')->comment('Referencias del Destinatario');
            $table->string('des_tel', 15)->nullable()->comment('Telefono del Destinatario');
            $table->string('des_cel', 15)->nullable()->comment('Telefono Celular del Destinatario');
            $table->string('des_email', 50)->nullable()->comment('eMail del Destinatario');
            $table->longText('historial')->comment('Historial de el Envio');
            $table->date('1vis_fe')->nullable()->comment('Fecha de la Ultima Visita');
            $table->string('for_impre', 30)->comment('Formato de Impresion');
            $table->string('empresa', 15)->default('PAP')->comment('Empresa que sirve para Multiempresas del Sistema');
            $table->double('val_dec', 8, 2)->default('0')->comment('Valor Declarado');
            $table->double('seguro', 8, 2)->default('0')->comment('Importe del Seguro');
            $table->string('guia_ext', 30)->nullable()->comment('Guia Externa en Caso de Utilizar Carrier Externo');
            $table->string('m_externa', 25)->nullable()->comment('Nombre del carrier Externo');
            $table->string('origen', 3)->nullable()->comment('Origen del Paquete');
            $table->string('destino', 100)->nullable()->comment('Destino del Paquete en base ctl_municipios');
            $table->tinyInteger('recole')->comment('Marca si fue Recoleccion');
            $table->date('fe_recole')->comment('Fecha de la Recoleccion');
            $table->time('hr_recole')->comment('Hora de la Recoleccion');
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
        Schema::dropIfExists('tb_servicios');
    }
}
