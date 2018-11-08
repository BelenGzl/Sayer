<html>
<body>
<h1>Alta Categoria</h1>
<br>

<form action =  "{{route('guardacategoria')}}" method = "POST" >

<table>
<th>Registrar Categoria</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_Cat')) 
<i> {{ $errors->first('id_Cat') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_Cat' value="{{($idcat)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('categoria')) 
<i> {{ $errors->first('categoria') }} </i> 
@endif	
categoria(s)</td><td><input type = 'text' name  ='categoria' value="{{old('categoria')}}">
</td></tr>
				  

<tr><td><input type = 'submit' value = 'Guardar'></td></tr>
</form>
</table>
</body>
</html>




