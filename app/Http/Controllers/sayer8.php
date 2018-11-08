<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\compras;
use App\proveedores;
use App\trabajadores;

class sayer8 extends Controller
{
    public function altacompra()
    {
     	 
	 
	 $clavequesigue = compras::orderBy('id_Com','desc')
								->take(1)
								->get();
     $idcom = $clavequesigue[0]->id_Com+1;
     
	 $proveedores = proveedores::orderBy('proveedores','asc')
						  ->get();
	 $trabajadores = trabajadores::orderBy('trabajadores','asc')
						  ->get();
					return view ("sistema.altacompra")
	
	 ->with('proveedores',$proveedores)
	 ->with('trabajadores',$trabajadores)
     ->with('idcom',$idcom);	 
	  
	}
	
	public function guardacompra(Request $request)
    {
		$id_Com = $request->id_Com;
        $cantidad =  $request->cantidad;
		$fecha = $request->fecha;
		$Factura =  $request->Factura;
		$Total =  $request->Total;
        $this->validate($request,[
	     'id_Com'=>'required|numeric',
         'cantidad'=>'required|numeric',
		 'fecha'=>'required|date',
		 'Factura'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'Total'=>'required|numeric'
	     ]);
		 
            $Com = new compras;
			$Com->id_Com = $request->id_Com;
			$Com->cantidad = $request->cantidad;
			$Com->fecha = $request->fecha;
            $Com->Factura =  $request->Factura;
		    $Com->Total =  $request->Total;
		    $Com->id_Prov = $request->id_Prov;
			$Com->id_Tra = $request->id_Tra;
			$Com->save();
			$proceso2 = "Alta compras";
			$mensaje2 = "Registro guardado correctamente";
		    return view ('sistema.mensaje2')
			->with('proceso2',$proceso2)
			->with('mensaje2',$mensaje2);
		  
        
    }
}
