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
	src="https://maps.googleapis.com/maps/api/js?components=country:fr&location=19.432920,-99.133519&radius=65000&key=AIzaSyDdBmWCJa6T6a-gfwjzaeol90fI2Ctl4zA&signed_in=true&libraries=places&callback=initAutocomplete"
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
	  obs: 'obs',
	  peso: 'peso',
	  
	  nombre1: 'nombre1',
	  email1: 'email1',
	  telefono1: 'telefono1',
	  nempresa1: 'nempresa1',
	  
	  boton2: 'boton2',
	  boton3: 'boton3',
	  boton4: 'boton4',
	  boton5: 'boton5'
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
		//alert (addressType);
		if (componentForm[addressType]) {
		  var val = place.address_components[i][componentForm[addressType]];
		  document.getElementById(addressType).value = val;
		}
	  }

	  document.getElementById('boton1').value = 'Siguiente';
	  document.getElementById('boton2').value = '0 a 5 Kgs.';
	  document.getElementById('boton3').value = '5.1 a 10 Kgs.';
	  document.getElementById('boton4').value = '10.1 a 15 Kgs.';
	  document.getElementById('boton5').value = '15.1 a 20 Kgs.';
	}
	// [END region_fillform]

	// [START region_geolocation]
	// Bias the autocomplete object to the user's geographical location,
	// as supplied by the browser's 'navigator.geolocation' object.
	function geolocate() {
	  if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
		  var geolocation = {
			//lat: position.coords.latitude,
			//lng: position.coords.longitude
			//19.432920,-99.133519
			lat:19.432920,
			lng:-99.133519
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
	function Peso(valor)
	{
		document.getElementById('peso').value = valor;
		document.getElementById('peso').style.backgroundColor = '#FFFFFF'; // en este caso lo cambia a blanco
		document.getElementById('boton1').disabled = false;
	}
	
	function Corregir()
	{
		document.getElementById('corregir').disabled = true;
		for (var component in componentForm) {
		document.getElementById(component).disabled = false;
		document.getElementById('peso').value = '';
	  }
		
	}
	
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
			exit();
		}
		
		if(!document.form1.administrative_area_level_3.value.length)
		{
			//alert("Es necesario llenar el campo DELEGACIÓN O MUNICIPIO");
			document.form1.administrative_area_level_3.style.border = "thick solid #e6501b";
			document.form1.administrative_area_level_3.focus();
			exit();
		}
		
		if(!document.form1.administrative_area_level_1.value.length)
		{
			//alert("Es necesario llenar el campo ESTADO");
			document.form1.administrative_area_level_1.style.border = "thick solid #e6501b";
			document.form1.administrative_area_level_1.focus();
			exit();
		}
		
		if(!document.form1.postal_code.value.length)
		{
			//alert("Es necesario llenar el campo CÓDIGO POSTAL");
			document.form1.postal_code.style.border = "thick solid #e6501b";
			document.form1.postal_code.focus();
			exit();
		}
		
		if(!document.form1.nombre1.value.length)
		{
			//alert("Es necesario llenar el campo NOMBRE");
			document.form1.nombre1.style.border = "thick solid #e6501b";
			document.form1.nombre1.focus();
			exit();
		}
		
		if(!document.form1.email1.value.length)
		{
			//alert("Es necesario llenar el campo EMAIL");
			document.form1.email1.style.border = "thick solid #e6501b";
			document.form1.email1.focus();
			exit();
		}
		
		if(!document.form1.telefono1.value.length)
		{
			//alert("Es necesario llenar el campo TELÉFONO");
			document.form1.telefono1.style.border = "thick solid #e6501b";
			document.form1.telefono1.focus();
			exit();
		}
		
		if(!document.form1.peso.value.length)
		{
			//alert("Es necesario llenar el campo TELÉFONO");
			document.form1.peso.style.border = "thick solid #e6501b";
			document.form1.boton2.focus();
			exit();
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
       "INGRESA AQUI TU DIRECCION DE RECOLECCION"
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
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-92900444-1', 'auto');
 ga('send', 'pageview');

</script>
</head>

  <body onLoad="textticker()">
<div id="mydiv"> 
 
	<form action="02entrega.php" method="post" name="form1" id="form1">
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
			 placeholder="Por favor escribe la dirección del punto de Recolección"
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
					maxlength="50"
					onBlur="this.style.backgroundColor='white'">
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
					maxlength="10"
					onBlur="this.style.backgroundColor='white'">
				</input>
			</td>
		</tr>
		
		<tr>
			<td> 
			Interior
			</td>
			<td class="label">
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
					maxlength="50"
					onBlur="this.style.backgroundColor='white'">
				</input>
			</td>
			<td>
			Del./Mipio.
			</td>
			<td>
				<input 	class="fullField" 
					id="administrative_area_level_3"
					name="administrative_area_level_3"
					disabled="true"
					maxlength="50"
					onBlur="this.style.backgroundColor='white'">
				</input>
			</td>
		</tr>
		
		<tr>
			<td class="label">
			Estado
			</td>
			<td class="label">
				<input 	class="fullField"
					id="administrative_area_level_1"
                    name="administrative_area_level_1" 					
					disabled="true"
					maxlength="50"
					onBlur="this.style.backgroundColor='white'">
				</input>
			</td>
			<td class="label">
			C. P.
			</td>
			
			<td class="label">
				<input 	class="fullField" 
						id="postal_code"
						name="postal_code"
						disabled="true"
						maxlength="10"
						onBlur="this.style.backgroundColor='white'">
				</input>
			</td>
		</tr>
		
		<tr>
			<td colspan="4" align="center" >
				<div style="height: 1px; background-color: rgba(244,124,47, .5);"></div>
			</td>
		</tr>
		
		<tr>
			<td colspan="4" align="center"><b>DATOS DE RECOLECCIÓN</b></td>
		</tr>
		
		<tr>
			<td>Empresa</td>
			<td colspan="3">
				<input 	class="wideField"
						id="nempresa1"
						name="nempresa1"
						size="44"
						placeholder=""
						disabled="true"
						maxlength="50">
				</input>
			</td>
		</tr>
		
		<tr>
			<td>Nombre</td>
			<td colspan="3">
				<input 	class="wideField"
						id="nombre1"
						name="nombre1"
						size="44"
						placeholder=""
						disabled="true"
						maxlength="50"
						onBlur="this.style.backgroundColor='white'">
				</input>
			</td>
		</tr>
		
		<tr>
			<td>Email</td>
			<td colspan="3">
				<input 	class="wideField"
						id="email1"
						name="email1"
						size="44"
						placeholder="ejemplo@micorreo.com"
						disabled="true"
						maxlength="50"
						onBlur="this.style.backgroundColor='white'">
				</input>
			</td>
		</tr>
		
		<tr>
			<td>Teléfono</td>
			<td colspan="3">
				<input  class="wideField"
						id="telefono1"
						name="telefono1"
						placeholder="5555 6666"
						disabled="true"
						maxlength="15"
						onBlur="this.style.backgroundColor='white'">
				</input>
				<p>
			</td>
		</tr>
		
		<tr>
			<td colspan="4" align="center" >
				<div style="height: 1px; background-color: rgba(244,124,47, .5);"></div>
			</td>
		</tr>
		
		<tr>
			<td>
			<b>OBSERVACIONES</b></td>
			<td colspan="3">
				<input 	class="wideField"
						id="obs" 
						name="obs" 
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
			<td class="label">
			Peso del Envío
				<input 	class="mediumField"
						id="peso" 
						name="peso"		   
						disabled="true"
						readonly>
				</input>
				</td>
			<td colspan="3">
			
					<input 	type="button" 
					value = "0 a 5 Kgs." 
					id="boton2" 
					name="boton2"
					align="center"
					onclick="Peso(this.value);"
					disabled="true">
					</input>
					
					<input 	type="button" 
					value = "5.1 a 10 Kgs." 
					id="boton3" 
					name="boton3"
					align="center"
					onclick="Peso(this.value);"
					disabled="true">
					</input>
					
					<input 	type="button" 
					value = "10.1 a 15 Kgs." 
					id="boton4" 
					name="boton4"
					align="center"
					onclick="Peso(this.value);"
					disabled="true">
					</input>
					
					<input 	type="button" 
					value = "15.1 a 20 Kgs." 
					id="boton5" 
					name="boton5"
					align="center"
					onclick="Peso(this.value);"
					disabled="true">
					</input>
			</td>
		</tr>
	  
	    <tr>
			<td colspan="4" align="center" >
				<div style="height: 1px; background-color: rgba(244,124,47, .5);"></div>
			</td>
		</tr>
		
		<tr>
			<td colspan="4" align="center">
				<input 	type="button" 
					value = "Confirmar datos" 
					id="boton1" 
					name="boton1" 
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
	
	<input type="hidden" id="country"   name="country"	   disabled="true" >

</form>

</div>	
  </body>
</html>