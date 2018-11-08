<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\municipios;

class sayer3 extends Controller
{
    public function altamunicipio()
    {
     	$clavequesigue = municipios::orderBy('id_Mun','desc')
								->take(1)
								->get();
     $idmun = $clavequesigue[0]->id_Mun+1;

					return view ("sistema.altamunicipio")
	 ->with('idmun',$idmun);
	 
	}
	public function guardamunicipio(Request $request)
    {
		$id_Mun = $request->id_Mun;
        $municipios =  $request->municipios;
        $this->validate($request,[
	     'id_Mun'=>'required|numeric',
         'municipios'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
	     ]);
		 
            $mun = new municipios;
			$mun->id_Mun = $request->id_Mun;
			$mun->municipios = $request->municipios;
			$mun->save();
			$proceso2 = "Alta municipios";
			$mensaje2 = "Registro guardado correctamente";
		    return view ('sistema.mensaje2')
			->with('proceso2',$proceso2)
			->with('mensaje2',$mensaje2);
}
///Reporte//
	 public function reportemunicipio()
	{
	$municipios=municipios::orderBy('id_Mun','asc')
	          ->get();
	  return view('sistema.reportemunicipio')
	  ->with('municipios',$municipios);                  
	}
}
