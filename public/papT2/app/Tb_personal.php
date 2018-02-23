<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_personal extends Model
{
        protected $fillable = [

        'usuario', 'nom', 'a_pat', 'a_mat', 'fe_nac', 'fe_ing'

    ];
}
