<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $primaryKey = 'id_Prov';  
    protected $fillable=['id_Prov','nombre','calle','numero','colonia','cp','tel','correo','id_Mun'];
}
