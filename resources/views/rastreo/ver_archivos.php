<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<title>Pap Mensajeria</title>
	
	<link href="http://www.papmensajeria.com/favicon.ico" type="image/x-icon" rel="icon" /><link href="http://www.papmensajeria.com/favicon.ico" type="image/x-icon" rel="shortcut icon" />
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

<!-- 

function inhabilitar(){ 
   	alert ("Esta función está inhabilitada.\n\nPerdonen las molestias.") 
   	return false 
} 

document.oncontextmenu=inhabilitar 

// --> 
</script>


</head>
<body>
	<a name="home"></a>
	<div id="header">
		<div class="container_16">
			<div class="grid_16">
					<a href="http://www.papmensajeria.com/">
						<img src="http://www.papmensajeria.com/img/logo.png" alt="Punto A Punto" title="Punto A Punto" class="logo" />
					</a>
				<a href="http://www.papmensajeria.com/">
					<img src="http://www.papmensajeria.com/img/tel.png" alt="Llamanos al 5203-3933" title="Llamanos al 5203-3933" class="tel" />
				</a>				
				<a href="/aviso.pdf" target="_blank" class="aviso-header">
					Aviso de Privacidad
				</a>			
			</div>
			<div class="clear">
			</div>
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
	
	<div class="clear" style="height:148px;">
	
	</div>
	<?php 
	
	$EMP = $_GET['emp'];
	$GUIA = $_GET['guia'];
	
	$ruta = "mcw_document/general/clientes/".$GUIA;
	//echo "mcw_document/general/clientes/".$GUIA."/";
	listar_directorios_ruta($ruta,$EMP);
	
	function listar_directorios_ruta($ruta,$EMP){
		// abrir un directorio y listarlo recursivo
		if (is_dir($ruta)) 
		{
			if ($dh = opendir($ruta)) 
			{
				while (($file = readdir($dh)) !== false) 
				{
					//esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio
					//mostraría tanto archivos como directorios
					//echo "<br>Nombre de archivo: $file ";
					//echo "http://".$_SERVER['SERVER_NAME']."/".$EMP."/".$ruta."/".$file;
					if($file != ".")
					{
						if ($file != "..")
						{
							echo '<img src="http://'.$_SERVER['SERVER_NAME'].'/'.$EMP.'/'.$ruta.'/'.$file.'	" alt="Punto A Punto" width=500 , height=300 />';
						}
					}
					
					
				}
				closedir($dh);
			}
		}
		else
		echo "<br>No es ruta valida";
	}
	
	?>
	<div class="container_16">
		<div class="clear">
		</div>
		<div class="grid_16 footer">
			<strong>Todos los derechos reservados ® Punto a Punto Mensajería S.A. de C.V.</strong><br/>
			<a href="mailto:contacto@papmensajeria.com">contacto@papmensajeria.com</a><br/>
            Consulta el <a href="/aviso.pdf" target="_blank">Aviso de Privacidad</a>.
		</div>
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
