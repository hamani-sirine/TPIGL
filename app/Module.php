<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
///Model class.
///
///This class serves as a model for the database table "module".
class Module extends Model
{
    protected $table='module';
    protected $primaryKey = 'id_module';

}
