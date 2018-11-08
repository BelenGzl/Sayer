<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ventas;
use App\clientes;
use App\trabajadores;

class sayer9 extends Controller
{
   public function altaventa()
    {
     	 
	 
	 $clavequesigue = ventas::orderBy('id_Vent','desc')
								->take(1)
								->get();
     $idvent = $clavequesigue[0]->id_Vent+1;
     
	 $clientes = clientes::orderBy('clientes','asc')
						  ->get();
	 $trabajadores = trabajadores::orderBy('trabajadores','asc')
						  ->get();
					return view ("sistema.altacompra")
	
	 ->with('clientes',$clientes)
	 ->with('trabajadores',$trabajadores)
     ->with('idvent',$idvent);	 
	  
	}
	
	public function guardaventa(Request $request)
    {
		$id_Vent = $request->id_Vent;
        $cantidad =  $request->cantidad;
		$fecha = $request->fecha;
		$Factura =  $request->Factura;
		$Total =  $request->Total;
        $this->validate($request,[
	     'id_Vent'=>'required|numeric',
         'cantidad'=>'required|numeric',
		 'fecha'=>'required|date',
		 'Factura'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'Total'=>'required|numeric'
	     ]);
		 
            $Com = new ventas;
			$Com->id_Vent = $request->id_Vent;
			$Com->cantidad = $request->cantidad;
			$Com->fecha = $request->fecha;
            $Com->Factura =  $request->Factura;
		    $Com->Total =  $request->Total;
		    $Com->id_Cli = $request->id_Cli;
			$Com->id_Tra = $request->id_Tra;
			$Com->save();
			$proceso2 = "Alta ventas";
			$mensaje2 = "Registro guardado correctamente";
		    return view ('sistema.mensaje2')
			->with('proceso2',$proceso2)
			->with('mensaje2',$mensaje2);
		  
        
    }
}
