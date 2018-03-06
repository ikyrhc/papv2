<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_personal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	//	Se Actualizo la lista de Campos de la tabla Tb_usuarios
        'usuario', 'nom', 'a_pat', 'a_mat', 'fe_nac', 'rfc', 'curp', 'nss', 'dom', 'no_int', 'no_ext', 'col', 'mun',
        'edo', 'ciu', 'cp', 'tel_casa', 'tel_cel', 'tel_casa_r', 'tel_cel_e', 'email_p', 'email_e', 'foto', 'dir_foto',
        'edo_civ', 'tipo_san', 'doc_se', 'doc_ife', 'doc_curp', 'doc_an', 'doc_cap', 'doc_cdom', 'doc_imss', 'doc_reco',
        'doc_cest', 'doc_lic', 'doc_cred_e', 'fe_ing', 'fe_baja', 'estatus', 'observa', 'password', 'sede', 'cargo', 
        't_acceso_1', 'empresa', 't_mens'
    ];
}