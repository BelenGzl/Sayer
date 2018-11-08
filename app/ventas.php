<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    protected $primaryKey = 'id_Vent';  
    protected $fillable=['id_Vent','cantidad','fecha','factura','total','id_Cli','id_Tra'];
}
