<?php

require_once('../PAP2/Connections/mcw_service.php');
require_once('../PAP2/Connections/mcw_rh.php');
require_once('../PAP2/Connections/mcw_client.php');
require_once('../PAP2/Connections/mcw_rh.php');
require_once('../PAP2/Connections/mcw_admin.php');
require_once('../PAP2/mcw_plugs/mail/mailer.php');
require_once('../PAP2/valida_email.php');

$calle 			= utf8_decode($_POST['calle']);
$calle_numero 	= utf8_decode($_POST['numero']);
$int1 			= utf8_decode($_POST['interior1']);
$colonia 		= utf8_decode($_POST['colonia']);
$delmipio 		= utf8_decode($_POST['delmipio']);
$estado 		= utf8_decode($_POST['estado']);
$cp 			= utf8_decode($_POST['cp']);
$nombre1 		= utf8_decode($_POST['nombre1']);
$nempresa1 		= utf8_decode($_POST['nempresa1']);
$email1 		= utf8_decode($_POST['email1']);
$telefono1 		= utf8_decode($_POST['telefono1']);
$obs1 			= utf8_decode($_POST['obs1']);

$calle_numero2 	= utf8_decode($_POST['numero2']);
$calle2 		= utf8_decode($_POST['calle2']);
$colonia2 		= utf8_decode($_POST['colonia2']);
$delmipio2 		= utf8_decode($_POST['delmipio2']);
$estado2 		= utf8_decode($_POST['estado2']);
$cp2 			= utf8_decode($_POST['cp2']);
$int2 			= utf8_decode($_POST['interior2']);
$obs2 			= utf8_decode($_POST['obs2']);
$nombre2 		= utf8_decode($_POST['nombre2']);
$nempresa2 		= utf8_decode($_POST['nempresa2']);
$email2			= utf8_decode($_POST['email2']);
$telefono2 		= utf8_decode($_POST['telefono2']);

$km				= utf8_decode($_POST['km']);
$peso			= utf8_decode($_POST['peso']);
$cliente_id		= utf8_decode($_POST['cliente_id']);
$os				= utf8_decode($_POST['os']);
$PRECIO_VENTA	= utf8_decode($_POST['PRECIO_VENTA']);
$ar				= utf8_decode($_POST['ar']);
$tipo			= utf8_decode($_POST['tipo']);
$token			= utf8_decode($_POST['token']);

$hora_r 		= $_POST['hora_r'];
$minuto_r 		= $_POST['minuto_r'];
$hora_e 		= $_POST['hora_e'];
$minuto_e 		= $_POST['minuto_e'];

$f_recolectar	= $_POST['f_recolectar'];
$f_entrega		= $_POST['f_entrega'];

echo'<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	</head>
	<body>
	<img src="http://papmensajeria.mx/PAP2/mcw_img/pap.jpg" width=15% height=10% />
	';

if (!function_exists("GetSQLValueString")) 
{
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
	{
	  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

	  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

	  switch ($theType) 
	  {
		case "text":
		  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		  break;    
		case "long":
		case "int":
		  $theValue = ($theValue != "") ? intval($theValue) : "NULL";
		  break;
		case "double":
		  $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
		  break;
		case "date":
		  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		  break;
		case "defined":
		  $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
		  break;
	  }
	  return $theValue;
	}
}
//seguridad al momento de hacer backhistory, analizar ip y hora, si estan no permitir ingreso de guia
/*
mysql_select_db($database_mcw_admin, $mcw_admin);
		
		$sql1 = "SELECT id FROM track_estatus WHERE fecha = '".date('Y-m-d')."' and ip_acceso = '".$_SERVER['REMOTE_ADDR']."'";
		$result1 = mysql_query($sql1, $mcw_admin) or die(mysql_error()."-2");
		$row1 = mysql_fetch_assoc($result1);
		echo "<br>".$row1['id']."**";
		if ($row1['id'])
		{
			echo '<script type="text/javascript">
			alert ("Tenemos ya una guia registrada con su ip el dia de hoy, si requiere un nuevo servicio o alguna correccion a su informacion, favor de contactarnos al 5203 3933, Gracias!!");
			window.open(\'http://www.papmensajeria.com\',\'_parent\');
			</script>
			';	
			exit;
		}
*/		
//hacer un do while para que si hay eror no reacer entradas de nuevo un solo codigo

$error = 1;
$contador = 1;

if ($f_recolectar == "")
{
	$f_recolectar = date('Y-m-d');
}

if ($f_entrega == "")
{
	$f_entrega = date('Y-m-d');
}



do{
	$insertSQL = sprintf("
	INSERT INTO estatus
			(calle, exterior, interior, colonia, plaza, estado, cp, atnenvio, comercio, email, telefono,
			
			 domicilio,
			 
			 calle2, exterior2, interior2, colonia2, plaza2, estado2, cp2, atncom, comercio2, email2, telefono2,
			 
			 domicilio2,
			 
			 PESO, CLIENTE, os, PRECIO_VENTA, ar, tipo, token,
			 
			 COMENTARIO, COMENTARIOS, historial,
			 
			 tecnico,
			 
			 fecha, hora, estatus, operadora, T_PENDIENTE, PLAZA_SEDE, T_COMERCIO, PROVEEDOR, FE_UPLOAD, COORD_1,
			 
			 COORD_2, EMPRESA, origen, destino, NUM_PZA, ubicacion, PRECIO_GUIA, HR_UPLOAD, CORREO_CONSIGNATARIO, DESCRIPCION_A_TRANSPORTAR, 
			 
			 FECHA_RECOLECCION, FECHA_ENTREGA, hora_recoleccion, hora_entrega
			)
			VALUES
			(%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, 
			 %s, 
			 %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, 
			 %s, 
			 %s, %s, %s, %s, %s, %s, %s, 
			 %s, %s, %s, 
			 %s, 
			 %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,
			 %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,
			 %s, %s, %s, %s)",
			
			GetSQLValueString($calle, "text"),
			GetSQLValueString($calle_numero, "text"),
			GetSQLValueString($int1, "text"),
			GetSQLValueString($colonia, "text"),
			GetSQLValueString($delmipio, "text"),
			GetSQLValueString($estado, "text"),
			GetSQLValueString($cp, "text"),
			GetSQLValueString($nombre1, "text"),
			GetSQLValueString($nempresa1, "text"),
			GetSQLValueString($email1, "text"),
			GetSQLValueString($telefono1, "text"),
			
			GetSQLValueString($calle." ".$calle_numero." ".$int1, "text"),
			
			GetSQLValueString($calle2, "text"),
			GetSQLValueString($calle_numero2, "text"),
			GetSQLValueString($int2, "text"),
			GetSQLValueString($colonia2, "text"),
			GetSQLValueString($delmipio2, "text"),
			GetSQLValueString($estado2, "text"),
			GetSQLValueString($cp2, "text"),
			GetSQLValueString($nombre2, "text"),
			GetSQLValueString($nempresa2, "text"),
			GetSQLValueString($email2, "text"),
			GetSQLValueString($telefono2, "text"),
			
			GetSQLValueString($calle2." ".$calle_numero2." ".$int2, "text"),
			
			GetSQLValueString($peso, "text"),
			GetSQLValueString($cliente_id, "text"),
			GetSQLValueString($os, "text"),
			GetSQLValueString($PRECIO_VENTA, "text"),
			GetSQLValueString($ar, "text"),
			GetSQLValueString($tipo, "text"),
			GetSQLValueString($token, "text"),
			
			GetSQLValueString($obs1, "text"),
			GetSQLValueString($obs2, "text"),
			GetSQLValueString("Cliente Web:".$obs1.", En entrega: ".$obs2."; Kilometros Aproximados: ".$km, "text"),
			
			GetSQLValueString("--", "text"),
			
			GetSQLValueString(date('Y-m-d'), "text"),
			GetSQLValueString(date('G:i:s'), "text"),
			GetSQLValueString("POR CONFIRMAR", "text"),
			GetSQLValueString("PAP", "text"),
			GetSQLValueString("POR CONFIRMAR", "text"),
			GetSQLValueString("CDMX", "text"),
			GetSQLValueString("LOCAL", "text"),
			GetSQLValueString("PAP", "text"),
			GetSQLValueString(date('Y-m-d'), "text"),
			GetSQLValueString("--", "text"),
			 
			GetSQLValueString("--", "text"),
			GetSQLValueString("PAP2", "text"),
			GetSQLValueString("CDMX", "text"),
			GetSQLValueString("CDMX", "text"),
			GetSQLValueString(1, "int"),
			GetSQLValueString("CDMX", "text"),
			GetSQLValueString($PRECIO_VENTA, "text"),
			GetSQLValueString(date('G:i:s'), "text"),
			GetSQLValueString($email1, "text"),
			GetSQLValueString($obs1, "text"),
			 
			GetSQLValueString($f_recolectar, "text"),
			GetSQLValueString($f_entrega, "text"),
			GetSQLValueString($hora_r.":".$minuto_r, "text"),
			GetSQLValueString($hora_e.":".$minuto_e, "text"));
	
	mysql_select_db($database_mcw_service, $mcw_service);
	$Result1 = mysql_query($insertSQL, $mcw_service);
	if (mysql_error())
	{
		
		$falla = mysql_error();
		//echo "PROCESANDO GUIA <br>";
		// ESTAS FALLAS HAY QUE HACER UN ANALISIS DE EXITENCIA, ES DECIR, VALIDAR QUE LA IP YA HAYA GUARDADO UNA GUIA EN ESTE MOMENTO
		// SI REGRESA HASTA EL PASO 2 EN EL PASO 3 YA SERA UNA NUEVA GUIA
		
		if (strstr($falla, "for key 'token'")) {
		//echo "TOKEN <br>";
		$token = date('Ymd-Gis')."_".rand()*11;
		//echo $token."<br>";
		$error = 1;
		//echo $falla;
		} 
		elseif (strstr($falla, "for key 'os'")) {
		//echo "GUIA <br>";
		$error = 1;
		//echo "POR FAVOR DE CLIC EN EL BOTON REGRESAR DE SU NAVEGADOR Y NUEVAMENTE DE CLIC EN EL BOTON \"SOLICITAR SERVICIO\" NO TENDRA QUE CAPTURAR SUS DATOS NUEVAMENTE, GRACIAS";
		//exit;
		$os++;
		}
		//BUSCAR EL CP EN LA BASE Y TRAER EL PRIMER RESULTADO PARA INSERTARLO
		elseif (strstr($falla, "Column 'plaza' cannot be null")) {
			
		//echo "FALTA DEL/MPIO <br>";
		$error = 1;
		//echo $falla;
		
		mysql_select_db($database_mcw_rh, $mcw_rh);
		
		$sql = "SELECT D_mnpio FROM cp WHERE d_CP =".$cp;
		$result = mysql_query($sql, $mcw_rh);
		$row = mysql_fetch_assoc($result);
		$delmipio = $row['D_mnpio'];
		//echo "DELMPIO CORRESPONDIENTE ".$delmpio." ** <br>";
		
		if($delmipio2 == "")
		{
			
		}
			$sql2 = "SELECT D_mnpio FROM cp WHERE d_CP =".$cp2;
			$result2 = mysql_query($sql2, $mcw_rh);
			$row2 = mysql_fetch_assoc($result2);
			$delmipio2 = $row2['D_mnpio'];
			//echo "DELMPIO CORRESPONDIENTE 2".$delmpio2." ** <br>";
		} 
		
		$contador++;
		//echo $falla;
		
		/*echo '<script type="text/javascript">
   		window.open(\'http://www.papmensajeria.mx/PAP2/GMAPS3/\',\'_parent\');
   		</script>
   		';*/	
		if ($contador > 5)
		{
			exit;
		}
		
	}
	else
	{
		$error = 0;
		//data track estatus
		mysql_select_db($database_mcw_admin, $mcw_admin);
		$sql_ = sprintf("INSERT INTO track_estatus (usuario, fecha, hora, data, ip_acceso) VALUES (%s, %s, %s, %s, %s)",
						   GetSQLValueString($_SERVER['REMOTE_USER'], "text"),
						   GetSQLValueString(date('Y-m-d'), "date"),
						   GetSQLValueString(date('G:i:s'), "text"),
						   GetSQLValueString($insertSQL, "text"),
						   GetSQLValueString($_SERVER['REMOTE_ADDR'], "text")
		);
		$Rsql_ = mysql_query($sql_, $mcw_admin) or die(mysql_error()."-1");
		
		$correo = new envia_mail;
		$Mensaje = "";
		
		if ( $int1 != "")
		{ $intA = " Interior ".$int1;}
	
		if ( $int2 != "")
		{ $intB = " Interior ".$int2;}
		
		$Mensaje .= '
			<!DOCTYPE html>
			<html>
				<head>
					<title>Pide tu PAP</title>
				<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
				<style>
					body { font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;}
				</style>
				</head>
				
				<body>
					<img src="http://papmensajeria.mx/PAP2/mcw_img/pap.jpg" width=15% height=10% />
					<div>
							<div>
								¡Listo! Te confirmamos que tu solicitud fue registrada exitosamente.<br><br>
								En un momento recibirás un link para que puedas hacer el pago. Una vez hecho el pago asignaremos un mensajero para realizar tu envío.<br><br>
							</div>
							<div>
								<table id="address" border="0">
				<tr>
				<td colspan="6" align="center"><b>INFORMACIÓN DE TU ENVÍO</b></td>
				</tr>
					<tr>
							<td><b># de Guia Asignada</b></td>
							<td name="guia" id="guia">'.$os.'</td>
							<td><b>Peso</b></td>
							<td name="peso1" id="peso1">'.$peso.'</td>
							<td><b>Kilómetros</b></td>
							<td name="km1" id="km1">'.$km.'</td>
							<td><b>Costo</b></td>
							<td name="costo1" id="costo1">'.$PRECIO_VENTA.'</td>
					</tr>
					
					<tr>
						<td colspan="6" bgcolor="#F57D31" align="center"></td>
						</td>
					</tr>
					
					<tr>
						<td align="left" colspan="4">
						<b>
							INFORMACIÓN DE RECOLECCIÓN:
						</b>
					</tr>
					<tr>
						<td bgcolor="#6FBA33">
							<b>Punto A</b>
						</td>
						<td colspan="5">'.$calle.' '.$calle_numero.' '.$intA.' '.$colonia.' '.$estado.' C. P. '.$cp.'
						</td>
						
					</tr>
					<tr>
						<td>
							<b>Empresa:</b>
						</td>
						<td colspan="3">'.$nempresa1.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Envía:</b>
						</td>
						<td colspan="3">'.$nombre1.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td>
						<td colspan="3">'.$email1.'
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Teléfono:</b>
						</td>
						<td colspan="3">'.$telefono1.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Observaciones:</b>
						</td>
						<td colspan="3">'.$obs1.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Hora de Recolección:</b>
						</td>
						<td colspan="3">'.$hora_r.':'.$minuto_r.'
						</td>
					</tr>
					
					<tr>
						<td colspan="6" bgcolor="#F57D31" align="center"></td>
					</tr>
					
					<tr>
						<td align="left" colspan="4">
						<b>
							INFORMACIÓN DE ENTREGA:
						</b>
						</td>
					</tr>
					<tr>
						<td bgcolor="#F7584C">
							<b>Punto B</b>
						</td>
						<td colspan="5">'.$calle2.' '.$calle_numero2.' '.$intB.' '.$colonia2.' '. $estado2.' C. P. '.$cp2.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Empresa:</b>
						</td>
						<td colspan="3">'.$nempresa2.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Recibe:</b>
						</td>
						<td colspan="3">'.$nombre2.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td>
						<td colspan="3">'.$email2.'
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Teléfono:</b>
						</td>
						<td colspan="3">'.$telefono2.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Observaciones:</b>
						</td>
						<td colspan="3">'.$obs2.'
						</td>
					</tr>
					<tr>
						<td>
							<b>Hora de Entrega:</b>
						</td>
						<td colspan="3">'.$hora_e.':'.$minuto_e.'
						</td>
					</tr>
					<tr>
						<td colspan="6" bgcolor="#F57D31" align="center"></td>
					</tr>
				</table>
							</div>
					</div>
				
		';
		
		$correo->direccion1 = "confirmacionesx@papmensajeria.com";
		
		if(filter_var($email1, FILTER_VALIDATE_EMAIL))
		{
			$correo->direccion2 = $email1;
		}
		
		if(filter_var($email2, FILTER_VALIDATE_EMAIL))
		{
			$correo->direccion3 = $email2;
		}
		$correo->titulo = "SOLICITUD DE SERVICIO - WEB";
		$correo->cuerpo = $Mensaje;
		$correo->envia_reporte();

	   //*************************************************
			
			//echo "GUIA INGRESADA EN SISTEMA CORRECTAMENTE";
			echo '<script type="text/javascript">
			alert ("Tu servicio ha sido registrado exitosamente. En un momento nos pondremos en contacto contigo. \n Gracias por confiar en Punto a Punto");
			window.open(\'http://www.puntoapunto.mx\',\'_parent\');
			</script>
			';	
	}
echo '</body>
</html>';
}
while ($error == 1);

	
	


?>

