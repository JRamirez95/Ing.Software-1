<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>

    <body class="login">


        <nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span class="navbar-brand mx-auto" href="#" style="color: black;">Configuración de Servicio</span>
                <div class="collapse navbar-collapse" id="navbarCollapse1">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="Inicio.php" style="color:black;">Inicio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container log">

            <div class="omb_login">
                <h3 class="omb_authTitle">Iniciar Sesion o
                    <a href="Registrarse.php">Registrarse</a>
                </h3>
                <div class="row omb_row-sm-offset-3 omb_socialButtons">
                    <div class="col-xs-4 col-sm-6">
                        <a id="loginButton" onclick="authUser();" class="btn btn-lg btn-block omb_btn-facebook">
                            <i class="fa fa-facebook visible-xs"></i>
                            <span class="hidden-xs">Facebook</span>
                        </a>                         
                    </div>

                </div>

                <div class="row omb_row-sm-offset-3 omb_loginOr">
                    <div class="col-xs-12 col-sm-6">
                        <hr class="omb_hrOr">
                        <span class="omb_spanOr">or</span>
                    </div>
                </div>

                <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">
                        <form class="omb_loginForm" action="log/checklogin.php" autocomplete="off" method="POST">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" class="form-control" name="usuario" required placeholder="Nombre de Usuario">
                            </div>
                            <span class="help-block"></span>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="contrasena" required placeholder="Contraseña">
                            </div>
                            <br>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
                        </form>
                    </div>
                </div>
                <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">
                        <p class="omb_forgotPwd">
                            <a href="#">Recordar contraseña?</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/login.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>