<?php
require 'scripts.php';
require './database/validar.php';

validarRol();
?>
<!-- HTML5 -->
<!DOCTYPE html>
<!-- HTML -->
<html lang="en">
<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/login_registro.css">
    <title>Merca Super - Login</title>
</head> <!--fin.Head-->
<!-- BODY -->
<body>
    <!-- MAIN -->
    <main style="overflow-x: hidden;" class="container-fluid">
        <div class="row">
            <!-- COLUMNA DEL LOGO -->
            <div class="col col-1">
                <div class="container">
                    <img class="img-fluid logo" src="img/logo.png" alt="">
                </div>
                <div class="container-titulo">
                    <p class="merca">Merca<br><span class="super">Súper</span></p>
                </div>
            </div>
            <!-- COLUMNA DEL FORMULARIO -->
            <div class="col col-2">
                <div class="cont-form"> 
                    <div class="cont-form-cont">
                        <div class="cont-titulo">
                            <h1>¡Inicia Sesión!</h1>
                        </div>
                        <form action="#" method="POST" class="row g-3" id="formRegistro">
                            <div class="fonticon">
                                <label for="registerUser" class="form-label">Usuario</label>
                                <input type="text" name="username" class="form-control" placeholder="Usuario"  id="registerUser" maxlength="20" minlength="1">
                                <i class="fa fa-user-circle-o fa-lg"></i>
                            </div>
                            <div class="fonticon">
                                <label for="registerPass" class="form-label">Contraseña</label>
                                <input type="password" name="passwd" class="form-control" placeholder="Contraseña" id="registerPass" maxlength="20" minlength="1">
                                <i class="fa fa-unlock-alt fa-lg"></i>
                            </div>
                            <div class="col-12" id="x">
                                <input type="submit" class="btn" id="entrarSistema" value="Ingresar" readonly>
                            </div>
                            <div class="registrate">
                                <p class="registro">¿No tienes cuenta? -
                                    <a href="registro.php">Regístrate</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main> <!--fin.main-->
</body> <!--fin.body-->

<!-- JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/login.js"></script>
<script src="js/globales.js"></script>
</html> <!--fin.html-->