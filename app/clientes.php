<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
   protected $primaryKey = 'id_Cli';  
    protected $fillable=['id_Cli','nombre','apellidop','apellidom','calle','numero','colonia','cp','tel','correo','id_Mun']; 
}
