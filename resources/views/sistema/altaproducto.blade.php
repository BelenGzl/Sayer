<html>
<body>
<h1>Alta Producto</h1>
<br>

<form action =  "{{route('guardaproducto')}}" method = "POST"  enctype="multipart/form-data">

<table>
<th>Registrar Producto</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_Prod')) 
<i> {{ $errors->first('id_Prod') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_Prod' value="{{($idprod)}}" readonly='readonly'>
</td></tr>


<tr><td>
@if($errors->first('costo')) 
<i> {{ $errors->first('costo') }} </i> 
@endif	
costo (s)</td><td><input type = 'text' name  ='costo' value="{{old('costo')}}">
</td></tr>
<tr><td>
@if($errors->first('unidad')) 
<i> {{ $errors->first('unidad') }} </i> 
@endif	
unidad(s)</td><td><input type = 'text' name  ='unidad' value="{{old('unidad')}}">
</td></tr>
<tr><td>
Seleccione categoria </td><td><select name = 'id_Cat'>
            @foreach($categorias as $cr)
			<option value = '{{$cr->id_Cat}}'>{{$cr->categorias}}</option>
			@endforeach
                  </select></td></tr>
				  
<tr><td>
@if($errors->first('produtos')) 
<i> {{ $errors->first('productos') }} </i> 
@endif	
producto(s)</td><td><input type = 'text' name  ='productos' value="{{old('productos')}}">
</td></tr>
<tr><td>
		@if($errors->first('archivo')) 
		<i> {{ $errors->first('archivo') }} </i> 
		@endif	
		Seleccione Foto: <input type="file" name="archivo">
		</td></tr>
<tr><td>
@if($errors->first('clave')) 
<i> {{ $errors->first('clave') }} </i> 
@endif	
clave(s)</td><td><input type = 'text' name  ='clave' value="{{old('clave')}}">
</td></tr>
<tr><td>
@if($errors->first('maximos')) 
<i> {{ $errors->first('maximos') }} </i> 
@endif	
maximo (s)</td><td><input type = 'text' name  ='maximos' value="{{old('maximos')}}">
</td></tr>
<tr><td>
@if($errors->first('minimos')) 
<i> {{ $errors->first('minimos') }} </i> 
@endif	
minimo(s)</td><td><input type = 'text' name  ='minimos' value="{{old('minimos')}}">
<tr><td>
@if($errors->first('reorden')) 
<i> {{ $errors->first('reorden') }} </i> 
@endif	
reorden(s)</td><td><input type = 'text' name  ='reorden' value="{{old('reorden')}}">
</td></tr>
</td></tr>
<tr><td><input type = 'submit' value = 'Guardar'></td></tr>
</form>
</table>
</body>
</html>
