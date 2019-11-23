<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
///Model class.
///
///This class serves as a model for the database table "etudiant".
class Etudiant extends Model
{   
    public $timestamps=false;
    protected $table='etudiant';
    protected $primaryKey = 'id_etud';
}
