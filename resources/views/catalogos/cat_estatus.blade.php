@extends('layout')

@section('title',"Catalogo de C.P.")

@section('content')	

	<form action="cat_estatus_submit" method="get" accept-charset="utf-8">
	
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

	<table width="800" align="center" cellpadding="5" border="1" cellspacing="0" class="Fondo_Tabla"
			style="border-top-right-radius: 10px; border-top-left-radius: 10px;">
		<thead>
			<tr>
				<th class="Titulo_Tabla" height="40" colspan="4" 
				style="border-top-right-radius: 5px; border-top-left-radius: 5px;">Catalogo de Estatus</th>
			</tr>
		</thead>        	 
		<tr>
		    <td width="50" class="Titulos_Tablas">ID</td>
			<td width="100" class="Titulos_Tablas">Estatus</td>
			<td width="150" class="Titulos_Tablas">Sub Etatus</td>
			<td width="500" class="Titulos_Tablas">Descripcion</td>
		</tr>
	@foreach ($Estatus as $est)
		<tr>
		    <td class="Datos_Tablas" align="center"><a href="#">{{ $est->id }}</td>
			<td class="Datos_Tablas">{{ $est->estatus }}</td>
			<td class="Datos_Tablas">{{ $est->sub_est }}</td>
			<td class="Datos_Tablas">{{ $est->descrip }}</td>
		</tr>
	@endforeach
	</table>
	</form>

@endsection