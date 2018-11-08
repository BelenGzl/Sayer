<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $primaryKey = 'id_Cat';  
    protected $fillable=['id_Cat','categoria','id_Prod'];
}
