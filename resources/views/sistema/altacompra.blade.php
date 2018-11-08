<html>
<body>
<h1>Alta Compra</h1>
<br>

<form action =  "{{route('guardacompra')}}" method = "POST" >

<table>
<th>Registrar Compra</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_Com')) 
<i> {{ $errors->first('id_Com') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_Com' value="{{($idcom)}}" readonly='readonly'>
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
Seleccione Proveedor </td><td><select name = 'id_Prov'>
            @foreach($proveedores as $cr)
			<option value = '{{$cr->id_Prov}}'>{{$cr->nombre}}</option>
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