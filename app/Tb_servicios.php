<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_servicios extends Model
{
	//	Modelo de la tabla Servicios
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	//	Modelo de la tabla Servicios
    	
            'os',
            'os_c',
            'estatus',
            'sub_est',
            'descrip',
            'fe_alta',
            'hr_alta',
            'fe_cierre',
            'hr_cierre',
            'fe_entrega',
            'hr_entrega',
            'id_mens',
            'tp_mens',
            'id_coord',
            'tpo_serv',
            'tpo_trans',
            'pzas',
            'peso',
            'alto',
            'ancho',
            'largo',
            'peso_vol',
            'peso_amp',
            'vcod',
            'costo',
            'c_adic',
            'f_pago',
            'id_int',
            'rtm_nom',
            'rtm_emp',
            'rtm_hora_r',
            'rtm_obs',
            'rtm_dom',
            'rtm_no_int',
            'rtm_no_ext',
            'rtm_col', 
            'rtm_mun',
            'rtm_edo',
            'rtm_ciu',
            'rtm_cp',
            'rtm_ref',
            'rtm_tel',
            'rtm_cel',
            'rtm_email',
            'id_subcte',
            'des_nom',
            'des_emp',
            'des_hora_e',
            'des_obs',
            'des_dom',
            'des_no_int',
            'des_no_ext',
            'des_col',
            'des_mun',
            'des_edo',
            'des_ciu',
            'des_cp',
            'des_ref',
            'des_tel',
            'des_cel',
            'des_email',
            'historial',
            '1vis_fe',
            'for_impre',
            'empresa',
            'val_dec',
            'seguro',
            'guia_ext',
            'm_externa',
            'origen',
            'destino',
            'recole',
            'fe_recole',
            'hr_recole',
            'tpo_guia'
	];
}
