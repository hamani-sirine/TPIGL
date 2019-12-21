<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
///Model class.
///
///This class serves as a model for the database table "note".
class Note extends Model
{
    protected $table='note';
    protected $primaryKey = 'id_note';
}
