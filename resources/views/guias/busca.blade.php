
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

<hr>
<form action="altaguias_submit" method="get" accept-charset="utf-8">
	<table width="400" border="0" cellspacing="0" cellpadding="5" align="center" class="Fondo_Tabla" 
        	 style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
        	 border-top-right-radius: 10px">
		<thead>
			<tr>
				<th class="Titulo_Tabla" colspan="2" style="border-top-left-radius: 10px; border-top-right-radius: 10px">Busqueda de Guía</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="200" class="Etiqueta">Por Guía PAP :</td>
				<td width="50" align="center"><input type="radio" name="Campo" checked="chequed" title="Marca Para Consultar por Guía de Punto a Punto" ></td>
			</tr>
			<tr>
				<td class="Etiqueta">Por Guía Externa :</td>
				<td align="center"><input type="radio" name="Campo" value="" title="Marca Para Consultar por Guía Externa" ></td>
			</tr>
			<tr>
				<td class="Etiqueta">Por Nombre del Destinatario :</td>
				<td align="center"><input type="radio" name="Campo" value="" title="Marca Para Consultar por Nombre del Destinatario" ></td>
			</tr>
			<tr>
				<td class="Etiqueta">Por Domicilio :</td>
				<td align="center"><input type="radio" name="Campo" value="" title="Marca Para Consultar por Domicilio" ></td>
			</tr>
			<tr>
				<td class="Etiqueta">Por ID del Cliente :</td>
				<td align="center"><input type="radio" name="Campo" value="" title="Marca Para Consultar por ID del Cliente PAP" ></td>
			</tr>
			<tr>
				<td colspan="2" class="EtiCentro">Ingrese Guía / Dato a Consultar</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="text" name="vBusca" size="50" ></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="button" name="bBuscar" value="Buscar Guía" 
					onclick="window.open('/listguia', '_self')" class="Boton"></td>
			</tr>
		</tbody>
	</table>
</form>
@endsection