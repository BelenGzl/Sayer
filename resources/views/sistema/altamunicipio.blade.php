<html>
<body>
<h1>Alta Municipio</h1>
<br>

<form action =  "{{route('guardamunicipio')}}" method = "POST" >

<table>
<th>Registrar Municipio</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_Mun')) 
<i> {{ $errors->first('id_Mun') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_Mun' value="{{($idmun)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('municipios')) 
<i> {{ $errors->first('municipios') }} </i> 
@endif	
municipio(s)</td><td><input type = 'text' name  ='municipios' value="{{old('municipios')}}">
</td></tr>

<tr><td><input type = 'submit' value = 'Guardar'></td></tr>
</form>
</table>
</body>
</html>