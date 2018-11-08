<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\facturas;

class sayer7 extends Controller
{
    public function altafactura()
    {
     	 
	 
	 $clavequesigue = facturas::orderBy('id_Fac','desc')
								->take(1)
								->get();
     $idfac = $clavequesigue[0]->id_Fac+1;
     
					return view ("sistema.altafactura")
	 ->with('idfac',$idfac);	  
	 
	 
	}
	public function guardafactura(Request $request)
    {
		$id_Fac = $request->id_Fac;
        $factura =  $request->factura;
		$fecha = $request->fecha;
        $this->validate($request,[
	     'id_Fac'=>'required|numeric',
         'factura'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'fecha'=>'required|date'
	     ]);
		 
            $fac = new facturas;
			$fac->id_Fac = $request->id_Fac;
			$fac->factura = $request->factura;
			$fac->fecha = $request->fecha;
			$fac->save();
			$proceso2 = "Alta facturas";
			$mensaje2 = "Registro guardado correctamente";
		    return view ('sistema.mensaje2')
			->with('proceso2',$proceso2)
			->with('mensaje2',$mensaje2);
		  
        
    }
	
	///Reporte//
	 public function reportefactura()
	{
	$facturas=facturas::orderBy('id_Fac','asc')
	          ->get();
	  return view('sistema.reportefactura')
	  ->with('facturas',$facturas);                  
	}
}
