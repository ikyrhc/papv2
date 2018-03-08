<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctl_cps extends Model
{
    protected $table = 'ctl_cps';
	
	//'id','cp','colonia','tpo_asen','municipio','estado','ciudad','estatus','cve','created_at','updated_at'
	protected $fillable = ['cp','colonia','tpo_asen','municipio','estado','ciudad','estatus','cve'];
	
	
	public static function ctl_cps($cp){
		
		return Ctl_cps::where('cp','=',$cp)
		->get();
		
	}
}
