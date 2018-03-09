<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctl_estatus extends Model
{
    protected $fillable = [
            'id',
            'estatus',
            'sub_est',
            'descrip',
	];
}
