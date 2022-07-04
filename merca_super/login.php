<!-- HTML5 -->
<!DOCTYPE html>

<!-- HTML -->
<html lang="en">

<!-- HEAD -->
<head>
    <?php require_once "scripts.php"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/login_registro.css">
    <title>Merca Super - Login</title>
</head> <!--fin.Head-->

<!-- BODY -->
<body>

    <!-- MAIN -->
    <main class="container-fluid">
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
                        <form class="row g-3" id="formRegistro">
                            <div class="col-12">
                                <label for="loginUser" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="loginUser"  maxlength="20" minlength="5">
                            </div>
                            <div class="col-12">
                                <label for="loginPass" class="form-label">Contraseña</label>
                                <input type="Pass" class="form-control" id="loginPass"  maxlength="20" minlength="5">
                            </div>
                            <div class="col-12" id="x">
                                <input class="btn" id="entrarSistema" onclick="alert()" value="Ingresar" readonly>
                            </div>
                            <div class="col-12" id="x">
                                <input class="btn" id="entrarSistema" onclick="limpiar()" value="Limpiar" readonly>
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
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/login.js"></script>
<script src="js/globales.js"></script>

</html> <!--fin.html-->