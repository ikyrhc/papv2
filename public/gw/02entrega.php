<?php
$calle_numero 	= $_POST['street_number'];
$calle 			= $_POST['route'];
$colonia 		= $_POST['sublocality_level_1']; //localidad
$delmipio 		= $_POST['administrative_area_level_3'];
$estado 		= $_POST['administrative_area_level_1'];
$cp 			= $_POST['postal_code'];
$pais 			= $_POST['country'];
$nombre1 		= $_POST['nombre1'];
$nempresa1 		= $_POST['nempresa1'];
$email1 		= $_POST['email1'];
$telefono1 		= $_POST['telefono1'];

$domicilio1 	= $_POST['autocomplete'];
$interior 		= $_POST['interior'];
$obs 			= $_POST['obs'];
$peso 			= $_POST['peso'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pide un PAP</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
	
	<meta http-equiv="Expires" CONTENT="0">
	<meta http-equiv="Cache-Control" CONTENT="no-cache">
	<meta http-equiv="Pragma" CONTENT="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="styles.css" rel="stylesheet"> 

	<script 
	src="https://maps.googleapis.com/maps/api/js?location=19.432920,-99.133519&radius=90000&key=AIzaSyDdBmWCJa6T6a-gfwjzaeol90fI2Ctl4zA&signed_in=true&libraries=places&callback=initAutocomplete"
	async defer>
	</script>

	<script>

	//VARIABLES 1
	// This example displays an address form, using the autocomplete feature
	// of the Google Places API to help users fill in the information.

	var placeSearch, autocomplete;
	var sel;

	function Selector(valor)
	{ 
	  sel = valor;
	  alert (sel);
	}

	var componentForm = {
	  street_number: 'short_name',
	  route: 'long_name',
	  administrative_area_level_1: 'short_name',
	  country: 'long_name',
	  postal_code: 'short_name',
	  
	  sublocality_level_1: 'long_name',
	  administrative_area_level_3: 'long_name',
	  
	  interior: 'interior',
	  obs2: 'obs2',
	  boton2: 'boton2',
	  
	  nombre2: 'nombre2',
	  nempresa2: 'nempresa2',
	  email2: 'email2',
	  telefono2: 'telefono2'
	};

	function initAutocomplete() 
	{
		var defaultBounds = new google.maps.LatLngBounds(
		new google.maps.LatLng(19.432920,-99.133519),
		new google.maps.LatLng(19.432920,-99.133519));

		
		autocomplete = new google.maps.places.Autocomplete(
			(document.getElementById('autocomplete')),
			{ 	bounds: defaultBounds,
				types: ['geocode'],
				componentRestrictions: {country: 'mx'}
			});
		autocomplete.addListener('place_changed', fillInAddress);
	}

	// [START region_fillform]
	function fillInAddress() {
	  // Get the place details from the autocomplete object.
	  var place = autocomplete.getPlace();

	  for (var component in componentForm) {
		document.getElementById(component).value = '';
		document.getElementById(component).disabled = false;
		//document.getElementById('corregir').disabled = true;
	  }

	  // Get each component of the address from the place details
	  // and fill the corresponding field on the form.
	  for (var i = 0; i < place.address_components.length; i++) {
		var addressType = place.address_components[i].types[0];
		if (componentForm[addressType]) {
		  var val = place.address_components[i][componentForm[addressType]];
		  document.getElementById(addressType).value = val;
		}
	  }
	  document.getElementById('boton2').value = 'Confirmar datos';
	}
	// [END region_fillform]

	// [START region_geolocation]
	// Bias the autocomplete object to the user's geographical location,
	// as supplied by the browser's 'navigator.geolocation' object.
	function geolocate() {
	  if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
		  var geolocation = {
			lat: position.coords.latitude,
			lng: position.coords.longitude
		  };
		  var circle = new google.maps.Circle({
			center: geolocation,
			radius: position.coords.accuracy
		  });
		  autocomplete.setBounds(circle.getBounds());
		});
	  }
	}
	// [END region_geolocation]
	
	function Corregir()
	{
		document.getElementById('corregir').disabled = true;
		for (var component in componentForm) {
		document.getElementById(component).disabled = false;
	  }
	}
	
	function validarVacios()
	{
		//alert("validar campos vacios")
		if(!document.form1.route.value.length)
		{
			//alert("Es necesario llenar el campo CALLE");
			document.form1.route.style.border = "thick solid #e6501b";
			document.form1.route.focus();
			return;
		}
		
		if(!document.form1.street_number.value.length)
		{
			//alert("Es necesario llenar el campo NÚMERO EXTERIOR");
			document.form1.street_number.style.border = "thick solid #e6501b";
			document.form1.street_number.focus();
			return;
		}
		
		if(!document.form1.sublocality_level_1.value.length)
		{
			//alert("Es necesario llenar el campo COLONIA");
			document.form1.sublocality_level_1.style.border = "thick solid #e6501b";
			document.form1.sublocality_level_1.focus();
			return;
		}
		
		if(!document.form1.administrative_area_level_3.value.length)
		{
			//alert("Es necesario llenar el campo DELEGACIÓN O MUNICIPIO");
			document.form1.administrative_area_level_3.style.border = "thick solid #e6501b";
			document.form1.administrative_area_level_3.focus();
			return;
		}
		
		if(!document.form1.administrative_area_level_1.value.length)
		{
			//alert("Es necesario llenar el campo ESTADO");
			document.form1.administrative_area_level_1.style.border = "thick solid #e6501b";
			document.form1.administrative_area_level_1.focus();
			return;
		}
		
		if(!document.form1.postal_code.value.length)
		{
			//alert("Es necesario llenar el campo CÓDIGO POSTAL");
			document.form1.postal_code.style.border = "thick solid #e6501b";
			document.form1.postal_code.focus();
			return;
		}
		
		if(!document.form1.nombre2.value.length)
		{
			//alert("Es necesario llenar el campo NOMBRE");
			document.form1.nombre2.style.border = "thick solid #e6501b";
			document.form1.nombre2.focus();
			return;
		}
		
		if(!document.form1.email2.value.length)
		{
			//alert("Es necesario llenar el campo EMAIL");
			document.form1.email2.style.border = "thick solid #e6501b";
			document.form1.email2.focus();
			return;
		}
		
		if(!document.form1.telefono2.value.length)
		{
			//alert("Es necesario llenar el campo TELÉFONO");
			document.form1.telefono2.style.border = "thick solid #e6501b";
			document.form1.telefono2.focus();
			return;
		}
		else
		{
			document.form1.submit();
		}
		
	}
	
	<!-- begin
      var max=0;
      function textlist()
      {
      max=textlist.arguments.length;
      for (i=0; i<max; i++)
      this[i]=textlist.arguments[i];
      }
      tl=new textlist
      ( 
       "INGRESA AQUI TU DIRECCION DE ENTREGA"
      );
      var x=0; pos=0;
      var l=tl[0].length;
	  
      function textticker()
      {
        document.form1.autocomplete.value = tl[x].substring(0,pos)+"_";
        
		if(pos++==l) 
		{ 
			pos=0; setTimeout("textticker()",1000); x++;
			//if(x==max) x=0; l=tl[x].length; 
			if(x==max) exit();
		}
		else
        setTimeout("textticker()",50);
      }
      // end -->
	  
	  function Limpiar()
	  {
		  document.form1.autocomplete.value = "";
	  }
	
</script>

</head>

  <body onLoad="textticker()">
<div id="mydiv">   
  <form action="03conf.php" method="post" id="form1" name="form1">
  <table>
			<tr>
				<td> 
					<img src="pap.jpg" width=45% />
				</td>
				<td> 
					<a href="http://puntoapunto.mx/" class="boton-regresar">Regresar</a>
				</td>
				
			</tr>
		</table>
   
   <div id="locationField">
      <input id="autocomplete"
			 name="autocomplete"
			 placeholder="Por favor escribe la dirección del punto de Entrega"
             onFocus="Limpiar();geolocate()" 
			 type="text"
			 style="border: 2px solid rgba(255,0,0,.3); padding: .4em;
			 font: italic bold 100px;"
			 onclick="Limpiar();"
			 >
	  </input>
    </div>
	<br/>
    <table id="address" border="0" cellpadding="8">
	  
	
      <tr>
        <td width="20">
		Calle
		</td>
		<td>
		<input 	class="fullField" 
				id="route"
				name="route"
				disabled="true"
				maxlength="50">
		</input>
		</td>
		<td>
        Número
		</td>
		<td>
			<input 	class="fullField" 
					id="street_number"
					name="street_number"
					disabled="true"
					maxlength="15">
			</input>
		</td>
      </tr>
	  
	   <tr>
	  
        <td>
		Interior
		</td>
		<td>
			<input 	class="fullField" 
					id="interior"
					name="interior"
					disabled="true"
					maxlength="50">
			</input>
		</td>
		<td>
		</td>
		<td>
		</td>
      </tr>
	  
	  <tr>
	  
        <td>
		Colonia
		</td>
		<td>
			<input 	class="fullField" 
					id="sublocality_level_1"
					name="sublocality_level_1"
					disabled="true"
					maxlength="50">
			</input>
		</td>
		<td>
		Del./Mpio.
		</td>
		<td>
			<input 	class="fullField" 
					id="administrative_area_level_3"
					name="administrative_area_level_3"
					disabled="true"
					maxlength="50">
			</input>
		</td>
      </tr>
	  
      <tr>
        <td>
		Estado
		</td>
		<td>
			<input 	class="fullField"
					id="administrative_area_level_1" 
					name="administrative_area_level_1" 
					disabled="true"
					maxlength="50">
			</input>
		</td>
		<td>
		C. P.
		</td>
        <td>
		<input 	class="fullField" 
				id="postal_code"
				name="postal_code"
				disabled="true"
				maxlength="10">
		</input>
		</td>
      </tr>
	  
      <tr>
			<td colspan="4" align="center" >
				<div style="height: 1px; background-color: rgba(244,124,47, .5);"></div>
			</td>
		</tr>
	  
	  <tr>
        <td colspan="4" align="center"><b>DATOS DE ENTREGA</b></td>
		</td>
      </tr>
	  
	  <tr>
        <td>
		Empresa
		</td>
		<td colspan="3">
		<input class="wideField"
               id="nempresa2" 
			   name="nempresa2" 
			   disabled="true"
			   maxlength="50">
	    </input>
		</td>
      </tr>
	  
	  <tr>
        <td>
		Nombre</td>
		<td colspan="3">
		<input class="wideField"
               id="nombre2" 
			   name="nombre2" 
			   disabled="true"
			   maxlength="50">
	    </input>
		</td>
      </tr>
	  
	  <tr>
	    <td>Email</td>
		<td colspan="3">
		<input 	class="wideField"
					id="email2"
					name="email2"
					size="44"
					placeholder="ejemplo@micorreo.com"
					disabled="true"
					maxlength="50">
			</input>
			</td>
      </tr>
	  
	  <tr>
        <td>Teléfono</td>
		<td colspan="3">
			<input  class="wideField"
					id="telefono2"
					name="telefono2"
					placeholder="5555 6666"
					disabled="true"
					maxlength="15">
			</input>
			</td>
      </tr>
	  
	 <tr>
			<td colspan="4" align="center" >
				<div style="height: 1px; background-color: rgba(244,124,47, .5);"></div>
			</td>
		</tr>
	  
	   <tr>
         <td>
		 <b> Descripción del envío / Observaciones</b>
		</td>
		<td colspan="3">
		<input class="wideField"
               id="obs2" 
			   name="obs2" 
			   disabled="true"
			   maxlength="50">
	    </input>
		</td>
      </tr>
	  
	  
	  <tr>
			<td colspan="4" align="center" >
				<div style="height: 1px; background-color: rgba(244,124,47, .5);"></div>
			</td>
		</tr>
	  
	  <tr>
        <td>
		Hora de Recolección
		</td>
		<td>
			<select name="hora_r">
			  <option value="07">07</option>
			  <option value="08">08</option>
			  <option value="09">09</option>
			  <option value="10">10</option>
			  <option value="11">11</option>
			  <option value="12">12</option>
			  <option value="13">13</option>
			  <option value="14">14</option>
			  <option value="15">15</option>
			  <option value="16">16</option>
			  <option value="17">17</option>
			  <option value="18">18</option>
			  <option value="19">19</option>
			  <option value="20">20</option>
			  <option value="21">21</option>
			  <option value="22">22</option>
			  <option value="23">23</option>
			</select>
			<select name="minuto_r">
			  <option value="00">00</option>
			  <option value="05">05</option>
			  <option value="10">10</option>
			  <option value="15">15</option>
			  <option value="20">20</option>
			  <option value="25">25</option>
			  <option value="30">30</option>
			  <option value="35">35</option>
			  <option value="40">40</option>
			  <option value="45">45</option>
			  <option value="50">50</option>
			  <option value="55">55</option>
			</select>

		</td>
        <td>Hora de Entrega
		</td>
		<td>
			<select name="hora_e">
			  <option value="07">07</option>
			  <option value="08">08</option>
			  <option value="09">09</option>
			  <option value="10">10</option>
			  <option value="11">11</option>
			  <option value="12">12</option>
			  <option value="13">13</option>
			  <option value="14">14</option>
			  <option value="15">15</option>
			  <option value="16">16</option>
			  <option value="17">17</option>
			  <option value="18">18</option>
			  <option value="19">19</option>
			  <option value="20">20</option>
			  <option value="21">21</option>
			  <option value="22">22</option>
			  <option value="23">23</option>
			</select>
			<select name="minuto_e">
			  <option value="00">00</option>
			  <option value="05">05</option>
			  <option value="10">10</option>
			  <option value="15">15</option>
			  <option value="20">20</option>
			  <option value="25">25</option>
			  <option value="30">30</option>
			  <option value="35">35</option>
			  <option value="40">40</option>
			  <option value="45">45</option>
			  <option value="50">50</option>
			  <option value="55">55</option>
			</select>
		</td>
      </tr>
	  
	  <tr>
			<td colspan="4" align="center" >
				<div style="height: 1px; background-color: rgba(244,124,47, .5);"></div>
			</td>
		</tr>
	  
	  <tr>
	  <td colspan = "4" align="center">
		<input 	type="button" 
				value = "Confirmar datos" 
				id="boton2" 
				name="boton2" 
				onclick="validarVacios();"
				>
		</input>
	  <!--
		<input 	type="button" 
				value = "Corregir datos" 
				id="corregir" 
				name="corregir"
				align="center"
				onclick="Corregir();">
		</input> -->
	  </td>
	  </tr>
	  
    </table>

<!-- 
<?php

if ($interior != "")
{ $int1 = " Interior ".$interior; }

?>

 <table>
      <tr>
        <td class="label" colspan = "2">Datos de Recoleccion</td>
      </tr>
	  <tr>
        <td class="label">Domicilio</td>
        <td class="wideField" colspan="2"><?php echo $calle." ".$calle_numero.$int1; ?></td>
      </tr>
	  <tr>
        <td class="label">Colonia</td>
        <td class="wideField" colspan="3"><?php echo $colonia; ?></td>
      </tr>
      <tr>
      <tr>
        <td class="label">Del./Mpio.</td>
        <td class="wideField" colspan="3"><?php echo $delmipio; ?></td>
      </tr>
      <tr>
        <td class="label">Estado</td>
        <td class="slimField"><?php echo $estado; ?></td>
        <td class="label">C. P.</td>
        <td class="wideField"><?php echo $cp; ?></td>
      </tr>
      <tr>
        <td class="label">Pais</td>
        <td class="wideField" colspan="3"><?php echo $pais; ?></td>
      </tr>
	  
	  <tr>
        <td class="label">Observaciones</td>
        <td class="wideField" colspan="3"><?php echo $obs; ?></td>
      </tr>
	  
	  <tr>
        <td class="label">Peso</td>
        <td class="wideField" colspan="3"><?php echo $peso; ?></td>
      </tr>
	  
    </table>
	-->
	<!-- campos a enviar finalmente al geolocalizador-->
	<input type="hidden" id="country"   name="country"	   disabled="true" >
	
	<input type="hidden" id="calle" 		name="calle" 		value="<?php echo $calle; ?>">
	<input type="hidden" id="numero" 		name="numero" 		value="<?php echo $calle_numero; ?>">
	<input type="hidden" id="interior1" 	name="interior1" 	value="<?php echo $interior; ?>">
	<input type="hidden" id="colonia" 		name="colonia" 		value="<?php echo $colonia; ?>">
	<input type="hidden" id="delmipio" 		name="delmipio" 	value="<?php echo $delmipio; ?>">
	<input type="hidden" id="estado" 		name="estado" 		value="<?php echo $estado; ?>">
	<input type="hidden" id="cp" 			name="cp" 			value="<?php echo $cp; ?>">
	<input type="hidden" id="pais" 			name="pais" 		value="<?php echo $pais; ?>">
	<input type="hidden" id="obs1" 			name="obs1"			value="<?php echo $obs; ?>">
	<input type="hidden" id="peso" 			name="peso"			value="<?php echo $peso; ?>">
	<input type="hidden" id="domicilio1" 	name="domicilio1"	value="<?php echo $domicilio1; ?>">
	<input type="hidden" id="nombre1" 		name="nombre1"		value="<?php echo $nombre1; ?>">
	<input type="hidden" id="nempresa1" 	name="nempresa1"	value="<?php echo $nempresa1; ?>">
	<input type="hidden" id="email1" 		name="email1"		value="<?php echo $email1; ?>">
	<input type="hidden" id="telefono1" 	name="telefono1"	value="<?php echo $telefono1; ?>">

	
</form>
</body>
  </body>
</html>