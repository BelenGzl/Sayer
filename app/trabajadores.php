<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajadores extends Model
{
    protected $primaryKey = 'id_Tra';  
   protected $fillable=['id_Tra','nombre','apellidop','apellidom','calle','numero','colonia','cp','tel','archivo','correo','id_Mun'];
}
