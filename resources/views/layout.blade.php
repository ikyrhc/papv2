<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   

   <script src="js/jquery-latest.js" type="text/javascript"></script>
   <!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
   <script src="js/script.js"></script>
   
   <title>PAP - @yield('title')</title>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/1-menu_general.css" rel="stylesheet">
	<link href="css/1-container1.css" rel="stylesheet">
    <link href="{{ asset('css/estilos_general.css') }}" rel="stylesheet">
    
</head>

<body>

<img src="img/pap.png" alt="No Hay Imagen" class="imagen" />


<div id='cssmenu'>
    
    <ul>
    <li><a href='/c'>Dashboard</a></li>
    <li><a href='#'>Guías Express</a></li>
    <li><a href='#'>Guías Masivas</a></li>
    <li><a>Servicios</a>
        <ul>
            <li class='active has-sub'><a>Guías</a>
                <ul>
                    <li class='has-sub'><a href='/alta_guia'>Abrir Guía</a></li>
                    <li class='has-sub'><a href='/consguia'>Consulta Guía</a></li>
                    <li class='has-sub'><a href='#'>Modifica Guía</a></li>
                    <li class='has-sub'><a href='#'>Modifica Guías Masivamente</a></li>
                    <li class='has-sub'><a href='#'>Consulta Guías Cerradas</a></li>
                </ul>
            </li>
            <li><a>Imprimir Guias</a>
                <ul>
                    <li class='has-sub'><a href='#'>Por Guía</a></li>
                    <li class='has-sub'><a href='#'>Grupo de Guías</a></li>
                </ul>
            </li>        
            <li><a href='#'>Carga Masiva</a></li>
        </ul> 
    </li>
    <li><a>Reportes</a>
        <ul>
            <li class='has-sub'><a href='#'>Reporte 1</a></li>
            <li class='has-sub'><a href='#'>Reporte 2</a></li>
            <li class='has-sub'><a href='#'>Reporte 3</a></li>
            <li class='has-sub'><a href='#'>Reporte 4</a></li>
            <li class='has-sub'><a href='#'>Reporte 5</a></li>
        </ul>
    </li>
    
    <li><a>Administración</a>
        <ul>
            <li class='active has-sub'><a>Configuración</a></li>
            <li class='active has-sub'><a>Usuarios</a>
                <ul>
                    <li class='has-sub'><a href='/personal'>Directorio</a></li>
                    <li class='has-sub'><a href='/altausu'>Alta</a></li>
                    <li class='has-sub'><a href='#'>Cambio</a></li>
                    <li class='has-sub'><a href='#'>Baja</a></li>
                </ul>
            </li>
            <li class='has-sub'><a>Clientes</a>
                <ul>
                    <li class='has-sub'><a href='/lista_cl'>Directorio</a></li>
                    <li class='has-sub'><a href='/alta_cl'>Alta</a></li>
                    <li class='has-sub'><a href='/alra_cl'>Alta Rapida</a></li>
                    <li class='has-sub'><a href='#'>Cambio</a></li>
                    <li class='has-sub'><a href='#'>Baja</a></li>
                    <li class='has-sub'><a>SubClientes</a>
                        <ul>
                            <li class='has-sub'><a href='/alsb_cl'>Directorio</a></li>
                            <li class='has-sub'><a href='/alsb_cl'>Alta</a></li>
                            <li class='has-sub'><a>Cambio</a></li>
                            <li class='has-sub'><a>Baja</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class='has-sub'><a>Catalogos</a>
                <ul>
                    <li class='has-sub'><a href='#'>Códigos Postales</a></li>
                    <li class='has-sub'><a href='#'>Estatus</a></li>
                    <li class='has-sub'><a href='#'>Zonas</a></li>
                </ul>
            </li>
            <li><a href='/track'>Auditoria</a></li>
        </ul>     
    </li>
    <li><a href='#'>Cerrar Sesión</a></li>
    </ul>

</div>
<div id="container1">
    @yield('content')
</div>

</body>
<html>
