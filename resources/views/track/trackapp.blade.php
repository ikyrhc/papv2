@extends('layout')

@section('title',"Auditoria")

@section('content')
	<form action="trackapp_submit" method="get" accept-charset="utf-8">
	
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

	<table width="1000" cellpadding="7" border="0" cellspacing="0" bgcolor="#fdb79b"
				style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
		        border-top-right-radius: 10px">
		<tr>
			<td colspan="2" class="Etiqueta">Guía a Consultar</td>
		    <td align="center"><input type="text" name="os" id="os" placeholder="0000000" size="15"></td>
		    <td align="center"><input class="Boton" type="buton" name="1" id="1" value="Consulta" /></td>
		    <td align="center"><input class="Boton" type="buton" name="1" id="1" value="Regresar"
		    	onclick="window.open('/c','_self')"/></td>
		</tr>
	</table>
	<br>
	<table width="1000" align="center" cellpadding="7" border="1" cellspacing="0" class="Fondo_Tabla"
			style="border-top-right-radius: 10px; border-top-left-radius: 10px;">
		<thead>
			<tr>
				<th class="Titulo_Tabla" height="40" colspan="8" 
				style="border-top-right-radius: 5px; border-top-left-radius: 5px;">Registros en Auditoria</th>
			</tr>
		</thead>        	 
		<tr>
			<td width="10" class="Titulos_Tablas">ID</td>
			<td width="60" class="Titulos_Tablas">Fecha</td>
			<td width="50" class="Titulos_Tablas">Hora</td>
			<td width="100" class="Titulos_Tablas">Guía</td>
			<td width="100" class="Titulos_Tablas">Usuario</td>
			<td width="100" class="Titulos_Tablas">Tipo</td>
			<td width="300" class="Titulos_Tablas">Consulta</td>
			<td width="100" class="Titulos_Tablas">Ip Acceso</td>
		</tr>
	@foreach ($tracks as $track)
		<tr>
			<td class="Datos_Tablas" align="center">{{ $track->id }}</td>
			<td class="Datos_Tablas" align="center">{{ $track->fecha }}</td>
			<td class="Datos_Tablas" align="center">{{ $track->hora }}</td>
			<td class="Datos_Tablas">{{ $track->os }}</td>
			<td class="Datos_Tablas">{{ $track->usuario }}</td>
			<td class="Datos_Tablas">{{ $track->tipo }}</td>
			<td class="Datos_Tablas">{{ $track->consulta }}</td>
			<td class="Datos_Tablas">{{ $track->ip_acc }}</td>
		</tr>
	@endforeach
	</table>
	</form>
@endsection
