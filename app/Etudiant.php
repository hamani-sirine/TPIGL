<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{   
    public $timestamps=false;
    protected $table='etudiant';
    protected $primaryKey = 'id_etud';
}
