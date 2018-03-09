@extends('layout')

@section('title',"Catalogo de C.P.")

@section('content')	

<form action="cat_cp_submit" method="get" accept-charset="utf-8">
	<table align="center" border="0" cellspacing="0" cellpadding="5" class="Fondo_Tabla"
        	 style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
        	 border-top-right-radius: 10px">
		<thead>
			<tr>
				<th colspan="5" class="Titulo_Tabla" style="border-top-right-radius: 10px; border-top-left-radius: 10px;">Administra Catalogo de Codigos Postales</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="70"></td>
				<td width="150" class="Etiqueta">Codigo Postal :</td>
				<td width="100" align="center"><input type="text" name="cp" id="cp" placeholder="00000" size="5" maxlength="5"
					onkeypress="return SoloNumeros(event);"></td>
				<td width="250" align="center"><input type="button" name="conscp" id="conscp" value="Consulta" 
					class="Boton_Flaco"></td>
				<td width="100"></td>
			</tr>
		</tbody>
	</table>
</form>




@endsection