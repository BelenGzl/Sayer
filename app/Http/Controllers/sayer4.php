<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\proveedores;
use App\municipios;

class sayer4 extends Controller
{
   public function altaproveedor()
    {
     	 
	 
	 $clavequesigue = proveedores::orderBy('id_Prov','desc')
								->take(1)
								->get();
     $idprov = $clavequesigue[0]->id_Prov+1;
     
	 $municipios = municipios::orderBy('municipios','asc')
						  ->get();
					return view ("sistema.altaproveedor")
	 ->with('idprov',$idprov)
	 ->with('municipios',$municipios);	  
	 
	 
	}
	 public function guardaproveedor(Request $request)
    {
		$id_Prov = $request->id_Prov;
		$nombre = $request->nombre;
			$calle = $request->calle;
			$numero =  $request->numero;
			$colonia = $request->colonia;
			$cp = $request->cp;
			$tel = $request->tel;
			$correo = $request->correo;
        $this->validate($request,[
	     'id_Prov'=>'required|numeric',
		 'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'calle'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'numero'=>'required|numeric',
	'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
	'cp'=>'required|numeric',
	'tel'=>'required|numeric',
	'correo'=>'required|email'
	     ]);
		 
            $prov = new proveedores;
			$prov->id_Prov = $request->id_Prov;
			$prov->nombre = $request->nombre;
			$prov->calle = $request->calle;
			$prov->numero = $request->numero;
			$prov->colonia = $request->colonia;
			$prov->cp = $request->cp;
			$prov->tel = $request->tel;
			$prov->correo = $request->correo;
			$prov->id_Mun =$request->id_Mun;
			$prov->save();
			$proceso = "Alta proveedor";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  	 
	 
	}
	
	///Reporte//
	 public function reporteproveedor()
	{
	$proveedores=proveedores::orderBy('id_Prov','asc')
	          ->get();
	  return view('sistema.reporteproveedor')
	  ->with('proveedores',$proveedores);                  
	}
}
