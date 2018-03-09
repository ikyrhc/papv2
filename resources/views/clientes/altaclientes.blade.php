@extends('layout')

@section('title',"Alta Clientes")

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


	<form action="alta_cl/crear" method="post" accept-charset="utf-8">
		<table width="900" align="center" border="0" cellpadding="5" cellspacing="0" class="Fondo_Tabla"
        	 style="border-bottom-left-radius:10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px;
        	 border-top-right-radius: 10px">
			<thead>
				<tr>
					<th class="Titulo_Tabla" height="40" colspan="6" 
					style="border-top-right-radius: 10px; border-top-left-radius: 10px;">Alta de Clientes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="150" nowrap="nowrap" class="Etiqueta">Id Interno :</td>
					<td width="150" nowrap="nowrap">
						<input type="text" name="id_int" size="15" placeholder="Identificador Unico" 
						 onkeyup="this.value=this.value.toUpperCase()" autofocus maxlength="20" required /></td>
					<td width="150" nowrap="nowrap" class="Etiqueta">Contraseña :</td>
					<td width="150" nowrap="nowrap">
						<input type="password" name="contra" id="contra" size="20" maxlength="15" required /></td>
					<td width="150" nowrap="nowrap" class="Etiqueta">Empresa :</td>
					<td width="150" nowrap="nowrap">
						<input type="text" name="empresa" size="10" value="PAP" placeholder="Empresa" tabindex="-1" 
						readonly="readonly" /></td>
				</tr>
                    
				<tr>
					<td class="Etiqueta">R.F.C. :</td>
					<td colspan="5">
						<input type="text" name="rfc" size="45" onkeyup="this.value=this.value.toUpperCase()"
						placeholder="Ingrese el RFC del Cliente" required /></td>
				</tr>
				<tr>
					<td class="Etiqueta">Razón Social :</td>
					<td colspan="5">
						<input type="text" name="raz_soc" size="100" required 
						onkeyup="this.value=this.value.toUpperCase()" placeholder="Razon Social del Cliente Completa"/></td>
				</tr>
				<tr>
					<td class="Etiqueta">Nom. Comercial :</td>
					<td colspan="5">
						<input type="text" name="nom_com" size="100" required 
						onkeyup="this.value=this.value.toUpperCase()" placeholder="Nombre Comercial"/></td>
				</tr>
				<tr>
					<td class="Etiqueta">Domicilio :</td>
					<td colspan="5">
						<input type="text" name="dom" size="100" onkeyup="this.value=this.value.toUpperCase()"
						placeholder="Calle" required /></td>
				</tr>
				<tr>
					<td class="Etiqueta">No. Ext. / Int. :</td>
					<td align="center">
						<input type="text" name="no_ext" size="4" placeholder="000" title="Numero Exterior"
						onkeypress="return SoloNumeros(event);" maxlength="4" required /> | 
			    	  <input type="text" name="no_int" size="4" placeholder="000" title="Numero Interior" 
			    	  onkeypress="return SoloNumeros(event);" maxlength="4"/> </td>
					<td class="Etiqueta">C.P. :</td>
					<td align="center">
                    	<!-- Aqui en este control hay que poner codigo para extraer los codigos postales y llenar las combo -->
			    	<input type="text" name="cp" size="6" placeholder="00000" title="Presiona Enter Para Validar"
			    	onkeypress="return SoloNumeros(event);" maxlength="5" required/></td>
               		<td class="Etiqueta">Colonia :</td>
                    <td align="center">
               		  	<select name="col" id="col" tabindex="-1">
               		  	<option value="--">--------------------</option>
                    	<!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
			    		</select></td>

			  	</tr>
              	<tr>
               		<td class="Etiqueta">Del / Mpio :</td>
                    <td align="center">
               		  <select name="mun" id="mun" tabindex="-1">
               		  	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->                    	
                    	</select></td>
               		<td class="Etiqueta">Estado :</td>
                    <td align="center">
                   	  <select name="edo" id="edo" tabindex="-1">
                   	  	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
                    	</select></td>
                	<td class="Etiqueta">Ciudad :</td>
                    <td align="center">
                   	 	<select name="ciu" id="ciu" tabindex="-1">
                   	 	<option value="--">--------------------</option>
                        <!-- Aqui Hay que poner codigo para que muestre y llene los combos -->
                    	</select></td>

			  	</tr>
              	<tr>
                	<td class="Etiqueta">Tel. Oficina :</td>
                    <td><input type="text" name="tel_of" size="15" placeholder="015500000000"
                    	onkeypress="return SoloNumeros(event);" maxlength="13"/></td>
                	<td class="Etiqueta">Tel. Of. 2 :</td>
                	<td><input type="text" name="tel_of_2" size="15" placeholder="015500000000"
                		onkeypress="return SoloNumeros(event);" maxlength="13"/></td>
                  	<td class="Etiqueta">Fax :</td>
                  	<td><input type="text" name="fax" size="15" placeholder="015500000000"
                  		onkeypress="return SoloNumeros(event);" maxlength="13"/>
              	</tr>
                <tr>
                  	<td class="Etiqueta">Tel. Celular :</td>
                  	<td><input type="text" name="tel_cel" id="tel_cel" size="15" placeholder="015500000000"
                  		onkeypress="return SoloNumeros(event);" maxlength="13"/>                    
                    <td class="Etiqueta">Pagina Web :</td>
                    <td width="400"  colspan="3">
           		  		<input type="url" name="http" size="50" placeholder="http://www.ejemplo.com.mx" /></td>
                    
                </td>
                <tr>
                	<td class="Etiqueta">Contacto :</td>
                    <td width="400" colspan="3">
                    	<input type="text" name="p_conta" id="p_conta" size="65" onkeyup="this.value=this.value.toUpperCase()" 
                    	placeholder="Nombre del Contacto Principal"/></td>
                    <td colspan="2">
                    	<input type="email" name="p_email" size="35" placeholder="usuario@ejemplo.com.mx"/>
                    </td>

                </tr>
                <tr>
                	<td class="Etiqueta">Contacto :</td>
                    <td width="400" colspan="3">
                    	<input type="text" name="p_conta2" id="p_conta2" size="65" onkeyup="this.value=this.value.toUpperCase()" 
                    	placeholder="Nombre del Contacto Principal"/></td>
                    <td width="400" colspan="2">
                        <input type="email" name="p_email2" id="p_email2" size="35" placeholder="usuario@ejemplo.com.mx"/></td>
				</tr>
				<tr>
					<td colspan="8">&nbsp;</td>
				</tr>
				<tr>
					<td class="Etiqueta">Fecha Alta :</td>
					<td><a href="javascript:NewCssCal ('fe_reg','yyyyMMdd')">
						<img src="img/cal.gif" width="18" height="18" alt=".."/></a>
						<input type="text" name="fe_reg" id="fe_reg" size="13" readonly tabindex="-1"
							value="{{ date('Y-m-d') }}" /></td>
					<td class="Etiqueta">Estatus :</td>
					<td><input type="text" name="estatus" id="estatus" size="10" value="ACTIVO" readonly="readonly"
						tabindex="-1"/></td>
					<td class="Etiqueta">Ubicación :</td>					
					<td><select class="Captura" name="ubica" id="ubica">
						<!-- Aqui hay que poner Codigo para llenar la combo con las IATAS -->
						<option value="CDMX" selected="Selected">CDMX</option>
						<option value="EM">EDO DE MEX</option>
						</select></td>
				</tr>
				<tr>
					<td class="Etiqueta">Nom. Vendedor :</td>
					<td colspan="2">
						<select class="Captura" name="cve_vend" id="cve_vend">
						<!-- Aqui Hay que poner Codigo para Cargar la Combo con los Datos de Los Vendedores -->
						<option value="--" selected="Selected">---------------------------------------</option>
						</select></td>
					<td class="Etiqueta" colspan="2"></td>
				</tr>
				<tr>
					<td class="Etiqueta">Observaciones :</td>
					<td width="150" colspan="5"><textarea name="observaciones" cols="100" rows="4"
														  onkeyup="this.value=this.value.toUpperCase()"></textarea></td>
				</tr>
				<tr>
					<td width="150" height="50" colspan="3" align="center">
						<input class="Boton" name="bt_Salvar" type="submit" value="Insertar Registro" /></td>
					<td width="150" colspan="3" align="center">
						<input class="Boton" type ='button' value = 'Regresar' onclick="window.open('/c','_self')" /></td>
				</tr>
			</tbody>
		</table>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
	@endsection
