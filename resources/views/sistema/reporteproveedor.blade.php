<html>
<body>

<h1> Reporte de Proveedores </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>nombre</td><td>calle</td><td>numero</td><td>colonia</td><td>cp</td><td>tel</td><td>correo</td><td>Id de M</td><td>Operaciones</td></tr>
	@foreach($proveedores as $proveedor)
	<tr>
	<td>{{$proveedor->id_Prov}}</td><td>{{$proveedor->nombre}}</td>
	<td>{{$proveedor->calle}}</td><td>{{$proveedor->numero}}</td>
	<td>{{$proveedor->colonia}}</td><td>{{$proveedor->cp}}</td>
	<td>{{$proveedor->tel}}</td><td>{{$proveedor->correo}}</td>
	<td>{{$proveedor->id_Mun}}</td>
	<td>
	<a href="{{URL::action('sayer4@borraproveedor',['id_Prov'=>$proveedor->id_Prov])}}">
	Eliminar</a>
	<a href="{{URL::action('sayer4@modificaproveedor',['id_Prov'=>$proveedor->id_Prov])}}">
	Modificar</a>
	</td></tr>
	@endforeach
</table>
</body>	 
<html>
	 