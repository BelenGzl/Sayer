<html>
<body>

<h1> Reporte de Clientes </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>nombre</td><td>apellidop</td><td>apellidom</td><td>calle</td><td>numero</td><td>colonia</td><td>cp</td><td>tel</td><td>correo</td><td>Id de M</td><td>Operaciones</td></tr>
	@foreach($clientes as $cliente)
	<tr>
	<td>{{$cliente->id_Cli}}</td><td>{{$cliente->nombre}}</td>
	<td>{{$cliente->apellidop}}</td><td>{{$cliente->apellidom}}</td>
	<td>{{$cliente->calle}}</td><td>{{$cliente->numero}}</td>
	<td>{{$cliente->colonia}}</td><td>{{$cliente->cp}}</td>
	<td>{{$cliente->tel}}</td><td>{{$cliente->correo}}</td>
	<td>{{$cliente->id_Mun}}</td>
	<td>
	<a href="{{URL::action('sayer5@borracliente',['id_Cli'=>$cliente->id_Cli])}}">
	Eliminar</a>
	<a href="{{URL::action('sayer5@modificacliente',['id_Cli'=>$cliente->id_Cli])}}">
	Modificar</a>
	</td></tr>
	@endforeach
</table>
</body>	 
<html>
	 