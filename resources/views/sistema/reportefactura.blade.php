<html>
<body>

<h1> Reporte de Facturas </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>factura</td><td>fecha</td><td>Operaciones</td></tr>
	@foreach($facturas as $factura)
	<tr>
	<td>{{$factura->id_Fac}}</td><td>{{$factura->factura}}</td>
	<td>{{$factura->fecha}}</td>
	<td>
	<a href="{{URL::action('sayer7@borrafactura',['id_Fac'=>$factura->id_Fac])}}">
	Eliminar</a>
	<a href="{{URL::action('sayer7@modificafactura',['id_Fac'=>$factura->id_Fac])}}">
	Modificar</a>
	</td></tr>
	@endforeach
</table>
</body>	 
<html>