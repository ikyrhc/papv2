<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



	<title>Consulta de Guías</title>
	<!-- Esta es la Referencia al Archivo de Estilos -->
	<link rel="stylesheet" href="css/estilos_general.css">

</head>




<body>
	<form action="consultaguias_submit" method="get" accept-charset="utf-8">
		<table width="1100" align="center" border="0" cellpadding="3" cellspacing="0" class="Fondo_Tabla" 
        	 style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
        	 border-top-right-radius: 10px">
			<thead>
				<tr>
					<th class="Titulo_Tabla" height="40" colspan="8" 
					style="border-top-right-radius: 10px; border-top-left-radius: 10px;">Consulta de Guías</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				    <td width="120" class="Etiqueta">Número de Guía :</td>
				    <td width="150" align="center" class="Datos_Pantalla">123456789</td>    
				    <td width="120" nowrap="nowrap" class="Etiqueta">OS Cliente :</td>
				    <td width="150" align="center" class="Datos_Pantalla"></td>
				    <td width="120" nowrap="nowrap" class="Etiqueta">Fecha de Alta :</td>
				    <td width="150" align="center" class="Datos_Pantalla"></td>
				    <td width="120" nowrap="nowrap" class="Etiqueta">Hora de Alta :</td>
				    <td width="150" align="center" class="Datos_Pantalla"></td>
				</tr>
				<tr>
				    <td class="Etiqueta">Estatus :</td>
				    <td align="center" class="Datos_Pantalla">EN TRANSITO</td>    
				    <td class="Etiqueta">Sub Estatus :</td>
				    <td align="center" class="Datos_Pantalla">EN TRANSITO</td>    
				    <td class="Etiqueta">Descripcíon :</td>
				    <td colspan="3" align="center" class="Datos_Pantalla">ENVIO EN RUTA O PROCESO DE ENTREGA</td>    

				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Mensajero :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">T. Mensajero :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Empresa :</td>
					<td align="center" class="Datos_Pantalla">PAP</td>
				</tr>
				<tr>	
					<td nowrap="nowrap" class="Etiqueta">Coordinador :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td colspan="4" align="center"><input type="button" name="busca_destino" value="Consulta Historico"
						onclick="window.open('/hist','_blank')" class="Boton_Flaco_Largo"></td>

				</tr>
				<tr>
					<td colspan="4" height="20" class="SubTitulos">Datos de Remitente</td>
					<td colspan="4" class="SubTitulos">Datos de Destinatario</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Id Cliente :</td>
					<td align="center" class="Datos_Pantalla">3BUMEN</td>
					<td colspan="2"></td>
					<td nowrap="nowrap" class="Etiqueta">Cliente Frecuente :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Nombre :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Nombre :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Empresa :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Empresa :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Domicilio :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Domicilio :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">No Ext/Int :</td>
					<td align="center" class="Datos_Pantalla">000 | 000</td>
					<td nowrap="nowrap" class="Etiqueta">C.P. :</td>
					<td align="center" class="Datos_Pantalla">00000</td>
					<td nowrap="nowrap" class="Etiqueta">No Ext/Int :</td>
					<td align="center" class="Datos_Pantalla">000 | 000</td>
					<td nowrap="nowrap" class="Etiqueta">C.P. :</td>
					<td align="center" class="Datos_Pantalla">00000</td>
				</tr>
				<tr>
				    <td nowrap="nowrap" class="Etiqueta">Colonia :</td>
				    <td colspan="3" align="center" class="Datos_Pantalla">A</td>
				    <td nowrap="nowrap" class="Etiqueta">Colonia :</td>
				    <td colspan="3" align="center" class="Datos_Pantalla">A</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Del/Mpio :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Del/Mpio :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Estado :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Ciudad :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Estado :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Ciudad :</td>
					<td align="center" class="Datos_Pantalla">A</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Teléfono :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Celular :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Teléfono :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Celular :</td>
					<td align="center" class="Datos_Pantalla">A</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Hora Recolección :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta"></td>
					<td></td>
					<td nowrap="nowrap" class="Etiqueta">Hora Entrega :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta"></td>
					<td></td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Referencias :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Referencias :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Obs. Remitente :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Obs. Destinatario :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
				</tr>

				<tr>
					<td nowrap="nowrap" class="Etiqueta">eMail Remitente :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">eMail Destinatario :</td>
					<td colspan="3" align="center" class="Datos_Pantalla">A</td>
				</tr>				
				<tr>
					<td colspan="8" height="20" class="SubTitulos">Datos de la Guia</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Piezas :</td>
					<td align="center" class="Datos_Pantalla">1</td>
					<td nowrap="nowrap" class="Etiqueta">Peso :</td>
					<td align="center" class="Datos_Pantalla">1</td>
					<td nowrap="nowrap" class="Etiqueta">Peso Amparado :</td>
					<td align="center" class="Datos_Pantalla">1</td>
				</tr>				
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Alto :</td>
					<td align="center" class="Datos_Pantalla">1</td>
					<td nowrap="nowrap" class="Etiqueta">Ancho :</td>
					<td align="center" class="Datos_Pantalla">1</td>
					<td nowrap="nowrap" class="Etiqueta">Largo :</td>
					<td align="center" class="Datos_Pantalla">1</td>
					<td nowrap="nowrap" class="Etiqueta">Peso Vol. :</td>
					<td align="center" class="Datos_Pantalla">1</td>
				</tr>				
                <tr>
                    <td nowrap="nowrap" class="Etiqueta">Tipo de Servicio :</td>
					<td align="center" class="Datos_Pantalla">A</td>
			    	<td nowrap="nowrap" class="Etiqueta">Tipo Transp. :</td>
                    <td align="center" class="Datos_Pantalla">A</td>
			    	<td colspan="4" class="SubTitulos">Datos de Costo / Pago</td>
			    </tr>
			    <tr>	
			    	<td nowrap="nowrap" class="Etiqueta">M. Externa :</td>
                    <td align="center" class="Datos_Pantalla">A</td>
                	<td nowrap="nowrap" class="Etiqueta">Guía Externa :</td>
                	<td align="center" class="Datos_Pantalla">A</td>
                	<td nowrap="nowrap" class="Etiqueta">Valor COD :</td>
			    	<td align="center" class="Datos_Pantalla">0</td>
			    	<td nowrap="nowrap" class="Etiqueta">Costo :</td>
			    	<td align="center" class="Datos_Pantalla">0</td>
                </tr>
                <tr>
                	<td nowrap="nowrap" class="Etiqueta">Origen :</td>
                	<td align="center" class="Datos_Pantalla">CDMX</td>
                	<td nowrap="nowrap" class="Etiqueta">Destino :</td>
					<td align="center" class="Datos_Pantalla">A</td>
					<td nowrap="nowrap" class="Etiqueta">Costo Adicional :</td>
			    	<td align="center" class="Datos_Pantalla">0</td>
			    	<td nowrap="nowrap" class="Etiqueta">Forma Pago :</td>
                    <td align="center" class="Datos_Pantalla">GUIA PREPAGADA</td>
				</tr>
				<tr>
					<td nowrap="nowrap" class="Etiqueta">Fue Recoleccion :</td>
					<td align="center" class="Datos_Pantalla">SI</td>
					<td width="90" nowrap="nowrap" class="Etiqueta">Fecha/Hora :
					<td align="center" class="Datos_Pantalla">2018-03-01 | 18:45</td>
					<td nowrap="nowrap" class="Etiqueta">Valor Declarado :</td>
			    	<td align="center" class="Datos_Pantalla">0</td>
			    	<td nowrap="nowrap" class="Etiqueta">Seguro :</td>
			    	<td align="center" class="Datos_Pantalla">0</td>
				</tr>
				<tr>
					<td rowspan="2" nowrap="nowrap" class="Etiqueta">Historial :</td>
					<td colspan="5" rowspan="2" class="Datos_Pantalla"></td>
					<td nowrap="nowrap" class="Etiqueta">Formato Impresion :</td>
					<td align="center" class="Datos_Pantalla">PAP</td>
                </tr>
                <tr>
					<td nowrap="nowrap" class="Etiqueta">Fecha Ultima Visita :</td>
					<td align="center" class="Datos_Pantalla">2018-03-01</td>
				</tr>
				<tr>
					<td height="50" colspan="4" align="center">
						<input class="Boton" name="bt_Salvar" type="button" value="Insertar Registro" /></td>
					<td colspan="4" align="center">
						<input class="Boton" type ='button' value = 'Regresar' /></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>