<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\clientes;
use App\municipios;

class sayer5 extends Controller
{
    public function altacliente()
    {
     	 
	 
	 $clavequesigue = clientes::orderBy('id_Cli','desc')
								->take(1)
								->get();
     $idcli = $clavequesigue[0]->id_Prod+1;
     
$municipios = municipios::orderBy('municipios','asc')
						  ->get();
					return view ("sistema.altacliente")
	 ->with('idcli',$idcli)
	 ->with('municipios',$municipios);	  
	}
	
	public function guardacliente(Request $request)
    {
		$id_Cli = $request->id_Cli;
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
	     'id_Cli'=>'required|numeric',
		 'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 '$apellidop'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 '$apellidom'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'calle'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'numero'=>'required|numeric',
	'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
	'cp'=>'required|numeric',
	'tel'=>'required|numeric',
	'correo'=>'required|email'
	     ]);
		 
            $cli = new clientes;
			$cli->id_Cli = $request->id_Cli;
			$cli->nombre = $request->nombre;
			$cli->apellidop = $request->apellidop;
			$cli->apellidom = $request->apellidom;
			$cli->calle = $request->calle;
			$cli->numero = $request->numero;
			$cli->colonia = $request->colonia;
			$cli->cp = $request->cp;
			$cli->tel = $request->tel;
			$cli->correo = $request->correo;
			$cli->id_Mun =$request->id_Mun;
			$cli->save();
			$proceso = "Alta cliente";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  	 
	 
	 
	}
	///Reporte//
	 public function reportecliente()
	{
	$clientes=clientes::orderBy('id_Cli','asc')
	          ->get();
	  return view('sistema.reportecliente')
	  ->with('clientes',$clientes);                  
	}
}
