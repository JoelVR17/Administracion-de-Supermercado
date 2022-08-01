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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="style/login_registro.css">
    <title>Merca Super - Registro</title>
</head> <!--fin.Head-->

<!-- BODY -->
<body id="body">
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
                <div class="cont-form" id="f"> 
                    <div class="cont-form-cont">
                        <div class="cont-titulo">
                            <h1>¡Regístrate!</h1>
                        </div>
                        <form class="row g-3" id="formRegistro">
                            <div class="fonticon">
                                <label for="registerName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="registerName" maxlength="30" minlength="1">
                                <i class="fa fa-user fa-lg"></i>
                            </div>
                            <div class="fonticon">
                                <label for="registerLastName" class="form-label">Apellido</label>
                                <input type="text" class="form-control" placeholder="Apellido" id="registerLastName" maxlength="30" minlength="1">
                                <i class="fa fa-user-o fa-lg"></i>
                            </div>
                            <div class="fonticon">
                                <label for="registerCedula" class="form-label">Cédula</label>
                                <input type="text" class="form-control" placeholder="Cédula" id="registerCedula" maxlength="9" minlength="9">
                                <i class="fa fa-address-card fa-lg"></i>
                            </div>
                            <div class="fonticon">
                                <label for="registerUser" class="form-label">Usuario</label>
                                <input type="text" class="form-control" placeholder="Usuario"  id="registerUser" maxlength="20" minlength="5">
                                <i class="fa fa-user-circle-o fa-lg"></i>
                            </div>
                            <div class="fonticon">
                                <label for="registerPass" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" placeholder="Contraseña" id="registerPass" maxlength="20" minlength="5">
                                <i class="fa fa-unlock-alt fa-lg"></i>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        De acuerdo con políticas de privacidad
                                    </label>
                                </div>
                            </div>
                            <div class="col-12" id="x">
                                <input class="btn" id="entrarSistema" onclick="alert()" value="Crear" readonly>
                            </div>
                            <div class="registrate">
                                <p class="registro">¿Ya tienes cuenta? -
                                    <a href="login.php">Inicia sesión</a>
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
<script src="js/registro.js"></script>
<script src="js/globales.js"></script>
</html> <!--fin.html-->