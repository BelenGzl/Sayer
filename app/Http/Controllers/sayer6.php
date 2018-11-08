<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\trabajadores;
use App\municipios;

class sayer6 extends Controller
{
    public function altatrabajador()
    {
     	 
	 
	 $clavequesigue = trabajadores::orderBy('id_Tra','desc')
								->take(1)
								->get();
     $idtra = $clavequesigue[0]->id_Tra+1;
     
$municipios = municipios::orderBy('municipios','asc')
						  ->get();
					return view ("sistema.altatrabajador")
	 ->with('idtra',$idtra)
	 ->with('municipios',$municipios);	  
	}
	
	public function guardatrabajador(Request $request)
    {
		$id_Tra = $request->id_Tra;
		$nombre = $request->nombre;
		$apellidop = $request->apellidop;
		$apellidom = $request->apellidom;
		$calle = $request->calle;
		$numero =  $request->numero;
		$colonia = $request->colonia;
		$cp = $request->cp;
		$tel = $request->tel;
		$correo = $request->correo;
        $this->validate($request,[
	     'id_Tra'=>'required|numeric',
		 'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 '$apellidop'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 '$apellidom'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'calle'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'numero'=>'required|numeric',
	'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
	'cp'=>'required|numeric',
	'tel'=>'required|numeric',
	'archivo' => 'image|mimes:jpg,jpeg,gif,png',
	'correo'=>'required|email'
	     ]);
		
		$file = $request->file('archivo');
		if($file!=""){
	 		$ldate = date('Ymd_His_');
		 	$img = $file->getClientOriginalName();
		 	$img2 = $ldate.$img;

			\Storage::disk('local')->put($img2, \File::get($file));	
		}
		else
		{
			$img2='sinfoto.jpg';
		}
            $idtra = new trabajadores;
			$idtra->id_Tra = $request->id_Tra;
			$idtra->nombre = $request->nombre;
			$idtra->apellidop = $request->apellidop;
			$idtra->apellidom = $request->apellidom;
			$idtra->calle = $request->calle;
			$idtra->numero = $request->numero;
			$idtra->colonia = $request->colonia;
			$idtra->cp = $request->cp;
			$idtra->tel = $request->tel;
			$idtra->archivo = $img2;
			$idtra->correo = $request->correo;
			$idtra->id_Mun =$request->id_Mun;
			$idtra->save();
			$proceso = "Alta trabajador";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  	 
	 
	}
	
	///Reporte//
	 public function reportetrabajador()
	{
	$trabajadores=trabajadores::orderBy('id_Tra','asc')
	          ->get();
	  return view('sistema.reportetrabajador')
	  ->with('trabajadores',$trabajadores);                  
	}
}
