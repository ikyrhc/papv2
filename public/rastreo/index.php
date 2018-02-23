<?php
//require_once('Connections/mcw_service.php');
//require_once('Connections/mcw_client.php'); 
$EMP = "PAP2";

$cont = 0;
$cont2 = 0;
$Piezas = 0;
$Peso = 0;

if (!function_exists("GetSQLValueString")) 
{
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
	{
	  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
	
	  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
	
	  switch ($theType) {
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



if (isset($_POST['CARGA']) && ($_POST['CARGA'] == 1) && isset($_POST['ocultar']) && ($_POST['ocultar'] == 0)) 
{
	$MAN1 = $_GET['tckt'];
	$EMP1  = $_GET['emp'];
	$ORIGEN1 = $_GET['origen'];
	//echo $ORIGEN1."<br>";
	// get rid of whitespace...also, since not all OS use \r
	// but everyone has \n in it, let's get rid of the \r
	$text = str_replace("\r", '', trim($_POST['GUIAS']));
	// now that you have your raw text
	// we need an array to store the data
	$data = array();
	// split line by line
	$lines = explode("\n", $text);  
	foreach ($lines as $l ) 
	{
		$data[$cont]=$l;
		//echo $data[$cont];
		mysql_select_db($database_mcw_service, $mcw_service);
		//var/www/PAP/rastreo.php  
		//echo $_POST['aliado'];
		if ($_POST['aliado'] == "--")
		{
			$query_Recordset1 = "SELECT * FROM estatus WHERE os = '".$data[$cont]."' AND EMPRESA = '".$EMP."'";
		}
		else
		{
			$query_Recordset1 = "SELECT * FROM estatus WHERE os = '".$data[$cont]."' AND CLIENTE = '".$_POST['aliado']."' AND EMPRESA = '".$EMP."'";
		}
		//echo $query_Recordset1;
		$Recordset1 = mysql_query($query_Recordset1, $mcw_service) or die(mysql_error());
		$totalRows = mysql_num_rows($Recordset1);
		//echo $totalRows;
		if($totalRows == 0)
		{ echo "referencia no encontrada";}
		//$row_Recordset1 = mysql_fetch_assoc($Recordset1);

		while ($row_Recordset1 = mysql_fetch_assoc($Recordset1))
		{
			//echo "entra";
			//$totalRows = mysql_num_rows($Recordset1);
	 		//echo $totalRows;
	 		if ($totalRows!="")
	 		{
				//windows
				//$Directorio = "C:\wamp\www\\".$EMP."\mcw_document\general\clientes\\";
				//linux
				$Directorio = "/var/www/html/".$EMP."/mcw_document/general/clientes/";
				//$Directorio = "C:\\WEBSVR\\01DATA\\W3\\kds\\".$EMP."\\k_document\\general\\";
				$Ticket = $row_Recordset1['os'];
				//echo $Directorio.$Ticket;
				if (is_dir($Directorio.$Ticket)) 
				{
					$ruta = '<a href="ver_archivos.php?guia='.$row_Recordset1['os'].'&emp=PAP2" class="Estilo16">Ver Archivos</a>';
				}
				else
				{
					$ruta = "No";
				}
				mysql_select_db($database_mcw_client, $mcw_client);
				$q_Consignatario = "SELECT * FROM sub_clientes WHERE afiliacion = '".$row_Recordset1['ar2']."'";
				$RSConsignatario = mysql_query($q_Consignatario, $mcw_client) or die(mysql_error());
				//while ($R_RSConsignatario = mysql_fetch_assoc($RSConsignatario))
			  	//{
				  if ($row_Recordset1['estatus'] == "DEVUELTO")
				  {$devolucion_comentario = " -- Motivo de devolucion: ".$row_Recordset1['T_PENDIENTE'];}
				  else
				  {$devolucion_comentario = "!";}
			  	$Tabla = '
					<tr class="modo2">
					<td align="center" valign="middle" class="modo2" width="100">
					<a href="rastreo_d.php?recordID='.$row_Recordset1['id'].'&emp=PAP2" class="Estilo16"> '.$row_Recordset1['os'].' </a>
					</td>

					<td align="center" valign="middle" class="modo2" width="100">
					'.$row_Recordset1['estatus'].'
					</td>

					<td align="center" valign="middle" class="modo2" width="100">
					'.$row_Recordset1['FE_UPLOAD'].'
					</td>

					<td align="center" valign="middle" class="modo2" width="100">
					'.$row_Recordset1['domicilio'].', '.$row_Recordset1['colonia'].'
					</td>

					<td align="center" valign="middle" class="modo2" width="100">
					'.$row_Recordset1['domicilio2'].', '.$row_Recordset1['colonia2'].'
					</td>

					<td align="center" valign="middle" class="modo2" width="100">
					'.$row_Recordset1['TERMINO'].'
					</td>

					<td align="center" valign="middle" class="modo2" width="100">
					'.$row_Recordset1['hora_cierre'].'
					</td>

					<td align="center" valign="middle" class="modo2" width="100">
					'.$row_Recordset1['PESO'].'
					</td>

					<td align="center" valign="middle" class="modo2" width="100">
					'.$ruta.'
					</td>


					<!-- <td bgcolor="#FFE4B5" align="center" valign="middle">
					<textarea name="observaciones'.$cont.'" cols="65" rows="8" id="observaciones'.$cont.'">
					-- Ubicación Actual '.$row_Recordset1['ubicacion'].' -- Confirmación: '.$row_Recordset1['COMENTARIO'].', Fecha de Confirmación: '.$row_Recordset1['TERMINO'].' -- Persona Contactada: '.$row_Recordset1['atncom'].' -- Hora de entrega: '.$row_Recordset1['hora_entrega'].$devolucion_comentario.' 
					</textarea>
					</td> -->
					</tr>';
					$tablaOut .= $Tabla;
				}
		  		else
		  		{
		   			$Tabla = '
					<tr>
					<td bgcolor="#FFE4B5"><input type="text" name="guia'.$cont.'"  	id="guia"  		value="'.$data[$cont].'" readonly="readonly" size="10" /></td>
					<td bgcolor="#FFE4B5"><input type="text" name="origen'.$cont.'" id="origen'.$cont.'" 	value="GUIA NO ENCONTRADA" readonly="readonly" size="5" /></td>
					<td bgcolor="#FFE4B5"><input type="text" name="estatus'.$cont.'" id="estatus'.$cont.'" 	value="GUIA NO ENCONTRADA" readonly="readonly" size="5" /></td>
					<td bgcolor="#FFE4B5"><input type="text" name="fechad'.$cont.'" id="fechad'.$cont.'" 	value="GUIA NO ENCONTRADA" readonly="readonly" size="5" /></td>
					<td bgcolor="#FFE4B5"><input type="text" name="destino'.$cont.'"id="destino'.$cont.'"    value="" readonly="readonly" size="5" readonly="readonly"/></td>
					<td bgcolor="#FFE4B5"><input type="text" name="termino'.$cont.'"id="termino'.$cont.'"    value="" readonly="readonly" size="5" readonly="readonly"/></td>
					<td bgcolor="#FFE4B5"><input type="text" name="piezas'.$cont.'" id="piezas'.$cont.'"  	value="" size="5" readonly="readonly"/></td>
					<td bgcolor="#FFE4B5"><input type="text" name="peso'.$cont.'"   id="peso'.$cont.'"    	value="" size="5" readonly="readonly"/></td>
					<td bgcolor="#FFE4B5"><input type="text" name="guia'.$cont.'"   id="guia'.$cont.'"    	value="'.$ruta.'" size="5" readonly="readonly"/></td>
					<td bgcolor="#FFE4B5"><textarea name="observaciones'.$cont.'" cols="50" rows="5" id="observaciones'.$cont.'">EL NUMERO DE GUIA QUE USTED INDICO NO EXISTE EN EL SISTEMA</textarea></td>
					</tr>';
					$tablaOut .= $Tabla;
				}
		  		$cont++;
			}
		}
	}
/*
$Cns1 = "SELECT * FROM clientes WHERE admin_guias_propias = 1 ORDER BY razon_social";
mysql_select_db($database_mcw_client, $mcw_client);
$RS1 = mysql_query($Cns1, $mcw_client) or die("Error en BD: ".mysql_error());
$Cols1 = mysql_fetch_assoc($RS1);
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<title>Pages</title>
	
<!--	<link href="http://www.papmensajeria.com/favicon.ico" type="image/x-icon" rel="icon" /><link href="http://www.papmensajeria.com/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	-     
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/text.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/1024.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/layout_default.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/nav_default.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/colorbox.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/button.css" />
<style type="text/css">	
	/*Estilos de enlaces para el menu*/

#grid_16 a:link{

color: #DF7401;

background: #DF7401;


}

#grid_16 a:visited{

color: #DF7401;

}

#grid_16 a:hover{

color: #DF7401;

background: #DF7401;

}

#grid_16 a:active{

color: #DF7401;

}


</style>
<style type="text/css">
.tabla {
font-family: Calibri, “Trebuchet MS”, Arial;
font-size:14px;
border: 0px solid #f5990e;
width: 1000px;
}

.tabla th {
padding: 5px;
font-size: 12px;
/* background-color: #f47c2e; */
background-image: url(mcw_img/fondo_tabla3.png);
background-repeat: repeat-x;
color: #000000;
font-family: Calibri, “Trebuchet MS”, Arial;
text-align: center;
text-transform: uppercase;

}

.modo2{
padding: 5px;
font-size: 12px;
/* background-color: #f47c2e; */
background-image: url(mcw_img/fondo_tabla2.png);
background-repeat: repeat-x;
color: #000000;
font-family: Calibri, “Trebuchet MS”, Arial;
text-align: center;
text-transform: uppercase;

}

</style>
--->	
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="/css/ie6.css" /><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="/css/ie.css" /><![endif]-->
<!--	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery-ui.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery-fluid16.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.sticky_top.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.colorbox-min.js"></script> -->
<!-- <script type="text/javascript" src="http://www.papmensajeria.com/js/datetimepicker/datetimepicker_css.js"></script> -->
<!--	<script type="text/javascript" src="http://www.papmensajeria.com/js/solicita.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.validate.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.validate.translation.js"></script> -->
	<script type="text/javascript">
//<![CDATA[

$(document).ready(function(){
	
	$('#serviceform').validate();
	
});


//]]>
</script>	
	<script type="text/javascript">
	// <![CDATA[
	
	var refresh_parent = false;
	
	function getURLParameter(name) {
	    return decodeURI(
	        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
	    );
	}
	
	$(document).ready(function(){
		
		var m = getURLParameter('m');
		if (m == 1){
			$.colorbox({inline:true, width:"25%", href:"#inline_gracias", "close":"Cerrar"});
		}
		
		$('#stickytop').sticky_top();
		$('#stickytop .nav.main').localScroll({duration:800});
		$('.btnpopup').colorbox({iframe:"true", width:"900px", height:"600px", title:""});
		/*
		$('.btnpopupsmall').colorbox({iframe:"true", width:"300px", height:"450px", title:"",
			onClosed:function(){
				if (refresh_parent){
					location.reload();
				}
			}
		});
		*/
	});
	
	// ]]>
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47671611-1', 'papmensajeria.com');
  ga('send', 'pageview');

function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, with=508, height=365, top=85, left=140";
window.open(pagina,"",opciones);
}

</script>

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles3.css" />
</head>
<body>
	<!---     
	<a name="home"></a>
	<div id="header">
		<div class="container_16">
			<div class="grid_16">
				<h1><a href="http://www.papmensajeria.com/"><img src="http://www.papmensajeria.com/img/logo.png" alt="Punto A Punto" title="Punto A Punto" class="logo" /></a></h1>
				<a href="http://www.papmensajeria.com/"><img src="http://www.papmensajeria.com/img/tel.png" alt="Llamanos al 5203-3933" title="Llamanos al 5203-3933" class="tel" /></a>				<a href="/aviso.pdf" target="_blank" class="aviso-header">Aviso de Privacidad</a>			</div>
			<div class="clear"></div>
		</div>
		<div id="stickytop" class="menu">
			<div class="container_16">
				<div class="grid_16">
					<ul class="nav main">
	<li>
		<a href="http://www.papmensajeria.com/#home" alt="Inicio" title="Inicio">Home</a>	</li>
	<li>
		<a href="http://www.papmensajeria.com/#quienes" alt="¿Quiénes somos?" title="¿Quiénes somos?">¿Quiénes somos?</a>	</li>
	<li>
		<a href="http://www.papmensajeria.com/#beneficios" alt="Beneficios" title="Beneficios">Beneficios</a>	</li>
	<li>
		<a href="http://www.papmensajeria.com/distribucion" alt="Distribución" title="Distribución" class="btnpopup">Distribución</a>	</li>
	<li>
		<a href="http://www.papmensajeria.com/empresas" alt="Mensajería" title="Mensajería" class="btnpopup">Mensajería</a>	</li>
	<li>
		<a href="http://www.papmensajeria.com/restaurantes" alt="Restaurantes" title="Restaurantes" class="btnpopup">Restaurantes</a>	</li>
	<li>
		<a href="http://www.papmensajeria.com/personas" alt="Personas" title="Personas" class="btnpopup">Personas</a>	</li>
	<li>
		<a href="http://www.papmensajeria.com/cobertura" alt="Cobertura" title="Cobertura">Cobertura</a>	</li>
	<li>
		<a href="http://www.papmensajeria.com/solicita" alt="Solicita un servicio" title="Solicita un servicio">Solicita un servicio</a>	</li>
</ul>					<ul class="nav social">
	<li>
		<a href="https://www.facebook.com/papmensajeria" title="Siguenos en Facebook" target="_blank"><img src="http://www.papmensajeria.com/img/btn_fb.png" alt="Facebook" /></a>	</li>
	<li>
		<a href="https://twitter.com/#!/papmensajeria" target="_blank" title="Siguenos en Twitter"><img src="http://www.papmensajeria.com/img/btn_tw.png" alt="Twitter" /></a>	</li>
</ul>				</div>
			</div>
		</div>
	</div>
	
	<div class="clear" style="height:148px;"></div>
	--->
	<table style="max-width: 800px; display: block; margin: 0 auto;">
			<tr>
				<td> 
					<img src="http://papmensajeria.mx/GUIAWEB/pap.jpg" width=45% />
				</td>
				<td> 
					<a href="http://puntoapunto.mx/" class="boton-regresar">Regresar</a>
				</td>
				
			</tr>
	</table>
	
	<div class="container_16">
		
		
		


<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']."?emp=".$EMP."&tckt=".$MAN."&origen=".$ORIGEN; ?>">
<table width="1365" class="tabla" cellpadding="7" cellspacing="0">
<tr>
	<td colspan="2" valign="middle">
		Ingrese Guias
	</td>
    <td valign="bottom">
          <textarea name="GUIAS" rows="2" cols="10" id="GUIAS"></textarea>
    </td>
    <td>
    	<input type="submit" name="1" id="1" value="Rastrear" />
    </td>
    <td colspan="5" valign="middle">
      	Nota: Para consultar varios números de guía, separe dando &quot;ENTER&quot;, entre cada Número de Guía
    </td>
</tr>
<tr>
      <th width="50" valign="middle">Guía</th>
      <th width="50" valign="middle">Estatus</th>
      <th width="100" valign="middle">Fecha de Documentación</th>
      <th width="200" valign="middle">Origen</th>
      <th width="200" valign="middle">Destino</th>
      <th width="100" valign="middle">Fecha de Entrega</th>
      <th width="100" valign="middle">Hora de Entrega</th>
      <th width="50" valign="middle">Peso</th>
      <th width="50" valign="middle">Archivos</th>
</tr>
   <!--inicia creacion de tabla dinamica -->
   <?php echo $tablaOut;  ?>   
   <!--fin de creacion de tabla dinamica -->
  </table>
  <p></p>
  <input name="ocultar" type="hidden" value="<?php echo $cont2; ?>" />
  <input name="CARGA" type="hidden" value="1" />
  <input name="aliado" id="aliado" type="hidden" value="--" />
</form>

	
		<div class="clear"></div>
		<!---     
		<div class="grid_16 footer">
			<strong>Todos los derechos reservados ® Punto a Punto Mensajería S.A. de C.V.</strong><br/>
			<a href="mailto:contacto@papmensajeria.com">contacto@papmensajeria.com</a><br />
            Consulta el <a href="/aviso.pdf" target="_blank">Aviso de Privacidad</a>.
		</div>
		--->
	</div>
	
	<!-- This contains the hidden content for inline calls -->
	<div style='display:none'>
		<div id='inline_gracias' style='padding:10px; background:#000;'>
			<h5>¡Muchas Gracias por tu preferencia!</h5> 
			<p><strong>En breve nos pondremos en contacto.</strong></p>
			<p>El equipo de Punto a Punto.</p>
		</div>
	</div>
	
	</body>
</html>
