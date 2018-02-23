<?php 
ob_start();
session_start(); 
$EMP = $_GET['emp'];
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) 
{
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


require_once('Connections/mcw_rh.php');
require_once('Connections/mcw_service.php');

mysql_select_db($database_mcw_rh, $mcw_rh);
$query_Recordset_sup = "SELECT * FROM personal WHERE (cargo1 = 'SUPERVISION DE SERVICIOS' OR cargo2 = 'COORDINACION DE SERVICIOS') AND EMPRESA = '".$EMP."' ORDER BY nombre ASC";
$Recordset_sup = mysql_query($query_Recordset_sup, $mcw_rh) or die(mysql_error());
$row_Recordset_sup = mysql_fetch_assoc($Recordset_sup);
$totalRows_Recordset_sup = mysql_num_rows($Recordset_sup);

mysql_select_db($database_mcw_rh, $mcw_rh);
$query_Recordset_coord = "SELECT * FROM personal WHERE (cargo1 = 'COORDINACION DE SERVICIOS' OR cargo2 = 'SUPERVISION DE SERVICIOS') AND EMPRESA = '".$EMP."' ORDER BY nombre ASC";
$Recordset_coord = mysql_query($query_Recordset_coord, $mcw_rh) or die(mysql_error());
$row_Recordset_coord = mysql_fetch_assoc($Recordset_coord);
$totalRows_Recordset_coord = mysql_num_rows($Recordset_coord);

mysql_select_db($database_mcw_rh, $mcw_rh);
$query_Recordset_tecnico = "SELECT * FROM personal WHERE (cargo1 = 'TECNICO' OR cargo2 = 'TECNICO')  AND EMPRESA = '".$EMP."' ORDER BY nombre ASC";
$Recordset_tecnico = mysql_query($query_Recordset_tecnico, $mcw_rh) or die(mysql_error());
$row_Recordset_tecnico = mysql_fetch_assoc($Recordset_tecnico);
$totalRows_Recordset_tecnico = mysql_num_rows($Recordset_tecnico);


mysql_select_db($database_mcw_service, $mcw_service);
$recordID = $_GET['recordID'];
$query_Recordset1 = "SELECT * FROM estatus WHERE id = $recordID  AND EMPRESA = '".$EMP."'";
$Recordset1 = mysql_query($query_Recordset1, $mcw_service) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$query_Recordset1a = "SELECT estatus, COUNT(*) FROM clave_estatus WHERE EMPRESA = '".$EMP."' AND ESTADO = 'ABIERTO' GROUP BY estatus";
$Recordset1a = mysql_query($query_Recordset1a, $mcw_service) or die(mysql_error());
$row_Recordset1a = mysql_fetch_assoc($Recordset1a);
$totalRows_Recordset1a = mysql_num_rows($Recordset1a);
//echo $query_Recordset1a;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Pap Mensajeria</title>
<!--
	<link href="http://www.papmensajeria.com/favicon.ico" type="image/x-icon" rel="icon" />
	<link href="http://www.papmensajeria.com/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/reset.css" />-->
			
	<!---     
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/text.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/1024.css" />	
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/layout_default.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/nav_default.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/colorbox.css" />
	<link rel="stylesheet" type="text/css" href="http://www.papmensajeria.com/css/button.css" />

<style type="text/css">	
	/*Estilos de enlaces para el menu*/

#grid_16 a:link{ color: #DF7401; background: #DF7401;}
#grid_16 a:visited{color: #DF7401;}
#grid_16 a:hover{color: #DF7401; background: #DF7401;}
#grid_16 a:active{color: #DF7401;}


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
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery-ui.js"></script> 
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery-fluid16.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.sticky_top.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.colorbox-min.js"></script>
<!-- <script type="text/javascript" src="http://www.papmensajeria.com/js/datetimepicker/datetimepicker_css.js"></script> -->
	<script type="text/javascript" src="http://www.papmensajeria.com/js/solicita.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.validate.js"></script>
	<script type="text/javascript" src="http://www.papmensajeria.com/js/jquery.validate.translation.js"></script>
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
				<a href="/"><img src="http://www.papmensajeria.com/img/logo.png" alt="Punto A Punto" title="Punto A Punto" class="logo" /></a>
				<a href="/"><img src="http://papmensajeria.com/img/tel.png" alt="Llamanos al 5203-3933" title="Llamanos al 5203-3933" class="tel" /></a>				<div class="aviso-header">				
					<a href="http://papmensajeria.mx/PAP2/rastreo.php">Rastrea tu Guía</a> | 
					<a href="http://papmensajeria.mx/PAP2/mcw_service/mcw_s-ctr-ext/index.php?emp=PAP2">Acceso a Clientes</a> | 
					<a href="/aviso.pdf" target="_blank">Aviso de Privacidad</a>				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="stickytop" class="menu">
			<div class="container_16">
				<div class="grid_16">
					<ul class="nav main">
	<li>
							<a href="http://www.papmensajeria.com/#home" alt="Inicio" title="Inicio">Home</a>	
						</li>
						
						<li>
							<a href="http://www.papmensajeria.com/#quienes" alt="¿Quiénes somos?" title="¿Quiénes somos?">¿Quiénes somos?</a>	
						</li>
						<li>
							<a href="http://www.papmensajeria.com/#beneficios" alt="Beneficios" title="Beneficios">Beneficios</a>	
						</li>
						<li>
							<a href="http://www.papmensajeria.com/distribucion" alt="Distribución" title="Distribución" class="btnpopup">Distribución</a>	
						</li>
						<li>
							<a href="http://www.papmensajeria.com/empresas" alt="Mensajería" title="Mensajería" class="btnpopup">Mensajería</a>	
						</li>
						<li>
							<a href="http://www.papmensajeria.com/restaurantes" alt="Restaurantes" title="Restaurantes" class="btnpopup">Restaurantes</a>	
						</li>
						<li>
							<a href="http://www.papmensajeria.com/personas" alt="Personas" title="Personas" class="btnpopup">Personas</a>	
						</li>
						<li>
							<a href="http://www.papmensajeria.com/cobertura" alt="Cobertura" title="Cobertura">Cobertura</a>	
						</li>
						<li>
							<a href="http://www.papmensajeria.com/solicita" alt="Solicita un servicio" title="Solicita un servicio">Solicita un servicio</a>	
						</li>
					</ul>				
					<ul class="nav social">
						<li>
							<a href="https://www.facebook.com/papmensajeria" title="Siguenos en Facebook" target="_blank">
								<img src="http://www.papmensajeria.com/img/btn_fb.png" alt="Facebook" />
							</a>	
						</li>
						<li>
							<a href="https://twitter.com/#!/papmensajeria" target="_blank" title="Siguenos en Twitter">
								<img src="http://www.papmensajeria.com/img/btn_tw.png" alt="Twitter" />
							</a>	
						</li>
					</ul>				
				</div>
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
	
	<form method="post" name="form1" action="<?php echo $editFormAction; ?>">

  <input type="hidden" name="sub_estatus" id="sub_estatus" value="<?php echo $row_Recordset1['T_PENDIENTE']; ?>" />
  <input type="hidden" name="h_coment" id="h_coment" value="" />
  
  <input type="hidden" name="estatus_actual" id="estatus_actual" value="<?php echo $row_Recordset1['estatus'];?>" />
  
  <input type="hidden" name="cp" id="cp" value="<?php echo $row_Recordset1['cp'];?>" />
  <input type="hidden" name="cp2" id="cp2" value="<?php echo $row_Recordset1['cp2'];?>" />
  
  
  
  <table align="center" class="tabla2" cellpadding="8" cellspacing="0" >
    <tr valign="middle" class="Titulos">
      <td colspan="4" align="right" nowrap height="60">
      <div align="center" class="Titulos header1">INFORMACION DE LA GUIA (SOLO LECTURA)</div></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap">
        <div align="left" class="Titulos">Guia PAP</div></td>
      <td><?php echo $row_Recordset1['os']; ?></td>
      <td align="right" nowrap="nowrap"><div align="left" class="Titulos">Guia Cliente</div></td>
      <td><?php echo $row_Recordset1['g_externa']; ?></td>
    </tr>
    <tr>
    	<td align="right" nowrap="nowrap"><div align="left" class="Titulos"><b>C O D   ($)</b></div></td>
    	<td><?php echo $row_Recordset1['VALOR_DECLARADO']; ?></td>
    	
    </tr>
    <tr bgcolor="#FF8000">
      <td style="color:white" colspan="4" align="center"><font><b>ESTATUS : <?php echo $row_Recordset1['estatus']; ?>, SUB ESTATUS: <?php echo $row_Recordset1['T_PENDIENTE']; ?></b></font></td>
    </tr>
    <tr>
    	<td align="right" nowrap="nowrap"><div align="left" class="Titulos">Id Cliente</div></td>
      <td><?php echo $row_Recordset1['CLIENTE']; ?></td>
    	<td align="right" nowrap="nowrap"><div align="left" class="Titulos">Afiliacion</div></td>
      <td><?php echo $row_Recordset1['ar']; ?></td>
    </tr>
    <tr>
    	<td align="right" nowrap="nowrap"><div align="left" class="Titulos">Fecha de Carga</div></td>
      <td><?php echo $row_Recordset1['FE_UPLOAD']; ?> </td>
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Hora de Carga</div></td>
      <td><?php echo $row_Recordset1['HR_UPLOAD']; ?></td>
    </tr>
    <tr bgcolor="#FF8000">
      <td style="color:white" colspan="2" align="center"><font ><b>DATOS DE RECOLECCION</b></font></td>
      <td style="color:white" colspan="2" align="center"><font ><b>DATOS DE ENTREGA</b></font></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Nombre</div></td>
      <td><?php echo $row_Recordset1['atncom']; ?></td>
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Nombre</div></td>
      <td><?php echo utf8_decode($row_Recordset1['atnenvio']); ?></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Razon Social</div></td>
      <td><?php echo $row_Recordset1['comercio']; ?></td>
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Razon Social</div></td>
      <td><?php echo utf8_decode($row_Recordset1['comercio2']); ?></td>
    </tr>
    <tr>
    	<td align="left" nowrap="nowrap" class="Titulos">Domicilio Recoleccion</td>
    	<td align="left" nowrap="nowrap" class="Titulos"><?php echo $row_Recordset1['domicilio']; ?> </td>
    	<td align="left" nowrap="nowrap" class="Titulos">Domicilio Entrega</td>
    	<td align="left" nowrap="nowrap" class="Titulos"><?php echo utf8_decode($row_Recordset1['domicilio2']); ?> </td>
    <tr>
    <tr>
    	<td align="left" nowrap="nowrap" class="Titulos">Colonia Recoleccion</td>
    	<td align="left" nowrap="nowrap" class="Titulos"><?php echo $row_Recordset1['colonia']; ?></td>
    	<td align="left" nowrap="nowrap" class="Titulos">Colonia Entrega</td>
    	<td align="left" nowrap="nowrap" class="Titulos"><?php echo utf8_decode($row_Recordset1['colonia2']); ?></td>
    <tr>
    <tr>
    	<td align="left" nowrap="nowrap" class="Titulos">C. P. Recoleccion</td>
    	<td align="left" nowrap="nowrap" class="Titulos"><?php echo $row_Recordset1['cp']; ?></td>
    	<td align="left" nowrap="nowrap" class="Titulos">C. P. Entrega</td>
    	<td align="left" nowrap="nowrap" class="Titulos"><?php echo utf8_decode($row_Recordset1['cp2']); ?></td>
    <tr>
    <tr>
    	<td align="left" nowrap="nowrap" class="Titulos">Del / Mpio Recoleccion</td>
    	<td align="left" nowrap="nowrap" class="Titulos"><?php echo $row_Recordset1['plaza']; ?> </td>
    	<td align="left" nowrap="nowrap" class="Titulos">Del / Mpio Entrega</td>
    	<td align="left" nowrap="nowrap" class="Titulos"><?php echo utf8_decode($row_Recordset1['plaza2']); ?> </td>
    </tr>
     <tr valign="baseline">
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Telefono Recoleccion</div></td>
      <td><?php echo $row_Recordset1['telefono']; ?> </td>
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Telefono Entrega</div></td>
      <td><?php echo $row_Recordset1['telefono2']; ?> </td>
    </tr>
     <tr valign="baseline">
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Email Recoleccion</div></td>
      <td><?php echo $row_Recordset1['email']; ?> </td>
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Email Entrega</div></td>
      <td><?php echo $row_Recordset1['email2']; ?> </td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Fecha/Hora Recoleccion</div></td>
      <td><?php echo $row_Recordset1['FECHA_RECOLECCION']." ".$row_Recordset1['hora_recoleccion']; ?> </td>
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Fecha/Hora Entrega</div></td>
      <td><?php echo $row_Recordset1['FECHA_ENTREGA']." ".$row_Recordset1['hora_entrega']; ?> </td>
    </tr>
<!-- ********************* ORDEN NUEVO DE CAMPOS -->
    <tr valign="baseline" bgcolor="#FF8000" class="Titulos">
      <td colspan="4" align="right" nowrap>
      <div align="center" class="Titulos color-blanco">DATOS DE COSTOS DE LA GUIA</div></td>
    </tr>
    <tr>
    <td align="left" nowrap="nowrap" class="Titulos">PREPAGO</td>
    <td align="left" nowrap="nowrap" class="Titulos">
    <?php echo $row_Recordset1['PRECIO_VENTA']; ?>
    </td>
    <td align="left" nowrap="nowrap" class="Titulos">PRECIO DE LA GUIA</td>
    <td align="left" nowrap="nowrap" class="Titulos">
    <?php echo $row_Recordset1['PRECIO_GUIA']; ?>
    </td>
  </tr>
  
  <tr>
    <td align="left" nowrap="nowrap" class="Titulos">COSTOS ADICIONALES</td>
    <td align="left" nowrap="nowrap" class="Titulos">
    <?php echo $row_Recordset1['COSTO_ADICIONAL']; ?>
    </td>
    <td align="left" nowrap="nowrap" class="Titulos">FORMA DE PAGO</td>
    <td align="left" nowrap="nowrap" class="Titulos">
    <?php echo $row_Recordset1['FORMA_PAGO']; ?>
    </td>
  </tr>
  <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" class="Titulos">COBRAR GUIA EN :</td>
      <td colspan="2" align="left" nowrap>
      	<div align="left">
      	 <?php if($row_Recordset1['COBRAR_GUIA'] == "1"){echo "ORIGEN";} ?>
      	 <?php if($row_Recordset1['COBRAR_GUIA'] == "2"){echo "DESTINO";} ?>
      	</div>
      </td>
  </tr>
  
  <!-- control de la vista de boton de archivos -->
  <?php 
	//windows
	//$Directorio = "C:\wamp\www\\".$EMP."\mcw_document\general\clientes\\";
	//linux
	$Directorio = "/var/www/".$EMP."/mcw_document/general/clientes/";
	//$Directorio = "C:\\WEBSVR\\01DATA\\W3\\kds\\".$EMP."\\k_document\\general\\";
	$Ticket = $row_Recordset1['os'];
	//echo $Directorio.$Ticket;
	if (is_dir($Directorio.$Ticket)) 
	{
		$Boton = '<input type="button" name="ARCHIVOS" id="ARCHIVOS" value="VER ARCHIVOS" onclick="VerArchivos();"/>';
	}
	else
	{
		$Boton = '<input disabled="disabled" type="button" name="ARCHIVOS" id="ARCHIVOS" value="NO HAY ARCHIVOS" onclick="VerArchivos();"/>';
	}
	?>
    <tr valign="baseline" bgcolor="#FF8000" class="Titulos">
      <td colspan="2" align="right" nowrap>
      <div align="center" class="Titulos color-blanco">INFORMACION DE CONFIRMACION</div></td>
      <td colspan="2" align="right" nowrap>
      <div align="center" class="Titulos color-blanco">INFORMACION DE SEGUIMIENTO INTERNO</div></td>
    </tr>
    <tr>
    	<td colspan="2" align="right" valign="middle" nowrap><div align="center">
        <textarea name="informacion" cols="45" rows="5"><?php echo $row_Recordset1['COMENTARIO']; ?></textarea>
      </div></td>
    	<td colspan="2" align="right" valign="middle" nowrap="nowrap"><div align="center">
        <textarea name="informacion2" cols="45" rows="5"><?php echo $row_Recordset1['historial']; ?></textarea>
      </div></td>
    </tr>
    <tr valign="baseline" bgcolor="#FF8000" class="Titulos">
      <td colspan="4" align="right" nowrap>
      <div align="center" class="Titulos color-blanco">INFORMACION EXTENDIDA</div></td>
    </tr>
    <tr valign="baseline" bgcolor="#FF8000" class="Titulos">
      <td colspan="2" align="right" nowrap>
      <div align="center" class="Titulos color-blanco">RECOLECCION</div></td>
      <td colspan="2" align="right" nowrap>
      <div align="center" class="Titulos color-blanco">ENTREGA</div></td>
    </tr>
    <tr>
    	<td align="right" nowrap="nowrap" class="Titulos"><div align="left">Estado</div></td>
      <td><?php echo $row_Recordset1['estado']; ?> </td>
    	<td align="right" nowrap="nowrap" class="Titulos"><div align="left">Fecha</div></td>
      <td><?php $fecha = date("Y-m-d"); echo $fecha; ?> </td>
    </tr>
    <tr valign="baseline">
    	<td align="right" nowrap="nowrap" class="Titulos"><div align="left">Plaza Sede </div></td>
      <td><?php echo $row_Recordset1['PLAZA_SEDE']; ?> </td>
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Estado</div></td>
      <td><?php echo $row_Recordset1['estado2']; ?> </td>
    </tr>
    <tr valign="baseline">
    </tr> 
    <tr valign="baseline" bgcolor="#FF8000" class="Titulos">
      <td colspan="4" align="right" nowrap>
      <div align="center" class="Titulos color-blanco">DATOS ADICIONALES</div></td>
    </tr>   
<!-- ********************** FIN ORDEN NUEVO -->  
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Persona a Contactar</div></td>
      <td><?php echo $row_Recordset1['atncom']; ?> </td>
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Tipo de Servicio</div></td>
      <td><?php echo $row_Recordset1['tipo']; ?> </td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" class="Titulos"><div align="left">Supervisor</div></td>
      <td><?php echo $row_Recordset1['psoporte']; ?></td>
      <td align="right" nowrap="nowrap" class="Titulos">
        <div align="left">Mensajero</div></td>
      <td><label><?php echo $row_Recordset1['tecnico']; ?>
      </label></td>
    </tr>
    <tr valign="baseline">
      <td align="left" nowrap="nowrap" class="Titulos">Coordinador 1</td>
      <td>
      <?php echo $row_Recordset1['COORD_1']; ?>
      </td>
      <td align="left" nowrap="nowrap" class="Titulos">Coordinador 2</td>
      <td>
      <?php echo $row_Recordset1['COORD_2']; ?>
      </td>
    </tr>
    <tr valign="baseline">
      <td align="left" nowrap="nowrap" class="Titulos">Peso</td>
      <td>
        <label>
          <?php echo $row_Recordset1['PESO']; ?> Kg
        </label>
      </td>
      <td align="left" nowrap="nowrap" class="Titulos">Piezas</td>
      <td>
        <label>
          <?php echo $row_Recordset1['NUM_PZA']; ?>
        </label>
      </td>
    </tr>
    <tr valign="baseline">
      <td align="left" nowrap="nowrap" class="Titulos">Alto</td>
      <td><?php echo $row_Recordset1['alto']; ?></td>
      <td align="left" nowrap="nowrap" class="Titulos">Ancho</td>
      <td><?php echo $row_Recordset1['ancho']; ?></td>
    </tr>
    <tr valign="baseline">
      <td align="left" nowrap="nowrap" class="Titulos">Largo</td>
      <td><?php echo $row_Recordset1['largo']; ?></td>
      <td align="left" nowrap="nowrap" class="Titulos">Peso Volumen</td>
      <td><?php echo $row_Recordset1['peso_vol']; ?></td>
    </tr>
    <tr valign="baseline">
      <td align="left" nowrap="nowrap" class="Titulos">Formato de Guias</td>
      <td colspan="3">
        <?php 
	  switch ($row_Recordset1['tguia']){
		case  "guia_MCW_1A":
		$Tguian = "PAP";
		break;
		
		case  "guia_redpack_1A":
		$Tguian = "REDPACK";
		break;
		
		case  "guia_aflash_1A":
		$Tguian = "AEROFLASH";
		break;
		
		case  "guia_MCW_1AT":
		$Tguian = "PAP-TERM";
		break;
		
		case  "guia_MCW_1AT4":
		$Tguian = "4G-TERM-PAP";
		break;
	  }
	  echo $Tguian;
	  ?>
        </td>
    </tr>
    <tr valign="baseline">
      <td align="left" nowrap="nowrap" class="Titulos">Origen</td>
      <td colspan="3">
        <?php echo $row_Recordset1['origen']; ?></td>
    </tr>
    <tr valign="baseline">
      <td align="left" nowrap="nowrap" class="Titulos">Destino</td>
      <td colspan="3">
        <?php echo $row_Recordset1['destino']; ?>
      </td>
    </tr>
    <tr valign="baseline" class="Estilo3">
      <td align="left" nowrap="nowrap" bgcolor="#FFFFFF" class="Titulos">Seguro </td>
      <td bgcolor="#FFFFFF">$
      <?php echo $row_Recordset1['SEGURO']; ?>
    </tr>  
  </table>
  
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="id" value="<?php echo $row_Recordset1['id']; ?>">
</form>
<p>&nbsp;</p>
	<div class="container_16">
		<div class="clear">
		</div>
		<!---    
		<div class="grid_16 footer">
			<strong>Todos los derechos reservados ® Punto a Punto Mensajería S.A. de C.V.</strong><br/>
			<a href="mailto:contacto@papmensajeria.com">contacto@papmensajeria.com</a><br/>
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
