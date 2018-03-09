
@extends('layout')

@section('title',"Alta Nuevas Guías")

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
		<table width="1000" align="center" border="0" cellpadding="3" cellspacing="0" class="Fondo_Tabla" 
        	 style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
        	 border-top-right-radius: 10px">
			<thead>
				<tr>
					<th class="Titulo_Tabla" height="40" colspan="8" 
					style="border-top-right-radius: 10px; border-top-left-radius: 10px;">Alta de Nuevas Guías</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				    <td width="120" nowrap="nowrap" class="Etiqueta">Seleccione Cliente :</td>
				    <td width="100" colspan="4" align="center">
				    	<select name="clientes" id="clientes" tabindex="-1" autofocus="autofocus">
               		  	<option value="--">3BUMEN - IMPORTADORA Y COMERCIALIZADORA 3BUMEN DE MEXICO SA DE CV</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select>
			    	</td>
				    <td width="100" class="Etiqueta">Número de Guía :</td>
				    <td colspan="2" align="center">
				    	<input type="text" name="os" id="os" size="20" placeholder="Ingrese Guía">
				    </td>    
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">OS Cliente :</td>
					<td width="100" nowrap="nowrap" align="center">
						<input type="text" name="os_c" id="os_c" size="15" placeholder="OS Cliente"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Fecha de Alta :</td>
					<td width="100" nowrap="nowrap" align="center">
						<input type="text" name="fe_alta" id="fe_alta" size="15" placeholder="2018-03-01" readonly="readonly" tabindex="-1"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Hora de Alta :</td>
					<td width="100" nowrap="nowrap" align="center">
						<input type="text" name="hr_alta" id="hr_alta" size="10" value="18:45" readonly="readonly" tabindex="-1"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Empresa :</td>
					<td width="100" nowrap="nowrap" align="center" >
						<input type="text" name="empresa" id="empresa" size="7" placeholder="PAP" readonly="readonly" tabindex="-1"></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Mensajero :</td>
				    <td colspan="2">
				    	<select name="id_mens" id="id_mens" tabindex="-1">
               		  	<option value="--">Seleccione un Mensajero</option>
               		  	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Tipo Mensajero :</td>
				    <td colspan="1">
				    	<select name="tp_mens" id="tp_mens" tabindex="-1">
               		  	<option value="--">Seleccione</option>
               		  	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Coordinador :</td>
				    <td colspan="2">
				    	<select name="id_coord" id="id_coord" tabindex="-1">
               		  	<option value="--">Seleccione un Mensajero</option>
               		  	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta" bgcolor="#11fc77" >Estatus :</td>
					<td bgcolor="#11fc77"><select name="estatus" id="estatus" tabindex="-1">
               		  	<option value="EN TRANSITO">EN TRANSITO</option>
               		  	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    	   	</select></td>
			    	<td width="100" nowrap="nowrap" class="Etiqueta" bgcolor="#11fc77">Sub Estatus :</td>
			    	<td colspan="2" bgcolor="#11fc77"><select name="sub_est" id="sub_est" tabindex="-1">
               		  	<option value="EN TRANSITO">EN TRANSITO</option>
               		  	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    	   	</select></td>
			    	<td colspan="3" bgcolor="#11fc77"><select name="sub_est" id="sub_est" tabindex="-1">
               		  	<option value="ENVIO EN RUTA O EN PROCESO DE ENTREGA">ENVIO EN RUTA O EN PROCESO DE ENTREGA</option>
               		  	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    	   	</select></td>

				</tr>
				<tr>
					<td colspan="4" height="20" class="SubTitulos">Datos de Remitente</td>
					<td colspan="4" class="SubTitulos">Datos de Destinatario</td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Id Cliente :</td>
					<td><input type="text" name="id_int" id="id_int" value="3BUMEN" placeholder="Id Cliente"></td>
					<td colspan="2"></td>
					<td width="120" nowrap="nowrap" class="Etiqueta">Cliente Frecuente :</td>
					<td><input type="text" name="id_subcte" id="id_subcte" placeholder="Cliente Frecuente"></td>
					<td colspan="2" align="center"><input type="button" name="busca_destino" value="Buscar Destino" class="Boton_Flaco"></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Nombre :</td>
					<td colspan="3"><input type="text" name="rtm_nom" id="rtm_nom" placeholder="Nombre del Remitente" size="60" maxlength="100"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Nombre :</td>
					<td colspan="3"><input type="text" name="des_nom" id="des_nom" placeholder="Nombre del Destinatario" size="60" maxlength="100"></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Empresa :</td>
					<td colspan="3"><input type="text" name="rtm_emp" id="rtm_emp" placeholder="Empresa del Remitente" size="60" 
						readonly maxlength="100"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Empresa :</td>
					<td colspan="3"><input type="text" name="des_emp" id="des_emp" placeholder="Empresa del Destinatario" size="60" maxlength="100"></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Domicilio :</td>
					<td colspan="3"><input type="text" name="rtm_dom" id="rtm_dom" placeholder="Calle" size="60" 
						readonly maxlength="255"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Domicilio :</td>
					<td colspan="3"><input type="text" name="des_nom" id="des_nom" placeholder="Calle" size="60" maxlength="255"></td>
				</tr>
				<tr>
					<td width="130" nowrap="nowrap" class="Etiqueta">No Ext/Int :</td>
					<td align="center">
						<input type="text" name="no_ext" size="4" placeholder="000" readonly title="Numero Exterior"
						onkeypress="return SoloNumeros(event);" maxlength="6" /> | 
						<input type="text" name="no_int" size="4" placeholder="000" readonly title="Numero Interior"
						onkeypress="return SoloNumeros(event);" maxlength="6" /> </td>
					<td width="100" nowrap="nowrap" class="Etiqueta">C.P. :</td>
					<td align="center">
						<input type="text" name="cp" size="6" readonly placeholder="00000" 
						onkeypress="return SoloNumeros(event);" maxlength="5" /></td>
					<td width="130" nowrap="nowrap" class="Etiqueta">No Ext/Int :</td>
					<td align="center">
						<input type="text" name="no_ext" size="4" placeholder="000" title="Numero Exterior"
						onkeypress="return SoloNumeros(event);" maxlength="6" /> | 
						<input type="text" name="no_int" size="4" placeholder="000" title="Numero Interior"
						onkeypress="return SoloNumeros(event);" maxlength="6" /> </td>
					<td width="100" nowrap="nowrap" class="Etiqueta">C.P. :</td>
					<td align="center">
						<input type="text" name="cp" size="6" placeholder="00000" title="Presiona Enter Para Validar"
						onkeypress="return SoloNumeros(event);" maxlength="5" /></td>
				</tr>
				<tr>
				    <td width="100" nowrap="nowrap" class="Etiqueta">Colonia :</td>
				    <td colspan="3"><input type="text" name="rtm_col" id="rtm_col" placeholder="Colonia del Remitente" size="60"
				    	readonly maxlength="255"></td>
				    <td width="100" nowrap="nowrap" class="Etiqueta">Colonia :</td>
				    <td colspan="3">
				      	<select name="des_col" id="des_col" tabindex="-1">
               		  	<option value="--">Seleccione una Colonia</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
               		</td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Del/Mpio :</td>
					<td colspan="3"><input type="text" name="rtm_mun" id="rtm_mun" placeholder="Municipio" size="60" readonly ></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Del/Mpio :</td>
					<td colspan="3"><select name="des_mun" id="des_mun" tabindex="-1">
               		  	<option value="--">Seleccione</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
					</td>
					
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Estado :</td>
					<td><input type="text" name="rtm_edo" id="rtm_edo" placeholder="Estado" size="18" readonly ></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Ciudad :</td>
					<td><input type="text" name="rtm_ciu" id="rtm_ciu" size="18" readonly="readonly" tabindex="-1" placeholder="Ciudad" /></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Estado :</td>
					<td><select name="des_edo" id="des_edo" tabindex="-1">
               		  	<option value="--">Seleccione</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
			    	<td width="100" nowrap="nowrap" class="Etiqueta">Ciudad :</td>
					<td><select name="des_edo" id="des_edo" tabindex="-1">
               		  	<option value="--">Seleccione</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
			    	</td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Teléfono :</td>
					<td><input type="text" name="rtm_tel" id="rtm_tel" size="18" readonly="readonly" tabindex="-1" placeholder="5555555555" maxlength="15" onkeypress="return SoloNumeros(event);"/></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Celular :</td>
					<td><input type="text" name="rtm_cel" id="rtm_cel" size="18" readonly="readonly" tabindex="-1" placeholder="5555555555" maxlength="15" onkeypress="return SoloNumeros(event);" /></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Teléfono :</td>
					<td><input type="text" name="des_tel" id="des_tel" size="18" readonly="readonly" tabindex="-1" placeholder="5555555555" maxlength="15" onkeypress="return SoloNumeros(event);" /></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Celular :</td>
					<td><input type="text" name="des_cel" id="des_cel" size="18" readonly="readonly" tabindex="-1" placeholder="5555555555" maxlength="15" onkeypress="return SoloNumeros(event);" /></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Hora Recolección :</td>
					<td><input type="text" name="rtm_hora_r" id="rtm_hora_r" size="18" readonly="readonly" tabindex="-1" placeholder="18:45" maxlength="15" />
					<td width="100" nowrap="nowrap" class="Etiqueta"></td>
					<td></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Hora Entrega :</td>
					<td><input type="text" name="des_hora_e" id="des_hora_e" size="18" readonly="readonly" tabindex="-1" placeholder="18:45" maxlength="15" />
					<td width="100" nowrap="nowrap" class="Etiqueta"></td>
					<td></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Referencias :</td>
					<td colspan="3"><textarea name="rtm_ref" id="rtm_ref" cols="59" rows="2" maxlength="255" ></textarea></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Referencias :</td>
					<td colspan="3"><textarea name="des_ref" id="des_ref" cols="59" rows="2" maxlength="255" ></textarea></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Obs. Remitente :</td>
					<td colspan="3"><textarea name="rtm_obs" id="rtm_obs" cols="59" rows="2" maxlength="255" ></textarea></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Obs. Destinatario :</td>
					<td colspan="3"><textarea name="des_obs" id="des_obs" cols="59" rows="2" maxlength="255" ></textarea></td>
				</tr>

				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">eMail Remitente :</td>
					<td colspan="3"><input type="email" name="rtm_email" id="rtm_email" placeholder="usuario@ejemplo.com.mx"
						size="60" readonly="readonly" tabindex="-1"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">eMail Destinatario :</td>
					<td colspan="3"><input type="email" name="des_email" id="des_email" placeholder="usuario@ejemplo.com.mx" size="60"></td>
				</tr>				
				<tr>
					<td colspan="8" height="20" class="SubTitulos">Datos de la Guia</td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Piezas :</td>
					<td><input type="text" name="pzas" id="pzas" value="" placeholder="1" size="18"
						onkeypress="return SoloNumeros(event);" maxlength="4"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Peso :</td>
					<td><input type="text" name="peso" id="peso" value="" placeholder="1" size="18"
						onkeypress="return SoloNumeros(event);" maxlength="4"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Peso Amparado :</td>
					<td><input type="text" name="peso_amp" id="peso_amp" value="" placeholder="1" size="18"
						onkeypress="return SoloNumeros(event);" maxlength="4"></td>
				</tr>				
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Alto :</td>
					<td><input type="text" name="alto" id="alto" value="" placeholder="0" size="18"
						onkeypress="return SoloNumeros(event);" maxlength="4"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Ancho :</td>
					<td><input type="text" name="ancho" id="ancho" value="" placeholder="0" size="18"
						onkeypress="return SoloNumeros(event);" maxlength="4"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Largo :</td>
					<td><input type="text" name="largo" id="largo" value="" placeholder="0" size="18"
						onkeypress="return SoloNumeros(event);" maxlength="4"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Peso Vol. :</td>
					<td><input type="text" name="peso_vol" id="peso_vol" value="" placeholder="0" size="18"
						onkeypress="return SoloNumeros(event);" maxlength="4"></td>
				</tr>				
                <tr>
                    <td width="100" nowrap="nowrap" class="Etiqueta">Tipo de Servicio :</td>
                    <td><select name="tpo_serv" id="tpo_serv" tabindex="-1">
               		  	<option value="--">Seleccione</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
			    	<td width="100" nowrap="nowrap" class="Etiqueta">Tipo Transp. :</td>
                    <td><select name="tpo_trans" id="tpo_trans" tabindex="-1">
               		  	<option value="--">Seleccione</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
			    	<td colspan="4" class="SubTitulos">Datos de Costo / Pago</td>
			    </tr>
			    <tr>	
			    	<td width="100" nowrap="nowrap" class="Etiqueta">M. Externa :</td>
                    <td><select name="m_externa" id="m_externa" tabindex="-1">
               		  	<option value="--">Seleccione</option>
                    	<option value="AEROFLASH">AEROFLASH</option>
                    	<option value="CABIFY">CABIFY</option>
                    	<option value="DHL">DHL</option>
                    	<option value="FEDEX">FEDEX</option>
                    	<option value="UBER">UBER</option>
                    	<option value="UPS">UPS</option>
			    		</select></td>
                	<td width="100" nowrap="nowrap" class="Etiqueta">Guía Externa :</td>
                	<td><input type="text" name="g_externa" id="g_externa" placeholder="12345678912345" size="18"></td>
                	<td width="100" nowrap="nowrap" class="Etiqueta">Valor COD :</td>
			    	<td><input type="text" name="vcod" id="vcod" placeholder="0" size="18"
			    		onkeypress="return SoloNumeros(event);" maxlength="6"></td>
			    	<td width="100" nowrap="nowrap" class="Etiqueta">Costo :</td>
			    	<td><input type="text" name="costo" id="costo" placeholder="0" size="18"
			    		onkeypress="return SoloNumeros(event);" maxlength="6"></td>
                </tr>
                <tr>
                	<td width="100" nowrap="nowrap" class="Etiqueta">Origen :</td>
                	<td><select name="origen" id="origen" tabindex="-1">
               		  	<option value="--">Seleccione</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
                	<td width="100" nowrap="nowrap" class="Etiqueta">Destino :</td>
                	<td><select name="destino" id="destino" tabindex="-1">
               		  	<option value="--">Seleccione</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
                	<td width="100" nowrap="nowrap" class="Etiqueta">Costo Adicional :</td>
			    	<td><input type="text" name="c_adic" id="c_adic" placeholder="0" size="18"
			    		onkeypress="return SoloNumeros(event);" maxlength="6"></td>
			    	<td width="100" nowrap="nowrap" class="Etiqueta">Forma Pago :</td>
                    <td><select name="f_pago" id="f_pago" tabindex="-1">
               		  	<option value="--">Seleccione</option>
               		  	<option value="CHEQUE">CHEQUE</option>
               		  	<option value="EFECTIVO">EFECTIVO</option>
               		  	<option value="GUIA PREPAGADA">GUIA PREPAGADA</option>
               		  	<option value="TARJETA DE CREDITO">TARJETA DE CREDITO</option>
               		  	<option value="TARJETA DE DEBITO">TARJETA DE DEBITO</option>
               		  	<option value="TRANSFERENCIA">TRANSFERENCIA</option>
                    	</select></td>
				</tr>
				<tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Fue Recoleccion :</td>
					<td width="10" align="center"><input type="checkbox" name="recole" id="recole" value=""></td>
					<td width="90" nowrap="nowrap" class="Etiqueta">Fecha/Hora :
							<a href="javascript:NewCssCal ('fe_recole','yyyyMMdd')">
							<img src="img/cal.gif" width="16" height="16" alt=".."/></a></td>
					<td><input type="text" name="fe_recole" id="fe_recole" placeholder="2018-03-01" size="9" readonly="readonly" tabindex="-1">
						<input type="text" name="hr_recole" id="hr_recole" placeholder="18:45" size="4"></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Valor Declarado :</td>
			    	<td><input type="text" name="val_dec" id="val_dec" placeholder="0" size="18"
			    		onkeypress="return SoloNumeros(event);" maxlength="6"></td>
			    	<td width="100" nowrap="nowrap" class="Etiqueta">Seguro :</td>
			    	<td><input type="text" name="seguro" id="seguro" placeholder="0" size="18"
			    		onkeypress="return SoloNumeros(event);" maxlength="10"></td>
				</tr>
				<tr>
					<td rowspan="2" width="100" nowrap="nowrap" class="Etiqueta">Historial :</td>
					<td colspan="5" rowspan="2" ><textarea name="historial" id="historial" cols="90" rows="5"></textarea></td>
					<td width="100" nowrap="nowrap" class="Etiqueta">Formato Impresion :</td>
					<td><select name="for_impre" id="for_impre" tabindex="-1">
               		  	<option value="PAP" selected="Selected">PAP</option>
               		  	<option value="TERMICA">TERMICA</option>
                    	</select></td>
                </tr>
                <tr>
					<td width="100" nowrap="nowrap" class="Etiqueta">Fecha Ultima Visita :</td>
					<td><a href="javascript:NewCssCal ('1vis_fe','yyyyMMdd')">
						<img src="img/cal.gif" width="16" height="16" alt=".."/></a>
						<input type="text" name="1vis_fe" id="1vis_fe" placeholder="2018-03-01" size="14" readonly="readonly" tabindex="-1"></td>
				</tr>
				<tr>
					<td width="100" height="50" colspan="4" align="center">
						<input class="Boton" name="bt_Salvar" type="button" value="Insertar Registro" /></td>
					<td width="100" colspan="4" align="center">
						<input class="Boton" type ='button' value = 'Regresar' /></td>
				</tr>
			</tbody>
		</table>
	</form>
	@endsection
