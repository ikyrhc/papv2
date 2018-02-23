<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<title>Clientes Registrados</title>
	<!-- Esta es la Referencia al Archivo de Estilos -->
	<link rel="stylesheet" href="css/estilos_general.css">
	<!-- Este Archivo nos da las funcionalidades de el Calendario -->
	<script language="javascript" type="text/javascript" src="js/datetimepicker_css.js"></script>
</head>




<body>
	<form action="listaclientes_submit" method="get" accept-charset="utf-8">
		<table width="700" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#fdb79b"
				style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
		        border-top-right-radius: 10px">
			<tr>
				<td width="150" height="40" align="center">
					<input size="40" name="buscar" type="text" placeholder="Ingrese la Razón Social del Cliente" /></td>
				<td width="150" height="40" align="center">
					<input class="Boton_Mediano" name="bt_busca" type="button" value="Buscar" /></td>
				<td width="150" height="40" align="center">
					<input class="Boton_Mediano" type ='button' value = 'Regresar' /></td>
			</tr>
		</table>
        
        <hr style="Border: 10px" />
		
		<table width="1100" align="center" border="1" cellpadding="5" cellspacing="0" bgcolor="#fdb79b"
        	 style="border-top-left-radius: 10px; border-top-right-radius: 10px">
			<thead>
				<tr>
					<th class="Titulo_Tabla" height="40" colspan="6" 
					style="border-top-right-radius: 10px; border-top-left-radius: 10px;">Clientes Registrados</th>
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
				<tr>
					<td class="Datos_Tablas" align="center">MEXAAAAAA</td>
					<td class="Datos_Tablas" align="center">2018-02-19</td>
					<td class="Datos_Tablas">AAAA999999JX8</td>
					<td class="Datos_Tablas">MEXICANA DE SISTEMAS SA DE CV</td>
					<td class="Datos_Tablas">ALEJANDRO PINEDA HERNANDEZ</td>
					<td class="Datos_Tablas">015555555555</td>
                </tr>
			</tbody>
		</table>	
	</form>
</body>
</html>