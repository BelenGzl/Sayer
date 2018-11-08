<html>
<body>

<h1> Reporte de Municipios </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>municipio</td><td>Operaciones</td></tr>
	@foreach($municipios as $municipio)
	<tr>
	<td>{{$municipio->id_Mun}}</td><td>{{$municipio->municipios}}</td>
	<td>
	<a href="{{URL::action('sayer3@borramunicipio',['id_Mun'=>$municipio->id_Mun])}}">
	Eliminar</a>
	<a href="{{URL::action('sayer3@modificamunicipio',['id_Mun'=>$municipio->id_Mun])}}">
	Modificar</a>
	</td></tr>
	@endforeach
</table>
</body>	 
<html>
	 