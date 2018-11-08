<html>
<body>
<h1>Alta Factura</h1>
<br>

<form action =  "{{route('guardafactura')}}" method = "POST" >

<table>
<th>Registrar factura</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_Fac')) 
<i> {{ $errors->first('id_Fac') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_Fac' value="{{($idfac)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('factura')) 
<i> {{ $errors->first('factura') }} </i> 
@endif	
factura(s)</td><td><input type = 'text' name  ='factura' value="{{old('factura')}}">
</td></tr>
<tr><td>
@if($errors->first('fecha')) 
<i> {{ $errors->first('fecha') }} </i> 
@endif	
fecha(s)</td><td><input type = 'text' name  ='fecha' value="{{old('fecha')}}">
</td></tr>
				  

<tr><td><input type = 'submit' value = 'Guardar'></td></tr>
</form>
</table>
</body>
</html>


