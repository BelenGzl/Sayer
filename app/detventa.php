<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detventa extends Model
{
    protected $primaryKey = 'id_Detv';  
    protected $fillable=['id_Detv','Cantidad Producto','Precio Unitario','total','id_Vent','id_Prod'];
}
