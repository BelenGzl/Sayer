<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\productos;
use App\categorias;

class sayer2 extends Controller
{
   public function altaproducto()
    {
     	 
	 
	 $clavequesigue = productos::orderBy('id_Prod','desc')
								->take(1)
								->get();
     $idprod = $clavequesigue[0]->id_Prod+1;
	  
	  $categorias = categorias::orderBy('categoria','asc')
						  ->get();
   
					return view ("sistema.altaproducto")
					->with('categorias',$categorias)
	 ->with('idprod',$idprod);
	  
	  
	}
	 public function guardaproducto(Request $request)
    {
		$id_Prod = $request->id_Prod;
		$costo = $request->costo;
		$unidad = $request->unidad;
		$productos =  $request->productos;
		$clave = $request->clave;
		$maximos = $request->maximos;
		$minimos = $request->minimos;
		$reorden = $request->reorden;
        $this->validate($request,[
	     'id_Prod'=>'required|numeric',
		 'costo'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
		 'unidad'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'productos'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'archivo' => 'image|mimes:jpg,jpeg,gif,png',
	     'clave'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+[0-9]+$/'],
	     'maximos'=>'required|numeric',
	     'minimos'=>'required|numeric',
         'reorden'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
	     ]);
		 $file = $request->file('archivo');
		if($file!=""){
	 	//ldate => 20180928_063455_
			$ldate = date('Ymd_His_');
		 //$img = xxx.jpg
			$img = $file->getClientOriginalName();
		 //img2 = 20180928_063455_xxx.jpg
			$img2 = $ldate.$img;

			\Storage::disk('local')->put($img2, \File::get($file));	
		}
		 
            $prod = new productos;
			$prod->id_Prod = $request->id_Prod;
			$prod->costo = $request->costo;
			$prod->unidad = $request->unidad;
			$prod->id_Cat = $request->id_Cat;
			$prod->productos = $request->productos;
			$prod->archivo = $img2;
			$prod->clave = $request->clave;
			$prod->maximos = $request->maximos;
			$prod->minimos = $request->minimos;
			$prod->reorden = $request->reorden;
			$prod->save();
			$proceso = "Alta productos";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);	  	 
	}
	///Reporte//
	 public function reporteproducto()
	{
	$productos=productos::orderBy('id_Prod','asc')
	          ->get();
	  return view('sistema.reporteproducto')
	  ->with('productos',$productos);                  
	}
}
