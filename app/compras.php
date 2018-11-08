<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
    protected $primaryKey = 'id_Com';  
    protected $fillable=['id_Com','cantidad','fecha','Factura','Total','id_Prov','id_Tra'];
}
