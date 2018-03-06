@extends('layout')

@section('title',"Personal Registrado")

@section('content')	

<form action="listausuario_submit" method="get" accept-charset="utf-8">

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

<!--
	<table width="700" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#fdb79b"
				style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
		        border-top-right-radius: 10px">
			<tr>
				<td width="150" height="40" align="center">
					<input size="40" name="buscar" type="text" placeholder="Ingrese la Razón Social del Cliente" /></td>
				<td width="150" height="40" align="center">
					<input class="Boton_Mediano" name="bt_busca" type="button" value="Buscar" /></td>
				<td width="150" height="40" align="center">
					<input class="Boton_Mediano" type ='button' value = 'Regresar' onclick="window.open('/c','_self')" /></td>
			</tr>
		</table>
    -->    
        <hr style="Border: 10px" />
		
		<table width="1100" align="center" border="1" cellpadding="5" cellspacing="0" class="Fondo_Tabla"
        	 style="border-top-left-radius: 5px; border-top-right-radius: 5px">
			<thead>
				<tr>
					<th class="Titulo_Tabla" height="40" colspan="6" 
					style="border-top-right-radius: 5px; border-top-left-radius: 5px;">Personal Registrado</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="60" class="Titulos_Tablas">Usuario</td>
					<td width="60" class="Titulos_Tablas">Fecha Alta</td>
					<td width="300" class="Titulos_Tablas">Nombre</td>
					<td width="80" class="Titulos_Tablas">Plaza Sede</td>
                    <td width="70" class="Titulos_Tablas">Telefono</td>
                    <td width="70" class="Titulos_Tablas">Celular</td>
                </tr>
				@foreach ($personales as $personal)
				<tr>
					<td class="Datos_Tablas" align="center">{{ $personal->usuario }}</td>
					<td class="Datos_Tablas" align="center">{{ $personal->fe_ing }}</td>
					<td class="Datos_Tablas">{{ $personal->nom.' '.$personal->a_pat.' '.$personal->a_mat}}</td>
					<td class="Datos_Tablas" align="center">{{ $personal->sede }}</td>
					<td class="Datos_Tablas">{{ $personal->tel_casa }}</td>
					<td class="Datos_Tablas">{{ $personal->tel_cel }}</td>
                </tr>
				@endforeach
			</tbody>
		</table>	
	</form>
	@endsection
