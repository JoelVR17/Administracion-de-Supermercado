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
    <title>Merca Super - Index Admin</title>
    
</head>
 <!--fin.Head-->

<!-- BODY -->
<body>

    <!-- HEADER -->
    <header class="headerI">

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
                <a class="ancla" href="mip.php">
                    <p>Inventario</p>
                    <div class="cont-anclaV" id="miP">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- INVENTARIO -->
                <a class="ancla" href="">
                    <i class="fa-solid fa-warehouse"></i>
                    <div class="cont-ancla" id="cont">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- CONTACTO -->
                <a class="ancla" href="">
                    <i class="fa-solid fa-message"></i>
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
            </div>
        </nav>
    </header> <!--fin.header-->

    <!-- CONTENIDO  -->
    <div class="contenido__columnas">
        <div class="imagen">
            <img src="./img/logo.png">
        </div>

        <div class="contenedor__tit">
            <!-- INDEX -->
            <a class="anclaP" href="index.php">
                <p id="mercas" class="mercaA">Merca<br>
                <span id="supers" class="superA">Súper</span></p>
            </a>
        </div>

        <div class="infoA">
            <h1>Bienvenido</h1>
            <p>Ve los pedidos</p>
            <br>
            <a href="#" class="ir">
                Ir
            </a>
            <br> <br>
            <p>Ve el inventario</p>
            <br>
            <a href="#" class="ir">
                Ir
            </a>
        </div>
        
    </div>

    <div class="contenedor__grafico" style="width: 90%; height: 40rem; display: flex; justify-content: center; margin-top: 50rem; margin-bottom: 10rem;">
        <img src="img/grafico.png" alt="" style="width: 100%; height: 100%;">
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
                <a class="ancla-f" href="">
                    <p>Inventario</p>
                    <div class="cont-anclaV" id="miP">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- NOSOTROS -->
                <a class="ancla-f" href="">
                    <i class="fa-solid fa-warehouse"></i>
                    <div class="cont-ancla" id="cont">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- CONTACTO -->
                <a class="ancla-f" href="">
                    <i class="fa-solid fa-message"></i>
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
            </div>
        </nav>

        <div class="contenedor_derechos">
            <p class="derechos">&COPY; Derechos Reservados - <?php echo date('Y'); ?></p>
        </div>
    </footer> <!--fin.footer-->

</body> <!--fin.body-->

<!-- JAVASCRIPT -->
<script src="js/index.js"></script>

</html> <!--fin.html-->