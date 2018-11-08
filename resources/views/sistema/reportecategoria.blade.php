<html>
<body>

<h1> Reporte de Categorias </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Categoria</td><td>Operaciones</td></tr>
	@foreach($categorias as $categoria)
	<tr>
	<td>{{$categoria->id_Cat}}</td><td>{{$categoria->categoria}}</td>
	<td>
	<a href="{{URL::action('sayer1@borracategoria',['id_Cat'=>$categoria->id_Cat])}}">
	Eliminar</a>
	<a href="{{URL::action('sayer1@modificacategoria',['id_Cat'=>$categoria->id_Cat])}}">
	Modificar</a>
	</td></tr>
	@endforeach
</table>
</body>	 
<html>
	 