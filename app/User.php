<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    //use Notifiable;
    public $timestamps=false;
    protected $table='user';
    //public $primaryKey ='id_user';

   protected $fillable=['login','email','mdp','nom','prenom','fonction',];
  // public $fillable=['nom','prenom','login'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden =
    [
        'mdp',
    ];
}
