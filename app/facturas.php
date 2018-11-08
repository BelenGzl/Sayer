<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facturas extends Model
{
    protected $primaryKey = 'id_Fac';  
    protected $fillable=['id_Fac','factura','fecha'];
}
