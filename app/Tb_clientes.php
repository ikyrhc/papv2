<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_clientes extends Model
{
    //'id_int', 'rfc', 'raz_soc', 'nom_com', 'dom', 'no_int', 'no_ext', 'col', 'mun', 'edo', 'ciu', 'cp', 'tel_of', 'tel_of_2', 'tel_cel', 'fax', 'http', 'fe_reg', 'estatus', 'observa', 'contra', 'empresa', 'p_conta', 'p_email', 'p_conta2', 'p_email2', 'sc_prin', 'cve_ven', 'ubica',
	protected $fillable = [
'id_int', 'rfc', 'raz_soc', 'nom_com', 'dom', 'no_int', 'no_ext', 'col', 'mun', 'edo', 'ciu', 'cp', 'tel_of', 'tel_of_2', 'tel_cel', 'fax', 'http', 'fe_reg', 'estatus', 'observa', 'contra', 'empresa', 'p_conta', 'p_email', 'p_conta2', 'p_email2', 'sc_prin', 'cve_ven', 'ubica'
];
}
