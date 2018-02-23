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
        'usuario', 'nom', 'a_pat', 'a_mat'
    ];
}