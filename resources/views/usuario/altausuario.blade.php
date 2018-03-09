@extends('layout')

@section('title',"Alta de Personal")

@section('content')	
	<form action="altausuario_submit" method="post" accept-charset="utf-8" onload="QuitarFoco();">
		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif

	   <table width="1350" align="center" border="0" cellpadding="5" cellspacing="0" class="Fondo_Tabla" 
			style="border-top-left-radius: 10px; border-top-right-radius: 10px">
			<thead>
				<tr>
					<th class="Titulo_Tabla" height="40" colspan="5" 
						style="border-top-left-radius: 10px;">Alta de Personal</th>
					<th width="150" class="Etiqueta">Identificador :</th>
		            <th width="150" align="center">
		            	<input type="text" name="Identificador" value="" size="15" readonly="yes"/>
		            </th>
		            <th width="150" class="Etiqueta">Ultimo Id Reg. :</th>
		            <th width="150" align="center">
		            	<input type="text" name="ultimo_id" readonly="yes" size="15"/>
		            </th>
				</tr>
			</thead>
			<tbody>
		        <tr>
		            <td width="150" class="Etiqueta">Nombre :</td>
		            <td colspan="2">
		            	<input type="text" name="nom" id="nom" size="35" autofocus="autofocus" placeholder="Ingresa el Nombre (s)" required="required"/>
		            </td>
		            <td width="150" class="Etiqueta">A. Paterno :</td>
		            <td colspan="2">
		            	<input type="text" name="a_pat" id="a_pat" size="35" placeholder="Ingresa el Apellido Paterno" required="required"/>
		            </td>
		            <td width="150" class="Etiqueta">A. Materno :</td>
		            <td colspan="2">
		            	<input type="text" name="a_mat" id="a_mat" size="35" placeholder="Ingresa el Apellido Materno" required="required"/>
		            </td>
		        </tr>
		        <tr>
		            <td width="150" nowrap="nowrap" class="Etiqueta">Fecha Nac. :</td>
		            <td width="150"><a href="javascript:NewCssCal ('fe_nac','yyyyMMdd')">
						<img src="img/cal.gif" width="16" height="16" alt=".."/></a>
		            	<input type="text" name="fe_nac" id="fe_nac" size="12" placeholder="aaaa-mm-dd"/></td>
		            <td width="150" class="Etiqueta">Curp :</td>
		            <td width="150" colspan="2"><input type="text" name="curp" size="30" placeholder="Ingrese CURP" /></td>
		            <td width="150" class="Etiqueta">RFC :</td>
		            <td width="150"><input type="text" name="rfc" size="15" placeholder="Ingrese RFC" /></td>
		            <td width="150" class="Etiqueta">NSS :</td>
		            <td width="150"><input type="text" name="nss" size="11" placeholder="Ingrese NSS" /></td>
		        </tr>
		        <tr>
		        	<td class="Etiqueta">T. Sangre :</td>
		            <td><select name="tpo_san" id="tpo_san">
		                    <option selected="--">--</option>
		                    <option value="O-">O-</option>
		                    <option value="O+">O+</option>
		                    <option value="A-">A-</option>
		                    <option value="A+">A+</option>
		                    <option value="B-">B-</option>
		                    <option value="B+">B+</option>
		                    <option value="AB-">AB-</option>
		                    <option value="AB+">AB+</option>
		                </select>
		            </td>
		            <td class="Etiqueta">Edo Civil :</td>
		            <td><select name="edo_civ" id="edo_civ">
		                    <option value="ND" selected="selected">ND</option>
		                    <option value="SOLTERO">SOLTERO</option>
		                    <option value="CASADO">CASADO</option>
		                    <option value="VIUDO">VIUDO</option>
		                    <option value="DIVORCIADO">DIVORCIADO</option>
		                    <option value="UNION LIBRE">UNION LIBRE</option>
		                </select>
		            </td>
		            <td class="Etiqueta"></td>
		            <td align="center"></td>
		            <td class="Etiqueta"></td>
		            <td class="Etiqueta">Empresa :</td>
		            <td align="center"><input type="text" name="empresa" id="empresa" value="PAP" size="10"  /></td>
		        </tr>
		        <tr>
		            <td class="Etiqueta">Domicilio :</td>
		            <td colspan="5">
		            	<input type="text" name="calle" id="calle" size="90" placeholder="Ingrese la Calle" />
		            </td>
		            <td nowrap="nowrap" class="Etiqueta">No Ext/Int :</td>
		            <td><input type="text" name="no_ext" id="no_ext" size="5" placeholder="555" /></td>
		            <td><input type="text" name="no_int" id="no_int" size="5" placeholder="555" /></td>
		        </tr>
		        <tr>
		        	<td class="Etiqueta">C.P. :</td>
		            <td><input type="text" name="cp" id="cp" size="6" placeholder="06600"  tabindex="0" onkeypress="validar(event)"/></td>
					<td class="Etiqueta">Colonia :</td>
                    <td colspan="3">
               		  	<select name="col" id="col" tabindex="-1">
               		  	<option value="--">--------------------</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>
               		<td class="Etiqueta">Del / Mpio :</td>
                    <td colspan="2">
               		  <select name="mun" id="mun" tabindex="-1">
               		  	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->                    	
                    	</select></td>
                </tr>
                <tr>
               		<td class="Etiqueta">Estado :</td>
                    <td>
                   	  <select name="edo" id="edo" tabindex="-1">
                   	  	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
                    	</select></td>
                	<td class="Etiqueta">Ciudad :</td>
                    <td colspan="2">
                   	 	<select name="ciu" id="ciu" tabindex="-1">
                   	 	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
                    	</select></td>
		            <td class="Etiqueta">Tel. Casa :</td>
		            <td><input type="text" name="tel_casa" id="tel_casa" size="20" placeholder="5555555555" /></td>
		            <td class="Etiqueta">Tel. Recados :</td>
		            <td><input type="text" name="tel_casa_r" id="tel_casa_r" size="20" placeholder="5555555555" /></td>
		        </tr>
		        <tr>
	                <td height="30" colspan="5" align="center" class="SubTitulos">Generacion de ID</td>
	                <td class="Etiqueta">Tel. Cel :</td>
		            <td><input type="text" name="tel_cel" id="tel_cel" size="20" placeholder="5555555555" /></td>
	                <td class="Etiqueta">Cel. Emp. :</td>
		            <td><input type="text" name="tel_cel_e" id="tel_cel_e" size="20" placeholder="5555555555" /></td>
		        </tr>        
		        <tr>
		            <td class="Etiqueta">Plaza Sede :</td>
		            <td><select name="sede" id="sede"></select></td>
		            <td class="Etiqueta">Contrase&ntilde;a :</td>
		            <td><input type="password" name="password" id="password" size="20" /></td>
		            <td><input name="Boton" type="button" value="Generar ID" class="Boton_Flaco" /></td>
   		            <td colspan="2" class="Etiqueta">E-Mail Personal :</td>
		            <td colspan="2">
		                <input type="email" name="email_p" id="email_p" size="32" placeholder="ejemplo@ejemplo.com.mx" /></td>
		        </tr>
		        <tr>
		            <td class="Etiqueta">Cargo :</td>
		            <td colspan="2">
		                <select class="Captura" name="cargo" id="cargo">
		                    <option value="-----" selected="selected">SELECCIONE</option>
		                    <option value="ADMINISTRACION">ADMINISTRACION</option>
		                    <option value="COORDINACION DE SERVICIOS">COORDINACION DE SERVICIOS</option>
		                    <option value="DIRECCION">DIRECCION</option>
		                    <option value="INVENTARIOS">INVENTARIOS</option>
		                    <option value="PERSONAL ADMINISTRATIVO">PERSONAL ADMINISTRATIVO</option>
		                    <option value="SUPERVISION DE SERVICIOS">SUPERVISION DE SERVICIOS</option>
		                    <option value="TECNICO">TECNICO</option>
		                    <option value="VENTAS">VENTAS</option>
		                </select>
		            </td>
		            <td class="Etiqueta">Acceso :</td>
		            <td>
		                <select name="t_acceso_1" id="t_acceso_1">
		                    <option selected="--">--</option>
		                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
		                    <option value="CONSULTA">CONSULTA</option>
							<option value="COORDINADOR">COORDINADOR</option>
		                    <option value="MENSAJERO">MENSAJERO</option>
		                    <option value="SUPERVISOR">SUPERVISOR</option>
		                </select>
		            </td>
		            <td colspan="2" class="Etiqueta">E-Mail Empresa :</td>
		            <td colspan="2">
		                <input type="email" name="email_e" id="email_e" size="32" placeholder="ejemplo@ejemplo.com.mx" /></td>
		        </tr>
		        <tr>
		        	<td height="30" colspan="6" align="center" class="SubTitulos">Documentos en Expedientes</td>
		        	<td height="30" colspan="3" align="center" class="SubTitulos">Carga de Archivos</td>
		        </tr>
		        <tr>
		        	<td colspan="1" class="Etiqueta">Sol. Empleo :</td>
		        	<td align="center"><input type="checkbox" name="doc_se" id="doc_se" value=""></td>
		        	<td colspan="1" class="Etiqueta">IFE :</td>
		        	<td align="center"><input type="checkbox" name="doc_ife" id="doc_ife" value=""></td>
		        	<td colspan="1" class="Etiqueta">CURP :</td>
		        	<td align="center"><input type="checkbox" name="doc_curp" id="doc_curp" value=""></td>
		        	<td colspan="3" rowspan="2" align="center">
		        		<input name="Boton" type="button" value="Carga Documentos Expedientes" class="Boton_Flaco_Largo" /></td>
		        </tr>
		        <tr>
		        	<td colspan="1" class="Etiqueta">C Antecedentes :</td>
		        	<td align="center"><input type="checkbox" name="doc_cap" id="doc_cap" value=""></td>
		        	<td colspan="1" class="Etiqueta">C. Domicilio :</td>
		        	<td align="center"><input type="checkbox" name="doc_cdom" id="doc_cdom" value=""></td>
		        	<td colspan="1" class="Etiqueta">Alta IMSS :</td>
		        	<td align="center"><input type="checkbox" name="doc_imss" id="doc_imss" value=""></td>
		        </tr>
		        <tr>
		        	<td colspan="1" class="Etiqueta">Acta Nacimiento :</td>
		        	<td align="center"><input type="checkbox" name="doc_an" id="doc_an" value=""></td>
		        	<td colspan="1" class="Etiqueta">C. Estudios :</td>
		        	<td align="center"><input type="checkbox" name="doc_cest" id="doc_cest" value=""></td>
		        	<td colspan="1" class="Etiqueta">C. Recomendacion :</td>
		        	<td align="center"><input type="checkbox" name="doc_reco" id="doc_reco" value=""></td>
					<td colspan="3" align="center"><input name="Boton" type="button" value="Carga Fotografia Empleado" class="Boton_Flaco_Largo" /></td>
		        
		        </tr>
		        <tr>
		        	<td colspan="1" class="Etiqueta">Lic. Conducir :</td>
		        	<td align="center"><input type="checkbox" name="doc_lic" id="doc_lic" value=""></td>
		        	<td colspan="1" class="Etiqueta">Cred. Empresa :</td>
		        	<td align="center"><input type="checkbox" name="doc_cred_e" id="doc_cred_e" value=""></td>
		        	<td colspan="1" class="Etiqueta">Fotografia :</td>
		        	<td align="center"><input type="checkbox" name="foto" id="foto" value=""></td>
		        	<td colspan="3" align="center"><input type="text" name="dir_foto" id="dir_foto" size="62" readonly="readonly" /></td>
		        </tr>
		        <tr>
		            <td class="Etiqueta">T Mensajero :</td>
		            <td><select name="t_mens" id="t_mens">
		                    <option selected="--">--</option>
		                    <option value="PROPIO">PROPIO</option>
		                    <option value="UBER">UBER</option>
		                </select>
		            </td>
		            <td class="Etiqueta">Fecha Ingreso :</td>
		            <td><a href="javascript:NewCssCal ('fe_ing','yyyyMMdd')">
						<img src="img/cal.gif" width="16" height="16" alt=".."/></a>
		            	<input type="text" name="fe_ing" id="fe_ing" size="12" placeholder="aaaa-mm-dd"/></td>
		            <td class="Etiqueta">Fecha Baja :</td>
		            <td><a href="javascript:NewCssCal ('fe_baj','yyyyMMdd')">
						<img src="img/cal.gif" width="16" height="16" alt=".."/></a>
		            	<input type="text" name="fe_baj" id="fe_baj" size="12" placeholder="aaaa-mm-dd"/></td>
		            <td class="Etiqueta">Estatus :</td>
		            <td colspan="2" align="center"><select name="t_mens" id="t_mens">
		                    <option value="1" selected="selected">ACTIVO</option>
		                    <option value="0">INACTIVO</option>
		                </select>
		            </td>
		        </tr>
				<tr>
				    <td class="Etiqueta">Observaciones :</td>
				    <td colspan="8"><textarea name="observa" cols="150" rows="4"></textarea></td>
				</tr>
		        
		        <tr>
		            <td colspan="4" align="center">
					<input class="Boton" name="submit" id="submit" type="button" value="Guardar Datos" /></td>
		            <td colspan="1">&nbsp;</td>
		            <td colspan="4" align="center">
					<input class="Boton" name="submit2" id="submit2" type ='button' value = "Regresar" /></td>
		        </tr>
	        </tbody>
	    </table>
	</form>
	@endsection
	
	@section('scripts')
	<script type="text/javascript">
    
	$(document).ready(function (){
		//QuitarFoco();
		//alert("documento listo");
		$('.Boton').click(function ()
		{
			alert('boton llamado');
		});
		
	});
	
	
	function QuitarFoco()
	{
		elemento = document.getElementById("submit");
		elemento.blur();
		alert('ok')
    }
	
	function validar(e) 
	{
		//con esta forma de codificacion se puede integrar a cualuier elemento que se quiera evaluar el enter, es universal cuidado!!
		tecla = (document.all) ? e.keyCode : e.which;
		if (tecla==13) 
		{
			alert ('Has pulsado enter; el valor del campo es: ' + document.getElementById("cp").value + ' -');
			
			$.get('cp1/'+event.target.value+"",function(response,state){
					console.log(response);
				});
		};
	}
		
	
	
	</script>

	
	@endsection