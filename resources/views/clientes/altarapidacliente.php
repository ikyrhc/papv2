<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<title>Alta Rapida de Cliente</title>
	<!-- Esta es la Referencia al Archivo de Estilos -->
	<link rel="stylesheet" href="css/estilos_general.css">
</head>




<body>
	<form action="altarapidacliente_submit" method="get" accept-charset="utf-8">
		<table width="500" align="center" border="0" cellpadding="5" cellspacing="0" class="Fondo_Tabla"
        	 style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
        	 border-top-right-radius: 10px">
			<thead>
				<tr>
					<th class="Titulo_Tabla" height="40" colspan="4" 
					style="border-top-right-radius: 10px; border-top-left-radius: 10px;">Alta Rapida de Cliente</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="150" nowrap="nowrap" class="Etiqueta">Id Interno :</td>
					<td width="150" nowrap="nowrap">
						<input type="text" name="id_int" size="20" placeholder="Identificador Unico" 
						 onkeyup="this.value=this.value.toUpperCase()" autofocus /></td>
					<td width="150" nowrap="nowrap" class="Etiqueta">Contraseña :</td>
					<td width="150" nowrap="nowrap">
						<input class="Contra" type="text" name="contrasena" size="20"/></td>
				</tr>
                    
				<tr>
					<td width="150" nowrap="nowrap" class="Etiqueta">R.F.C. :</td>
					<td width="450" nowrap="nowrap" colspan="3">
						<input type="text" name="rfc" size="72" onkeyup="this.value=this.value.toUpperCase()"
						placeholder="Ingrese el RFC del Cliente"/></td>
				</tr>
				<tr>	
					<td width="150" nowrap="nowrap" class="Etiqueta">Razón Social :</td>
					<td width="450" nowrap="nowrap" colspan="3">
						<input type="text" name="raz_soc" size="72" 
						onkeyup="this.value=this.value.toUpperCase()" placeholder="Razon Social del Cliente Completa"/></td>
				</tr>
				<tr>
					<td class="Etiqueta">Domicilio :</td>
					<td width="450" nowrap="nowrap" colspan="3">
						<input type="text" name="dom" size="72" onkeyup="this.value=this.value.toUpperCase()"
						placeholder="Dirección del Cliente"/></td>
				</tr>
				<tr>
					<td class="Etiqueta">No. Ext. / Int. :</td>
					<td width="150" nowrap="nowrap" align="center">
						<input type="text" name="no_ext" size="4" placeholder="000" title="Numero Exterior" /> | 
			    	  <input type="text" name="no_int" size="4" placeholder="000" title="Numero Interior" /> </td>
					<td width="150" nowrap="nowrap" class="Etiqueta">C.P. :</td>
					<td width="150" nowrap="nowrap" align="center">
                    	<!-- Aqui en este control hay que poner codigo para extraer los codigos postales y llenar las combo -->
			    	<input type="text" name="cp" size="6" placeholder="00000" title="Presiona Enter Para Validar"/></td>
			  	</tr>
              	<tr>
               		<td width="150" nowrap="nowrap" class="Etiqueta">Colonia :</td>
                    <td width="150" nowrap="nowrap">
               		  	<select name="col" id="col" tabindex="-1">
               		  	<option value="--">--------------------</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
               		<td width="150" nowrap="nowrap" class="Etiqueta">Del / Mpio :</td>
                    <td width="150" nowrap="nowrap" >
               		  <select name="mun" id="mun" tabindex="-1">
               		  	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->                    	
                    	</select></td>

               	</tr>
               	<tr>	
               		<td width="150" nowrap="nowrap" class="Etiqueta">Estado :</td>
                    <td width="150" nowrap="nowrap" >
                   	  <select name="edo" id="edo" tabindex="-1">
                   	  	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
                    	</select></td>
                	<td width="150" nowrap="nowrap" class="Etiqueta">Ciudad :</td>
                    <td width="150" nowrap="nowrap" >
                   	 	<select name="ciu" id="ciu" tabindex="-1">
                   	 	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
                    	</select></td>

			  	</tr>
              	<tr>
                	<td width="150" nowrap="nowrap" class="Etiqueta">Tel. Oficina :</td>
                    <td width="150" nowrap="nowrap" ><input type="text" name="tel_of" size="20" placeholder="5555555555"/></td>
                	<td width="150" nowrap="nowrap" class="Etiqueta">Tel. Of. 2 :</td>
                	<td width="150" nowrap="nowrap" ><input type="text" name="tel_of_2" size="20" placeholder="5555555555"/></td>
              	</tr>
                <tr>
                    <td width="150" nowrap="nowrap" class="Etiqueta">Contacto :</td>
                    <td width="450" nowrap="nowrap" colspan="3">
                    	<input type="text" name="p_conta" size="72" onkeyup="this.value=this.value.toUpperCase()" 
                    	placeholder="Nombre del Contacto"/></td>
                <tr>
                    <td width="150" class="Etiqueta">E-Mail Contacto :</td>
                    <td width="450" colspan="3">
                    	<input type="text" name="p_email" size="72" placeholder="usuario@ejemplo.com.mx"/>
                    </td>
                </tr>

				<tr>
					<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
					<td width="150" class="Etiqueta">Estatus :</td>
					<td width="150" align="center">
						<input type="text" name="estatus" id="estatus" size="20" value="ACTIVO" readonly="readonly" tabindex="-1"/>
					<td width="150" class="Etiqueta">Ubicación :</td>					
					<td width="150" align="center"><select class="Captura" name="ubica" id="ubica">
						<!-- Aqui hay que poner Codigo para llenar la combo con las IATAS -->
						<option value="CDMX" selected="Selected">CDMX</option>
						<option value="EM">EDO DE MEX</option>
						</select></td>
					
				</tr>
				<tr>
					<td width="150" class="Etiqueta">Nombre Vendedor :</td>
					<td width="450" colspan="3">
						<select class="Captura" name="cve_vend" id="cve_vend">
						<!-- Aqui Hay que poner Codigo para Cargar la Combo con los Datos de Los Vendedores -->
						<option value="--" selected="Selected">---------------------------------------</option>
						</select></td>
				</tr>
				<tr>
					<td width="150" class="Etiqueta">Observaciones :</td>
					<td width="450" colspan="3"><textarea name="observaciones" cols="72" rows="4"
														  onkeyup="this.value=this.value.toUpperCase()"></textarea></td>
				</tr>
				<tr>
					<td width="300" height="50" colspan="2" align="center">
						<input class="Boton" name="bt_Salvar" type="button" value="Insertar Registro" /></td>
					<td width="300" height="50" align="center" colspan="2">
						<input class="Boton" type ="button" onclick="{{ route('/menu') }}" value = 'Regresar' /></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>