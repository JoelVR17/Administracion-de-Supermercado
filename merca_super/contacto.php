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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../merca_super/style/index.css">
    <link rel="stylesheet" href="./style/template/footer_header.css">
    <link rel="stylesheet" href="./style/normalize.css">
    <script src="https://kit.fontawesome.com/850c2e9361.js" crossorigin="anonymous"></script>
    <title>Merca Super - Contacto</title>
    
</head> <!--fin.Head-->

<!-- BODY -->
<body style="height: auto;">

    <!-- HEADER -->
    <header class="header">
        <nav class="navbar navbar-light">
                
            <!-- CONTENEDOR DEL HOME -->
            <div class="contenedor__home">
                <!-- INDEX -->
                <a class="anclaP" href="index.php">
                    <p class="merca">Merca<br><span class="super">Súper</span></p>
                </a>
            </div>

            <!-- MENU MOBILE -->
            <div class="mobile-menu" style="font-size: 3rem; cursor: pointer;">
                <i style="color: #FFF4E6;" class="fa-solid fa-bars"></i>
            </div>

            <!-- CONTENEDOR DE LAS ANCLAS -->
            <div class="contenedor__anclas">
                <!-- MI PERFIL -->
                <a class="ancla" href="miPerfil.php">
                    <p>Mi Perfil</p>
                    <div class="cont-ancla" id="miP">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- NOSOTROS -->
                <a class="ancla" href="nosotros.php">
                    <p>Nosotros</p>
                    <div class="cont-ancla" id="nos">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- CONTACTO -->
                <a class="ancla" href="contacto.php">
                    <p>Contacto</p>
                    <div class="cont-anclaV" id="cont">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- CARRITO -->
                <a class="ancla" href="carrito.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="cont-ancla" id="car">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >
            </div>
            <!-- CONTENEDOR DE LAS REDES -->
            <div class="contenedor__redes">
                <!-- INSTAGRAM -->
                <a class="anclaI" href="">
                    <i class="fa-brands fa-instagram"></i>
                </a >

                <!-- FACEBOOK -->
                <a class="anclaF" href="">
                    <i class="fa-brands fa-facebook-square"></i>
                </a>

                <!-- LOG OUT -->
                <a class="ancla anclaS" href="login.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
            </div>
        </nav>
    </header> <!--fin.header-->

    <!-- CONTENEDOR PRINCIPAL -->
    <div style="min-height: 800px;" class="container">
        <div class="contenedor_form">
            <form class="row g-3" id="formRegistro">
                <div class="col-md-6">
                    <label for="contacName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="contacName"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-6">
                    <label for="contacLastName" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="contacLastName"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-12">
                    <label for="contacEmail" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="contacEmail">
                </div>
                <div class="col-6">
                    <label for="contacUser" class="form-label">Tipo Consulta</label>
                    <select class="form-control" name="" id="">
                        <option value="">Seleccione</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="contacTelef" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="contacTelf" maxlength="20" minlength="5">
                </div>
                <div class="col-md-12">
                    <label for="contacDesc" class="form-label">Descripción</label>
                    <textarea type="text" class="form-control" id="contacDesc"></textarea>
                </div>
                <div class="col-12" id="x">
                    <input class="btn" id="entrarSistema" onclick="alert()" value="Enviar" readonly>
                </div>
                <div class="col-12" id="x">
                    <input class="btn" id="entrarSistema" onclick="limpiar()" value="Limpiar" readonly>
                </div>
            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <nav class="navbar navbar-light">
                
            <!-- CONTENEDOR DEL HOME -->
            <div class="contenedor__home">
                <!-- INDEX -->
                <a class="ancla" href="index.php">
                    <p class="merca">Merca<br><span class="super">Súper</span></p>
                </a >
            </div>

            <!-- MENU MOBILE -->
            <div class="mobile-menu" style="font-size: 3rem; cursor: pointer;">
                <i style="color: #FFF4E6;" class="fa-solid fa-bars"></i>
            </div>

            <!-- CONTENEDOR DE LAS ANCLAS -->
            <div class="contenedor__anclas">
                <!-- MI PERFIL -->
                <a class="ancla-f" href="miPerfil.php">
                    <p>Mi Perfil</p>
                </a >

                <!-- NOSOTROS -->
                <a class="ancla-f" href="nosotros.php">
                    <p>Nosotros</p>
                </a >

                <!-- CONTACTO -->
                <a class="ancla-f" href="contacto.php">
                    <p>Contacto</p>
                </a >

                <!-- CARRITO -->
                <a class="ancla-f" href="carrito.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a >
            </div>
            <!-- CONTENEDOR DE LAS REDES -->
            <div class="contenedor__redes">
                <!-- INSTAGRAM -->
                <a class="anclaI" href="">
                    <i class="fa-brands fa-instagram"></i>
                </a >

                <!-- FACEBOOK -->
                <a class="anclaF" href="">
                    <i class="fa-brands fa-facebook-square"></i>
                </a>

                <!-- LOG OUT -->
                <a class="ancla-f anclaS" href="login.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>

            </div>
        </nav>

        <div class="contenedor_derechos">
            <p class="derechos">&COPY; Derechos Reservados - <?php echo date('Y'); ?></p>
        </div>
    </footer> <!--fin.footer-->

</body> <!--fin.body-->

<!-- JAVASCRIPT -->
<script src="js/index.js"></script>
<script src="js/globales.js"></script>

</html> <!--fin.html-->