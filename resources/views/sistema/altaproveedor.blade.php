<html>
<body>
<h1>Alta Proveedor</h1>
<br>

<form action =  "{{route('guardaproveedor')}}" method = "POST" >

<table>
<th>Registrar Proveedor</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_Prov')) 
<i> {{ $errors->first('id_Prov') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_Prov' value="{{($idprov)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	
nombre(s)</td><td><input type = 'text' name  ='nombre' value="{{old('nombre')}}">
</td></tr>
<tr><td>
@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	
calle(s)</td><td><input type = 'text' name  ='calle' value="{{old('calle')}}">
</td></tr>
<tr><td>
@if($errors->first('numero')) 
<i> {{ $errors->first('numero') }} </i> 
@endif	
numero(s)</td><td><input type = 'text' name  ='numero' value="{{old('numero')}}">
</td></tr>
<tr><td>
@if($errors->first('colonia')) 
<i> {{ $errors->first('colonia') }} </i> 
@endif	
colonia(s)</td><td><input type = 'text' name  ='colonia' value="{{old('colonia')}}">
</td></tr>
<tr><td>
@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	
cp(s)</td><td><input type = 'text' name  ='cp' value="{{old('cp')}}">
</td></tr>
<tr><td>
@if($errors->first('tel')) 
<i> {{ $errors->first('tel') }} </i> 
@endif	
tel(s)</td><td><input type = 'text' name  ='tel' value="{{old('tel')}}">
</td></tr>
<tr><td>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif	
correo(s)</td><td><input type = 'text' name  ='correo' value="{{old('correo')}}">
</td></tr>
<tr><td>
Seleccione municipio</td><td><select name = 'id_Mun'>
            @foreach($municipios as $cr)
			<option value = '{{$cr->id_Mun}}'>{{$cr->municipios}}</option>
			@endforeach
                  </select></td></tr>
				  <tr><td>




<tr><td><input type = 'submit' value = 'Guardar'></td></tr>
</form>
</table>
</body>
</html>