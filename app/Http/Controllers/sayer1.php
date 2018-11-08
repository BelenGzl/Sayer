<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\categorias;
class sayer1 extends Controller
{
	//Alta//
    public function altacategoria()
    {
     	 
	 
	 $clavequesigue = categorias::orderBy('id_Cat','desc')
								->take(1)
								->get();
     $idcat = $clavequesigue[0]->id_Cat+1;
     
	
					return view ("sistema.altacategoria")
	 ->with('idcat',$idcat);	  
	 
	 
	}
	//Guardar//
	public function guardacategoria(Request $request)
    {
		$id_Cat = $request->id_Cat;
        $categoria =  $request->categoria;
        $this->validate($request,[
	     'id_Cat'=>'required|numeric',
         'categoria'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
	     ]);
		 
            $cat = new categorias;
			$cat->id_Cat = $request->id_Cat;
			$cat->categoria = $request->categoria;
			$cat->save();
			$proceso2 = "Alta categorias";
			$mensaje2 = "Registro guardado correctamente";
		    return view ('sistema.mensaje2')
			->with('proceso2',$proceso2)
			->with('mensaje2',$mensaje2);
		  
    }
	///Reporte//
	 public function reportecategoria()
	{
	$categorias=categorias::orderBy('id_Cat','asc')
	          ->get();
	  return view('sistema.reportecategoria')
	  ->with('categorias',$categorias);                  
	}
}
