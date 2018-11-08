<html>
<body>
<h1>Alta Venta</h1>
<br>

<form action =  "{{route('guardaventa')}}" method = "POST" >

<table>
<th>Registrar Venta</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id-Vent')) 
<i> {{ $errors->first('id-Vent') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id-Vent' value="{{($idven)}}" readonly='readonly'>
</td></tr>
<tr><td>
@if($errors->first('cantidad')) 
<i> {{ $errors->first('cantidad') }} </i> 
@endif	
cantidad(s)</td><td><input type = 'text' name  ='cantidad' value="{{old('cantidad')}}">
</td></tr>
<tr><td>
@if($errors->first('fecha')) 
<i> {{ $errors->first('fecha') }} </i> 
@endif	
fecha(s)</td><td><input type = 'text' name  ='fecha' value="{{old('fecha')}}">
</td></tr>
<tr><td>
@if($errors->first('Factura')) 
<i> {{ $errors->first('Factura') }} </i> 
@endif	
Factura(s)</td><td><input type = 'text' name  ='Factura' value="{{old('Factura')}}">
</td></tr>
<tr><td>
@if($errors->first('Total')) 
<i> {{ $errors->first('Total') }} </i> 
@endif	
Total(s)</td><td><input type = 'text' name  ='Total' value="{{old('Total')}}">
</td></tr>
<tr><td>
Seleccione Cliente </td><td><select name = 'id_Cli'>
            @foreach($clientes as $cr)
			<option value = '{{$cr->id_Cli}}'>{{$cr->nombre}}</option>
			@endforeach
                  </select></td></tr>
Seleccione Trabajador </td><td><select name = 'id_Tra'>
            @foreach($trabajadores as $tr)
			<option value = '{{$tr->id_Tra}}'>{{$tr->nombre}}</option>
			@endforeach
                  </select></td></tr>

<tr><td><input type = 'submit' value = 'Guardar'></td></tr>
</form>
</table>
</body>
</html>