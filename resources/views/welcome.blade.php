<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Punto A Punto V2</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <style>
        html,
            @import url(http://fonts.googleapis.com/css?family=Open+Sans);
            body {
              height: 100%;
            }

            body {
              display: -ms-flexbox;
              display: -webkit-box;
              display: flex;
              -ms-flex-align: center;
              -ms-flex-pack: center;
              -webkit-box-align: center;
              align-items: center;
              -webkit-box-pack: center;
              justify-content: center;
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: #ffffff;
            }

            .form-signin {
              width: 100%;
              max-width: 330px;
              padding: 15px;
              margin: 0 auto;
            }

            .form-signin .form-control {
              position: relative;
              box-sizing: border-box;
              height: auto;
              padding: 10px;
              font-size: 16px;
            }
            .form-signin .form-control:focus {
              z-index: 2;
            }
            .form-signin input[type="email"] {
              margin-bottom: -1px;
              border-bottom-right-radius: 0;
              border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
              margin-bottom: 10px;
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            }
        </style>
    </head>

<body class="text-center">
    <form class="form-signin" >
        <!-- Logotipo de la Mensajeria -->
        <img class="mb-4" src="img/pap.png" alt="" >
        <!-- width="300" height="150" -->
               
        <h1 class="h3 mb-3 font-weight-normal">Por Favor, Ingrese Usuario</h1>
        
        <!-- <label for="inputEmail" class="sr-only">Usuario</label> -->
        <input type="text" id="inputEmail" class="form-control" placeholder="Clave de Usuario" required autofocus><br>
        <!-- <label for="inputPassword" class="sr-only">Contraseña</label> -->
        <input type="password" id="inputPassword" class="form-control" placeholder="Contaseña" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="window.open('/c','_self')">Entrar</button>
        
    </form>
  </body>
</html>

