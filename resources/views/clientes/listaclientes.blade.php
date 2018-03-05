@extends('layout')

@section('title',"Cilientes Registrados")

@section('content')	

<form action="listaclientes_submit" method="get" accept-charset="utf-8">

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif


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
        
        <hr style="Border: 10px" />
		
		<table width="1100" align="center" border="1" cellpadding="5" cellspacing="0" class="Fondo_Tabla"
        	 style="border-top-left-radius: 5px; border-top-right-radius: 5px">
			<thead>
				<tr>
					<th class="Titulo_Tabla" height="40" colspan="6" 
					style="border-top-right-radius: 5px; border-top-left-radius: 5px;">Clientes Registrados</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="50" class="Titulos_Tablas">Id Interno</td>
					<td width="60" class="Titulos_Tablas">Fecha Registro</td>
					<td width="50" class="Titulos_Tablas">R.F.C.</td>
					<td width="200" class="Titulos_Tablas">Razón Social</td>
                    <td width="200" class="Titulos_Tablas">Contacto</td>
                    <td width="70" class="Titulos_Tablas">Télefono</td>
                </tr>
				@foreach ($clientes as $cliente)
				<tr>
					<td class="Datos_Tablas" align="center">{{ $cliente->id_int}}</td>
					<td class="Datos_Tablas" align="center">{{ $cliente->fe_reg}}</td>
					<td class="Datos_Tablas">{{ $cliente->rfc}}</td>
					<td class="Datos_Tablas">{{ $cliente->raz_soc}}</td>
					<td class="Datos_Tablas">{{ $cliente->nom_com}}</td>
					<td class="Datos_Tablas">{{ $cliente->tel_of}}</td>
                </tr>
				@endforeach
			</tbody>
		</table>	
	</form>
	@endsection
