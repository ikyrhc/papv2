<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



	<title>Rastreo de Guías</title>
	<!-- Esta es la Referencia al Archivo de Estilos -->
	<link rel="stylesheet" href="css/estilos_general.css">

</head>
<body>
	<form action="rastreo_submit" method="get" accept-charset="utf-8">
	
	<table width="1000" align="center" cellpadding="7" border="0" cellspacing="0">
		<tr>
			<td colspan="2" class="EtiRastreo">Ingrese Guias</td>
		    <td align="center"><textarea name="guias" rows="3" cols="15" id="guias"></textarea></td>
		    <td align="center"><input class="Boton" type="submit" name="1" id="1" value="Rastrear" />
		    </td>
		    <td colspan="5" class="EtiRastreo">
		      	Nota: Para consultar varios números de guía, separe dando &quot;ENTER&quot;, entre cada Número de Guía
		    </td>
		</tr>
		<tr>
		      <th width="50" class="Titulos_Tablas">Guía</th>
		      <th width="50" class="Titulos_Tablas">Estatus</th>
		      <th width="100" class="Titulos_Tablas">Fecha de Documentación</th>
		      <th width="200" class="Titulos_Tablas">Origen</th>
		      <th width="200" class="Titulos_Tablas">Destino</th>
		      <th width="100" class="Titulos_Tablas">Fecha de Entrega</th>
		      <th width="100" class="Titulos_Tablas">Hora de Entrega</th>
		      <th width="50" class="Titulos_Tablas">Peso</th>
		      <th width="50" class="Titulos_Tablas">Archivos</th>
		</tr>
	</table>

	



	</form>
</body>
</html>