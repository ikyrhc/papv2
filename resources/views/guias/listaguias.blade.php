@extends('layout')

@section('title',"Busqueda de Guías")

@section('content')

	@if(count($errors) > 0)
		<div class="errors">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif



<form action="altaguias_submit" method="get" accept-charset="utf-8">
	<table align="center" width="1200" border="1" cellpadding="5" cellspacing="0" class="Fondo_Tabla" 
		style="border-bottom-left-radius: 1px; border-bottom-right-radius: 1px; border-top-right-radius: 1px; 
			border-top-left-radius: 1px;">
		<thead>
			<tr>
				<th colspan="7" class="Titulo_Tabla" style="border-top-right-radius: 10px; border-top-left-radius: 10px;"
				>Guía(s) Encontradas</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="10" class="Titulos_Tablas">Min</td>
				<td width="50" class="Titulos_Tablas">Guía</td>
				<td width="50" class="Titulos_Tablas">Fecha Alta</td>
				<td width="50" class="Titulos_Tablas">Hr Alta</td>
				<td width="200" class="Titulos_Tablas">Cliente</td>
				<td width="200" class="Titulos_Tablas">Destinatario</td>
				<td width="50" class="Titulos_Tablas">Estatus</td>
			</tr>
			@foreach ($servicios as $servicio)
			<tr>
				<td class="Datos_Tablas"></td>
				<td class="Datos_Tablas"><a href="/consguia">{{ $servicio->os }}</td>
				<td class="Datos_Tablas">{{ $servicio->fe_alta }}</td>
				<td class="Datos_Tablas">{{ $servicio->hr_alta }}</td>
				<td class="Datos_Tablas">{{ $servicio->rmt_nom }}</td>
				<td class="Datos_Tablas">{{ $servicio->des_nom }}</td>
				<td class="Datos_Tablas">{{ $servicio->estatus }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</form>

@endsection