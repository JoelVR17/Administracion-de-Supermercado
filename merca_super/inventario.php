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
    <title>Merca Super - Inventario Admin</title>
    
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
                <a class="anclaP" href="indexadmin.php">
                    <p class="merca">Merca<br><span class="super">Súper</span></p>
                </a>
            </div>

            <!-- MENU MOBILE -->
            <div class="mobile-menu" style="font-size: 3rem; cursor: pointer;">
                <i style="color: #FFF4E6;" class="fa-solid fa-bars"></i>
            </div>

            <!-- CONTENEDOR DE LAS ANCLAS -->
            <div class="contenedor__anclas">

                <!-- INVENTARIO -->
                <a class="ancla" href="inventario.php">
                    <p>Inventario</p>
                    <div class="cont-anclaV" id="miP">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- PEDIDOS -->
                <a class="ancla" href="pedidos.php">
                    <i class="fa-solid fa-warehouse"></i>
                    <div class="cont-ancla" id="cont">
                        <i class="fa-solid fa-square-list"></i>
                    </div>
                </a >

                <!-- CONTACTO -->
                <a class="ancla" href="contacto_admin.php">
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

    <!-- CONTENEDOR PRINCIPAL -->
    <div style="border: 1px solid black; height: 800px;" class="container">

    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <nav class="navbar navbar-light">
                
            <!-- CONTENEDOR DEL HOME -->
            <div class="contenedor__home">
                <!-- INDEX -->
                <a class="ancla" href="indexadmin.php">
                    <p class="merca">Merca<br><span class="super">Súper</span></p>
                </a >
            </div>

            <!-- MENU MOBILE -->
            <div class="mobile-menu" style="font-size: 3rem; cursor: pointer;">
                <i style="color: #FFF4E6;" class="fa-solid fa-bars"></i>
            </div>

            <!-- CONTENEDOR DE LAS ANCLAS -->
            <div class="contenedor__anclas">
                <!-- INVENTARIO -->
                <a class="ancla-f" href="inventario.php">
                    <p>Inventario</p>
                    <div class="cont-anclaV" id="miP">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- LISTA PEDIDOS -->
                <a class="ancla-f" href="pedidos.php">
                    <i class="fa-solid fa-warehouse"></i>
                    <div class="cont-ancla" id="cont">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                </a >

                <!-- CONTACTO -->
                <a class="ancla-f" href="contacto_admin.php">
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