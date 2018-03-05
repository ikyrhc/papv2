<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_track extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'usuario', 'fecha', 'hora', 'os', 'tipo', 'consulta', 'ip_acc'
    ];   
   
}
