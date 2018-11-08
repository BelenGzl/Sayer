<html>
<body>

<h1> Reporte de productos </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>costo</td><td>unidad</td><<td>Clave Categorias</td><td>producto</td><td>archivo</td><td>clave</td><td>maximos</td><td>minimos</td><td>reorden</td><td>operaciones</td</tr>
	@foreach($productos as $producto)
	<tr>
	<td>{{$producto->id_Prod}}</td><td>{{$producto->costo}}</td>
	<td>{{$producto->unidad}}</td><td>{{$producto->id_Cat}}</td>
	<td>{{$producto->productos}}</td><td>{{$producto->archivo}}</td>
	<td>{{$producto->clave}}</td><td>{{$producto->maximos}}</td>
	<td>{{$producto->minimos}}</td><td>{{$producto->reorden}}</td>
	
	<td>
	<a href="{{URL::action('sayer2@borraproducto',['id_Prod'=>$producto->id_Prod])}}">
	Eliminar</a>
	<a href="{{URL::action('sayer2@modificaproducto',['id_Prod'=>$producto->id_Prod])}}">
	Modificar</a>
	</td></tr>
	@endforeach
</table>
</body>	 
<html>
	 