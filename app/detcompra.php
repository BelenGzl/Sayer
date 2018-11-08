<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detcompra extends Model
{
    protected $primaryKey = 'id_Detc';  
    protected $fillable=['id_Detc','Valor total','id_Com','id_Fac'];
}
