<html>
<body>

<h1> Reporte de Trabajadores </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>nombre</td><td>apellidop</td><td>apellidom</td><td>calle</td><td>numero</td><td>colonia</td><td>cp</td><td>tel</td><td>archivo</td><td>correo</td><td>Id de M</td><td>Operaciones</td></tr>
	@foreach($trabajadores as $trabajador)
	<tr>
	<td>{{$trabajador->id_Tra}}</td><td>{{$trabajador->nombre}}</td>
	<td>{{$trabajador->apellidop}}</td><td>{{$trabajador->apellidom}}</td>
	<td>{{$trabajador->calle}}</td><td>{{$trabajador->numero}}</td>
	<td>{{$trabajador->colonia}}</td><td>{{$trabajador->cp}}</td>
	<td>{{$trabajador->tel}}</td><td>{{$trabajador->archivo}}</td>
	<td>{{$trabajador->correo}}</td><td>{{$trabajador->id_Mun}}</td>
	<td>
	<a href="{{URL::action('sayer6@borratrabajador',['id_Cli'=>$trabajador->id_Cli])}}">
	Eliminar</a>
	<a href="{{URL::action('sayer6@modificatrabajador',['id_Cli'=>$trabajador->id_Cli])}}">
	Modificar</a>
	</td></tr>
	@endforeach
</table>
</body>	 
<html>