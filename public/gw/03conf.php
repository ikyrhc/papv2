<?php
/*datos de entrada del form*/
$calle_numero2 	= $_POST['street_number'];
$calle2 		= $_POST['route'];
$colonia2 		= $_POST['sublocality_level_1']; //localidad
$delmipio2 		= $_POST['administrative_area_level_3'];
$estado2 		= $_POST['administrative_area_level_1'];
$cp2 			= $_POST['postal_code'];
$pais2 			= $_POST['country'];
$domicilio2 	= $_POST['autocomplete'];
$int2 			= $_POST['interior'];
$obs2 			= $_POST['obs2'];
$nombre2 		= $_POST['nombre2'];
$nempresa2 		= $_POST['nempresa2'];
$email2 		= $_POST['email2'];
$telefono2 		= $_POST['telefono2'];

$calle_numero 	= $_POST['numero'];
$calle 			= $_POST['calle'];
$colonia 		= $_POST['colonia'];
$delmipio 		= $_POST['delmipio'];
$estado 		= $_POST['estado'];
$cp 			= $_POST['cp'];
$pais 			= $_POST['pais'];
$domicilio1 	= $_POST['domicilio1'];
$int1 			= $_POST['interior1'];
$obs1 			= $_POST['obs1'];
$nombre1 		= $_POST['nombre1'];
$nempresa1 		= $_POST['nempresa1'];
$email1 		= $_POST['email1'];
$telefono1 		= $_POST['telefono1'];

$f_recolectar	= $_POST['f_recolectar'];
$hora_r 		= $_POST['hora_r'];
$minuto_r 		= $_POST['minuto_r'];

$f_entrega		= $_POST['f_entrega'];
$hora_e 		= $_POST['hora_e'];
$minuto_e 		= $_POST['minuto_e'];




if ($_POST['peso'] == "")
{
	$peso = "0 a 3 Kgs.";
}
else
{
	$peso = $_POST['peso'];
}

/* datos para extraccion de guia*/
$EMP = "PAP2";
$Cliente = "GUIAWEB";





?>

<!DOCTYPE html>
<html>
	<head>
	 <meta charset="utf-8">
	 <meta http-equiv="Expires" CONTENT="0">
	<meta http-equiv="Cache-Control" CONTENT="no-cache">
	<meta http-equiv="Pragma" CONTENT="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  

		<title>Pide tu PAP</title>
		<style>

		@media only screen and (max-width: 719px) 
{
	/* Force table to not be like tables anymore */
	table, thead, tbody, td, th,tr 
	{
		display: block; 
	}
	
	html, body {
				font-size: 10pt;
				font-family: 'Metrophobic', Arial, serif; font-weight: 400;
				height: 100%;
				margin: 0;
				padding: 0;
				}
	.label2 {
        text-align: center;
        color: #303030;
      }
	
	#map {
				height: 90%;
				width: 90%;
				margin-left: 5%;
				
		}
		
	#puntoA {
        position: absolute;
  top:  50px; 
  
		text-align: left;
        width: 100%;
		font-family: 'Metrophobic', Arial, serif; font-weight: 400;
      }
	  
	  #puntoB {
		  position: absolute;
  top:  50px;
        text-align: left;
        width: 100%;
		font-family: 'Metrophobic', Arial, serif; font-weight: 400;
      }
	
}
		
		@media only screen and (min-width: 720px)  
{
	html, body 
	{
		height: 100%;
		margin: 0;
		padding: 0;
	}
	
	#map 
	{
		height: 55%;
		width: 45%;
		margin-top: 2%;
		
		float: left;
	}
	
	#right-panel 
	{
		height: 49%;
		width: 49%;
		margin-top: 2%;
		margin-left: 2%;
		float: left;
	}
	
			
	#address 
	{
		font-size: 10pt;
		font-family: 'Metrophobic', Arial, serif; font-weight: 400;
		
		border-radius: 13px 13px 13px 13px;
		-moz-border-radius: 13px 13px 13px 13px;
		-webkit-border-radius: 13px 13px 13px 13px;
			
		
     }
     
	  .label 
	  {
        text-align: right;
        width: 100px;
        color: #303030;
		font-family: 'Metrophobic', Arial, serif; font-weight: 400;
      }
	  .label2 {
        text-align: center;
        color: #303030;
		font-family: 'Metrophobic', Arial, serif; font-weight: 400;
      }
	  
	
	  #puntoA {
		float: left;
        text-align: left;
        width: 50%;
		height: 5%;
		font-family: 'Metrophobic', Arial, serif; font-weight: 400;
      }
	  
	  
	  #puntoB {
        float: left;
        text-align: left;
        width: 50%;
		font-family: 'Metrophobic', Arial, serif; font-weight: 400;
      }
	  .wideField 
	  {
        width: 70%;
      }
      .field 
	  {
        width: 50%;
      }
	  .mediumField 
	  {
        width: 35%;
      }
	  .smallField 
	  {
        width: 25%;
      }
      .slimField 
	  {
        width: 15%;
      }	
}


		</style>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="styles2.css" rel="stylesheet"> 
		<script type="text/javascript">

		function mostrarPuntoA(){
			
			document.getElementById('puntoA').style.display = 'block';
			document.getElementById('puntoB').style.display = 'none';}
			
			function mostrarPuntoB(){
			document.getElementById('puntoB').style.display = 'block';
			document.getElementById('puntoA').style.display = 'none';}
			
			/*traer la ultima guia de serivcio*/
			function traeUltimaGuia()
			{
				
				var cte_id = document.form1.cliente_id.value;
				//alert (cte_id);
				//alert('Su resolución es de '+ screen.width + ', x:' + screen.height);

				//PROCESO DE EXTRACION DE ULTIMA GUIA DE CLIENTE
					var url_gcte = "../PAP2/dynamic/ultima_guia.php?id_cte=136";
					var httpGC = getHTTPObject4(); // We create the HTTP Object
					//---------------------------------------------------
					//-- Genera xmlHttpRequest
					//---------------------------------------------------
					function getHTTPObject4() 
					{
						var xmlhttp;
						if (!xmlhttp && typeof XMLHttpRequest != 'undefined') 
						{
							try 
							{
								xmlhttp = new XMLHttpRequest();
							} 
							catch (e) 
							{
								xmlhttp = false;
							}
						}
						return xmlhttp;
					}
						
					//var Datos4 = url_gcte + cte_id ;
					var Datos4 = url_gcte;
					//alert(Datos4);
					httpGC.open("GET", Datos4, true);
					httpGC.onreadystatechange = handleHttpResponse_GC;
					httpGC.send(null);
						
					function handleHttpResponse_GC() 
					{
						//alert(httpVU.readyState);
						if (httpGC.readyState == 4) 
						{
							results = httpGC.responseText.split(",");
							if (httpGC.responseXML.getElementsByTagName('GUIA')[0].firstChild == null)
							{ 
								alert ("NO TIENE GUIAS POR ASIGNAR"); 
							}
							else
							{
								document.form1.os.value = httpGC.responseXML.getElementsByTagName('GUIA')[0].firstChild.data;
								//alert(document.form1.os.value)
								validarGuia();
							}
						}
					}
		
				}
				
				//-------------------------------------------------------------------------------------->> VALIDAR GUIA
function validarGuia(guia)
{
		var token = "<?php echo date('Ymd-Gis') ?>_"+Math.random()*11;
		//alert (token);
		document.form1.token.value = token
		if (document.form1.guiaEvaluada.value == 0)
		{
			var Cte_sel = document.form1.cliente_id.value;
			if(Cte_sel != "--")
			{	
				//alert("entra a auto admin guias 1");
				var urlCGuia = "../PAP2/dynamic/valida_guia_xml_nuevo.php?guia=";
				var httpVG = getHTTPObject(); // Crear Objet GETHTTP
				
				//---------------------------------------------------
				//-- Genera xmlHttpRequest
				//---------------------------------------------------
				
				function getHTTPObject() 
				{
					var xmlhttp;
					if (!xmlhttp && typeof XMLHttpRequest != 'undefined') 
					{
						try 
						{
							xmlhttp = new XMLHttpRequest();
						} 
						catch (e) 
						{
							xmlhttp = false;
						}
					}
				return xmlhttp;
				}
				var vGuia = "136-"+document.form1.os.value;
				var DatosGuia = urlCGuia + vGuia;
				//var handleHttpResponse_vGuia2;
				//alert (DatosGuia);
				httpVG.open("GET", DatosGuia, true);
				httpVG.onreadystatechange = handleHttpResponse_vGuia2;
				httpVG.send(null);
							
				function handleHttpResponse_vGuia2() 
				{
					if (httpVG.readyState == 4) 
					{
						results = httpVG.responseText.split(",");
						var GuiaEncontrada = httpVG.responseXML.getElementsByTagName('GUIA_E')[0].firstChild.data;
						var GuiaFechaC = httpVG.responseXML.getElementsByTagName('GUIA_FC')[0].firstChild.data;
												
						if (GuiaEncontrada==1) 
						{
							alert("--La guia ya fue asignada, favor de capturar un documento diferente. \n Fecha de Captura: "+GuiaFechaC + "\n");
							document.form1.destino.disabled = "disabled";
						}
						else
						{
							//-----------
							//alert("entra1")
							document.form1.guiaEvaluada.value = 1; 
							//document.form1.PRECIO_VENTA.value = httpVG.responseXML.getElementsByTagName('GUIA_COSTO')[0].firstChild.data;
							var GuiaPropietarioSC = httpVG.responseXML.getElementsByTagName('GUIA_SC')[0].firstChild.data;
							document.form1.ar.value = GuiaPropietarioSC;
							document.form1.tipo.value = httpVG.responseXML.getElementsByTagName('GUIA_TIPO')[0].firstChild.data;
							//onChange_primer_combo();
							//document.form1.destino.disabled = ""
							//document.form1.os.setAttribute('readonly', 'readonly');
							//document.form1.atnenvio.focus();
							
						}
						
					}
					window.status = '';
					return false;
						
				}		
			}
		}
}

//---------------------------------------------------------------------------------> FIN VALIDAR GUIA
				
				
			
		</script>
		
		<meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
	</head>
	
	<body onload="calculaPrecios();traeUltimaGuia();">
	<div id="cuerpo-central">
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
	</div>
	</div>
	<form action="cgpap.php" method="post" name="form1">
		<div id="right-panel" align="center">
			
			<input type="hidden" name="km" 				id="km" 			value="0">
			<input type="hidden" name="peso" 			id="peso" 			value="<?php echo $peso;?>">
			
			<input type="hidden" name="cliente_id" 		id="cliente_id" 		value="<?php echo $Cliente;?>">
			<input type="hidden" name="os" 				id="os" 			value="">
			<input type="hidden" name="guiaEvaluada" 	id="guiaEvaluada" 	value="0">
			<input type="hidden" name="PRECIO_VENTA" 	id="PRECIO_VENTA" 	value="0">
			<input type="hidden" name="ar" 				id="ar" 			value="">
			<input type="hidden" name="tipo" 			id="tipo" 			value="0">
			<input type="hidden" name="token" 			id="token" 			value="">
			
	<input type="hidden" id="calle" 		name="calle" 		value="<?php echo $calle; ?>">
	<input type="hidden" id="numero" 		name="numero" 		value="<?php echo $calle_numero; ?>">
	<input type="hidden" id="interior1" 	name="interior1" 	value="<?php echo $int1; ?>">
	<input type="hidden" id="colonia" 		name="colonia" 		value="<?php echo $colonia; ?>">
	<input type="hidden" id="delmipio" 		name="delmipio" 	value="<?php echo $delmipio; ?>">
	<input type="hidden" id="estado" 		name="estado" 		value="<?php echo $estado; ?>">
	<input type="hidden" id="cp" 			name="cp" 			value="<?php echo $cp; ?>">
	<input type="hidden" id="pais" 			name="pais" 		value="<?php echo $pais; ?>">
	<input type="hidden" id="obs1" 			name="obs1"			value="<?php echo $obs1; ?>">
	<input type="hidden" id="nombre1" 		name="nombre1"		value="<?php echo $nombre1; ?>">
	<input type="hidden" id="nempresa1" 	name="nempresa1"	value="<?php echo $nempresa1; ?>">
	<input type="hidden" id="email1" 		name="email1"		value="<?php echo $email1; ?>">
	<input type="hidden" id="telefono1" 	name="telefono1"	value="<?php echo $telefono1; ?>">
	
	<input type="hidden" id="calle2" 		name="calle2" 		value="<?php echo $calle2; ?>">
	<input type="hidden" id="numero2" 		name="numero2" 		value="<?php echo $calle_numero2; ?>">
	<input type="hidden" id="interior2" 	name="interior2" 	value="<?php echo $int2; ?>">
	<input type="hidden" id="colonia2" 		name="colonia2" 	value="<?php echo $colonia2; ?>">
	<input type="hidden" id="delmipio2" 	name="delmipio2" 	value="<?php echo $delmipio2; ?>">
	<input type="hidden" id="estado2" 		name="estado2" 		value="<?php echo $estado2; ?>">
	<input type="hidden" id="cp2" 			name="cp2" 			value="<?php echo $cp2; ?>">
	<input type="hidden" id="pais2" 		name="pais2" 		value="<?php echo $pais2; ?>">
	<input type="hidden" id="obs2" 			name="obs2"			value="<?php echo $obs2; ?>">
	<input type="hidden" id="nombre2" 		name="nombre2"		value="<?php echo $nombre2; ?>">
	<input type="hidden" id="nempresa2" 	name="nempresa2"	value="<?php echo $nempresa2; ?>">
	<input type="hidden" id="email2" 		name="email2"		value="<?php echo $email2; ?>">
	<input type="hidden" id="telefono2" 	name="telefono2"	value="<?php echo $telefono2; ?>">
	
	<input type="hidden" id="hora_r" 	name="hora_r"	value="<?php echo $hora_r; ?>">
	<input type="hidden" id="minuto_r" 	name="minuto_r"	value="<?php echo $minuto_r; ?>">
	<input type="hidden" id="hora_e" 	name="hora_e"	value="<?php echo $hora_e; ?>">
	<input type="hidden" id="minuto_e" 	name="minuto_e"	value="<?php echo $minuto_e; ?>">
	
	<input type="hidden" id="f_recolectar" 	name="f_recolectar"	value="<?php echo $f_recolectar; ?>">
	<input type="hidden" id="f_entrega" 	name="f_entrega"	value="<?php echo $f_entrega; ?>">
			
			
			
			<div id="output" align="left">
				<table id="address" border="0">
				<tr>
				<td colspan="6" align="center"><b>INFORMACIÓN DE TU ENVÍO</b></td>
				</tr>
					<tr>
							<td>Peso</td><td name="peso1" id="peso1"></td><td>Kilómetros</td><td name="km1" id="km1"></td><td>Costo</td><td name="costo1" id="costo1"></td>
					</tr>
					
					<tr>
						<td colspan="6" align="center" >
							<div style="height: 1px; background-color: rgba(244,124,47, .5); margin: .8em 0"></div>
						</td>
					</tr>
					
					<tr>
						<td align="left" colspan="4">
						
							<b>INFORMACIÓN DE RECOLECCIÓN:</b>
						
						</td>
						<td align="right">
							<button type="button" onclick="mostrarPuntoA()"><img src="editar.gif" alt="x" /></button>
						</td>
					</tr>
					<tr>
						<td bgcolor="#6FBA33">
							Punto A
						</td>
						<td colspan="5">
							<?php 
							if ( $int1 != "")
								{ $intA = " Interior ".$int1;}
							echo $calle." ".$calle_numero." ".$intA." ".$colonia." ".$estado." C. P. ".$cp;
							?>;
						</td>
						
					</tr>
					<tr>
						<td>
							Empresa:
						</td>
						<td colspan="3">
							<?php echo $nempresa1;?>
						</td>
					</tr>
					<tr>
						<td>
							Envía:
						</td>
						<td colspan="3">
							<?php echo $nombre1;?>
						</td>
					</tr>
					<tr>
						<td>
							Email:
						</td>
						<td colspan="3">
							<?php echo $email1;?>
						</td>
					</tr>
					
					<tr>
						<td>
							Teléfono:
						</td>
						<td colspan="3">
							<?php echo $telefono1;?>
						</td>
					</tr>
					<tr>
						<td>
							Observaciones:
						</td>
						<td colspan="3">
							<?php echo $obs1;?>
						</td>
					</tr>
					<tr>
						<td>
							Hora de Recolección:
						</td>
						<td colspan="3">
							<?php echo $hora_r; ?>:<?php echo $minuto_r; ?>
						</td>
					</tr>
					
					<tr>
						<td colspan="6" align="center" >
							<div style="height: 1px; background-color: rgba(244,124,47, .5); margin: .8em 0"></div>
						</td>
					</tr>
					
					<tr>
						<td align="left" colspan="4">
						
							<b>INFORMACIÓN DE ENTREGA:</b>
						
						</td>
						<td <td align="right">
							<button type="button" onclick="mostrarPuntoB()"><img src="editar.gif" alt="x" /></button>
						</td>
					</tr>
					<tr>
						<td bgcolor="#F7584C">
							Punto B
						</td>
						<td colspan="5">
							<?php 
					if ( $int2 != "")
						{ $intB = " Interior ".$int2;}
					echo $calle2." ".$calle_numero2." ".$intB." ".$colonia2." ".$estado2." C. P. ".$cp2;
					?>;
						</td>
					</tr>
					<tr>
						<td>
							Empresa:
						</td>
						<td colspan="3">
							<?php echo $nempresa2;?>
						</td>
					</tr>
					<tr>
						<td>
							Recibe:
						</td>
						<td colspan="3">
							<?php echo $nombre2;?>
						</td>
					</tr>
					<tr>
						<td>
							Email:
						</td>
						<td colspan="3">
							<?php echo $email2;?>
						</td>
					</tr>
					
					<tr>
						<td>
							Teléfono:
						</td>
						<td colspan="3">
							<?php echo $telefono2;?>
						</td>
					</tr>
					<tr>
						<td>
							Observaciones:
						</td>
						<td colspan="3">
							<?php echo $obs2;?>
						</td>
					</tr>
					<tr>
						<td>
							Hora de Entrega:
						</td>
						<td colspan="3">
							<?php echo $hora_e; ?>:<?php echo $minuto_e; ?>
						</td>
					</tr>
					<tr>
						<td colspan="6" align="center" >
							<div style="height: 1px; background-color: rgba(244,124,47, .5); margin: .8em 0"></div>
						</td>
					</tr>
					<tr>
						<td colspan = "4" align="center">
						<input 	type="submit" 
								value = "SOLICITAR SERVICIO" 
								id="boton1" 
								name="boton1" 
								>
						</td>
					</tr>
				</table>
			</div>
		</div>
		</form>
		<div id="map">
		</div>	
    <script>
	var origin1 = '<?php echo $calle." ".$calle_numero." ".$colonia." ".$delmipio." ".$estado." ".$pais." ".$cp; ?>';
	var destinationA = '<?php echo $calle2." ".$calle_numero2." ".$colonia2." ".$delmipio2." ".$estado2." ".$pais2." ".$cp2; ?>';
	
	function initMap() 
	{
		
		var geocoder = new google.maps.Geocoder;
		var service = new google.maps.DistanceMatrixService;
		service.getDistanceMatrix(
		{
			origins: [origin1],
			destinations: [destinationA],
			travelMode: google.maps.TravelMode.DRIVING,
			unitSystem: google.maps.UnitSystem.METRIC,
		}, 
		
		//FUNCION PRA MEDIR DISTANCIA ENTRE 2 PUNTOS
		function(response, status) 
		{
			if (status !== google.maps.DistanceMatrixStatus.OK) 
			{
				alert('Error was: ' + status);
			} 
			else 
			{
				var originList = response.originAddresses;
				var destinationList = response.destinationAddresses;
				//var outputDiv = document.getElementById('output');
				//outputDiv.innerHTML = '';
				
				for (var i = 0; i < originList.length; i++) 
				{
					var results = response.rows[i].elements;
					geocoder.geocode({'address': originList[i]});
					
					for (var j = 0; j < results.length; j++) 
					{
						geocoder.geocode({'address': destinationList[j]});
						//outputDiv.innerHTML += results[j].distance.text + '<br>';
						document.getElementById('km').value = results[j].distance.text
					}
				}
			}
		});
		//*********************************************************
		
		//TRAZAR MAPA	
		var directionsService = new google.maps.DirectionsService;
		var directionsDisplay = new google.maps.DirectionsRenderer;
		
		var map = new google.maps.Map(document.getElementById('map'), 
		{
			zoom: 7,
			center: {lat: 19.426249, lng: -99.175403}, 
		});
		directionsDisplay.setMap(map);
		calculateAndDisplayRoute(directionsService, directionsDisplay);
		//alert (origin1 +" -- "+destinationA)
		
		//**************************************************************************
		
	}
	
	function calculateAndDisplayRoute(directionsService, directionsDisplay) 
	{
		directionsService.route(
			{
				origin: origin1,
				destination: destinationA,
				travelMode: google.maps.TravelMode.DRIVING
			}, 
			function(response, status) 
			{
				if (status === google.maps.DirectionsStatus.OK) 
				{
					directionsDisplay.setDirections(response);
				} 
				else 
				{
					window.alert('Directions request failed due to ' + status);
				}
			}
		);
	}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdBmWCJa6T6a-gfwjzaeol90fI2Ctl4zA&signed_in=true&callback=initMap"
        async defer></script>
	<script>
	function calculaPrecios()
	{
		//CALCULO DE PRECIOS
		//CONVERTIR EN MEDIDA CALCULABLE
		//alert(document.getElementById('km').value);
		var variable = document.getElementById('km').value;
		//alert(variable.length);
		var posicion = variable.lastIndexOf(' km');
		//alert(posicion);
		
		var porcion = variable.substring(0, posicion);
		//alert(porcion);
		//alert(porcion.length);
		if (porcion.length < 5)
		{
			var medida = porcion.replace(',', '.');
			//alert(medida);
		}
		else
		{
			var medida = porcion.replace('.', '');
		}
		
		var peso = document.getElementById('peso').value;
		//alert(peso);
		var costo = 0;
		
		if (medida >= .1 && medida <= 59.99) 
		{
			//alert (medida)
			//alert (peso)
			if (peso == "0 a 5 Kgs.")
			{
				costo = medida * 12;
				
			}
			
			if (peso == "5.1 a 10 Kgs.")
			{
				costo = medida * 12;
			}
			
			if (peso == "10.1 a 15 Kgs.")
			{
				costo = medida * 13;
			}
			
			if (peso == "15.1 a 20 Kgs.")
			{
				costo = medida * 15;
			}
			
			if (peso > 20.1)
			{
				costo = "NO APLICA";
			}
			
			if (costo < 65)
			{
				costo = 65;
			}
			
			cosotok = costo.toFixed(2)
			costo = cosotok 
		}
		/*
		if (medida >= 6 && medida <= 10.99) 
		{
			if (peso == "0 a 3 Kgs.")
			{
				costo = 168;
			}
			
			if (peso == "3.1 a 8 Kgs.")
			{
				costo = 191;
			}
			
			if (peso == "8.1 a 13 Kgs.")
			{
				costo = 214;
			}
			
			if (peso == "13.1 a 18 Kgs.")
			{
				costo = 238;
			}
			
			if (peso > 18)
			{
				costo = "NO APLICA";
			}
		}
		
		if (medida >= 11 && medida <= 20.99) 
		{
			if (peso == "0 a 3 Kgs.")
			{
				costo = 224;
			}
			
			if (peso == "3.1 a 8 Kgs.")
			{
				costo = 255;
			}
			
			if (peso == "8.1 a 13 Kgs.")
			{
				costo = 286;
			}
			
			if (peso == "13.1 a 18 Kgs.")
			{
				costo = 317;
			}
			
			if (peso > 18)
			{
				costo = "NO APLICA";
			}
		}
		
		if (medida >= 21 && medida <= 30.99) 
		{
			if (peso == "0 a 3 Kgs.")
			{
				costo = 273;
			}
			
			if (peso == "3.1 a 8 Kgs.")
			{
				costo = 311;
			}
			
			if (peso == "8.1 a 13 Kgs.")
			{
				costo = 348;
			}
			
			if (peso == "13.1 a 18 Kgs.")
			{
				costo = 386;
			}
			
			if (peso > 18)
			{
				costo = "NO APLICA";
			}
		}
		
		if (medida >= 31 && medida <= 40.99) 
		{
			if (peso == "0 a 3 Kgs.")
			{
				costo = 325;
			}
			
			if (peso == "3.1 a 8 Kgs.")
			{
				costo = 370;
			}
			
			if (peso == "8.1 a 13 Kgs.")
			{
				costo = 414;
			}
			
			if (peso == "13.1 a 18 Kgs.")
			{
				costo = 459;
			}
			
			if (peso > 18)
			{
				costo = "NO APLICA";
			}
		}
		
		if (medida >= 41 && medida <= 50.99) 
		{
			if (peso == "0 a 3 Kgs.")
			{
				costo = 487;
			}
			
			if (peso == "3.1 a 8 Kgs.")
			{
				costo = 554;
			}
			
			if (peso == "8.1 a 13 Kgs.")
			{
				costo = 622;
			}
			
			if (peso == "13.1 a 18 Kgs.")
			{
				costo = 689;
			}
			
			if (peso > 18)
			{
				costo = "NO APLICA";
			}
		}
		
		if (medida >= 51 && medida <= 60) 
		{
			if (peso == "0 a 3 Kgs.")
			{
				costo = 700;
			}
			
			if (peso == "3.1 a 8 Kgs.")
			{
				costo = 797;
			}
			
			if (peso == "8.1 a 13 Kgs.")
			{
				costo = 893;
			}
			
			if (peso == "13.1 a 18 Kgs.")
			{
				costo = 990;
			}
			
			if (peso > 18)
			{
				costo = "NO APLICA";
			}
		}
		*/
		if (medida > 60)
		{
			costo = "NO APLICA KM";
			alert("Fuera de la Zona de Cobertura, "+medida+" Kms. Para envíos foráneos favor de llamar al 5203-3933");
			document.getElementById('boton1').disabled = true;
			window.location = "http://www.papmensajeria.com";
		}
		
		//alert(costo);
		
		document.getElementById('km1').innerHTML = medida;
		document.getElementById('peso1').innerHTML = peso;
		document.form1.PRECIO_VENTA.value = costo;
		document.getElementById('costo1').innerHTML = "$"+costo;
		
		
		
		
		//************************************************************************
	}
	
	</script>
	

<form action="03conf.php" method="post">

<input type="hidden" id="hora_e" 	name="hora_e"	value="<?php echo $hora_e; ?>">
<input type="hidden" id="minuto_e" 	name="minuto_e"	value="<?php echo $minuto_e; ?>">
<input type="hidden" id="hora_r" 	name="hora_r"	value="<?php echo $hora_r; ?>">
<input type="hidden" id="minuto_r" 	name="minuto_r"	value="<?php echo $minuto_r; ?>">
	
	<div id="puntoA" style='display:none;'>
		<table bgcolor="#6FBA33">
			<tr>
				<td colspan="6">
					CORREGIR INFORMACIÓN DE RECOLECCIÓN
				</td>
			</tr>
			<tr>
				<td>
					Calle
				</td>
				<td>
					<input 	id="calle" 
							name="calle"
							value="<?php echo $calle ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Numero
				</td>
				<td>
					<input 	id="numero"
							name="numero"
							class="smallField"
							value="<?php echo $calle_numero ?>"
							maxlength="15"
							>
					</input>
				</td>
				<td>
					Interior
				</td>
				<td>
					<input 	id="interior1" 
							name="interior1"
							class="smallField"
							value="<?php echo $int1 ?>"
							maxlength="50"
							>
					</input>
				</td>
			</tr>
			
			<tr>
				<td>
					Colonia
				</td>
				<td>
					<input 	id="colonia" 
							name="colonia"
							value="<?php echo $colonia ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Del/Mpio
				</td>
				<td>
					<input 	id="delmpio" 
							name="delmpio"
							value="<?php echo $delmpio ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Estado
				</td>
				<td>
					<input 	id="estado" 
							name="estado"
							value="<?php echo $estado ?>"
							maxlength="50"
							>
					</input>
				</td>
			</tr>
			
			<tr>
				<td>
					C. P.
				</td>
				<td>
					<input 	id="cp" 
							name="cp"
							class="smallField"
							value="<?php echo $cp ?>"
							maxlength="15"
							>
					</input>
				</td>
			</tr>
			
			<tr>
				<td>
					Empresa
				</td>
				<td>
					<input 	id="nempresa1" 
							name="nempresa1"
							value="<?php echo $nempresa1 ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Nombre
				</td>
				<td>
					<input 	id="nombre1" 
							name="nombre1"
							value="<?php echo $nombre1 ?>"
							maxlength="50"
							>
					</input>
				</td>
			
				<td>
					Email
				</td>
				<td>
					<input 	id="email1" 
							name="email1"
							value="<?php echo $email1 ?>"
							maxlength="50"
							>
					</input>
				</td>
			</tr>
			
			<tr>
				<td>
					Telefono
				</td>
				<td>
					<input 	id="telefono1" 
							name="telefono1"
							value="<?php echo $telefono1 ?>"
							maxlength="15"
							>
					</input>
				</td>
			
				<td>
					Observaciones
				</td>
				<td>
					<input 	id="obs1" 
							name="obs1"
							value="<?php echo $obs1 ?>"
							maxlength="50"
							>
					</input>
				</td>
</tr>
<tr>				
	
<td>
					Fecha de Recolección
				</td>
				<td>
					<input 	id="f_recolectar" 
							name="f_recolectar"
							value="<?php if ($f_recolectar == ""){echo date('Y-m-d');}else{echo $f_recolectar;} ?>"
							maxlength="10"
							>
					</input>
				</td>
				
				<td>
				Hora de Recolección
				</td>
				<td>
					<select name="hora_r" id="hora_r">
					
					<option value="<?php echo $hora_r; ?>"><?php echo $hora_r; ?></option>
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
			<select name="minuto_r" id="minuto_r">
			
			<option value="<?php echo $minuto_r; ?>"><?php echo $minuto_r; ?></option>
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

	<td>
					<input type="submit" value="CONFIRMAR CORRECIONES">
					<input type="hidden" name="peso" id="peso" value="<?php echo $peso;?>">
	
	
				</td>
			</tr>
		</table>

	</div>
	
	<div id="puntoB" style='display:none;'>
		<table bgcolor="#F7584C">
		<tr>
				<td colspan="6">
					CORREGIR INFORMACIÓN DE ENTREGA
				</td>
			</tr>
			<tr>
				<td>
					Calle
				</td>
				<td>
					
					<input 	id="route" 
							name="route"
							value="<?php echo $calle2 ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Numero
				</td>
				<td>
					<input 	id="street_number" 
							name="street_number"
							value="<?php echo $calle_numero2 ?>"
							maxlength="15"
							>
					</input>
				</td>
				<td>
					Interior
				</td>
				<td>
					<input 	id="interior" 
							name="interior"
							value="<?php echo $int2 ?>"
							maxlength="50"
							>
					</input>
				</td>
			</tr>
			
			<tr>
				<td>
					Colonia
				</td>
				<td>
					
					<input 	id="sublocality_level_1" 
							name="sublocality_level_1"
							value="<?php echo $colonia2 ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Del/Mpio
				</td>
				<td>
					<input 	id="administrative_area_level_3" 
							name="administrative_area_level_3"
							value="<?php echo $delmpio2 ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Estado
				</td>
				<td>
					<input 	id="administrative_area_level_1" 
							name="administrative_area_level_1"
							value="<?php echo $estado2 ?>"
							maxlength="50"
							>
					</input>
				</td>
			</tr>
			
			<tr>
				<td>
					C. P.
				</td>
				<td>
					<input 	id="postal_code" 
							name="postal_code"
							value="<?php echo $cp2 ?>"
							maxlength="15"
							>
					</input>
				</td>
			</tr>
			
			<tr>
				<td>
					Nombre
				</td>
				<td>
					
					<input 	id="nombre2" 
							name="nombre2"
							value="<?php echo $nombre2 ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Empresa
				</td>
				<td>
					<input 	id="nempresa2" 
							name="nempresa2"
							value="<?php echo $nempresa2 ?>"
							maxlength="50"
							>
					</input>
				</td>
				<td>
					Email
				</td>
				<td>
					<input 	id="email2" 
						name="email2"
						value="<?php echo $email2 ?>"
						maxlength="50"
						>
					</input>
				</td>
			</tr>
			
			<tr>
				<td>
					Telefono
				</td>
				<td>
					<input 	id="telefono2" 
							name="telefono2"
							value="<?php echo $telefono2 ?>"
							maxlength="15"
							>
					</input>
				</td>
				<td>
					Observaciones
				</td>
				<td>
					<input 	id="obs2" 
							name="obs2"
							value="<?php echo $obs2 ?>"
							maxlength="50"
							>
					</input>
				</td>
</tr>
				<tr>				
	
<td>
					Fecha de Entrega
				</td>
				<td>
					<input 	id="f_entrega" 
							name="f_entrega"
							value="<?php if ($f_entrega == ""){echo date('Y-m-d');}else{echo $f_entrega;} ?>"
							maxlength="10"
							>
					</input>
				</td>
				
				<td>
				Hora de Entrega
				</td>
				
				
				<td>
					<select name="hora_e">
					
					<option value="<?php echo $hora_e; ?>"><?php echo $hora_e; ?></option>
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
			
			<option value="<?php echo $minuto_e; ?>"><?php echo $minuto_e; ?></option>
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
				<td>
					<input type="submit" value="CONFIRMAR CORRECIONES">
					<input type="hidden" name="peso" id="peso" value="<?php echo $peso;?>">
	
	
	
				</td>
			</tr>
			
		</table>
</form>



	</div>
	
  </body>
</html>
