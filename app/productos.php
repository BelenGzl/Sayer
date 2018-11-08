<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $primaryKey = 'id_Prod';  
    protected $fillable=['id_Prod','costo','unidad','id_Cat','productos','id_Cat','clave','maximos','minimos','reorden'];
}
