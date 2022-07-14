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
    <title>Merca Super - Index</title>
    
</head> <!--fin.Head-->

<!-- BODY -->
<body style="height: auto;">

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
                        <p>Mi Perfil</p>
                        <div class="cont-anclaV" id="miP">
                            <i class="fa-solid fa-caret-up"></i>
                        </div>
                    </a >

                    <!-- NOSOTROS -->
                    <a class="ancla" href="nos.php">
                        <p>Nosotros</p>
                        <div class="cont-ancla" id="nos">
                            <i class="fa-solid fa-caret-up"></i>
                        </div>
                    </a >

                    <!-- CONTACTO -->
                    <a class="ancla" href="">
                        <p>Contacto</p>
                        <div class="cont-ancla" id="cont">
                            <i class="fa-solid fa-caret-up"></i>
                        </div>
                    </a >

                    <!-- CARRITO -->
                    <a class="ancla" href="">
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
                </div>
        </nav>
    </header> <!--fin.header-->

    <!-- CONTENIDO COLUMNAS -->
    <div class="contenido__columnas">
        <div class="info">

            <h1>¡Haz tu pedido en línea!</h1>

            <p>Llega hasta tu casa</p>
                <br>
            <a href="#" class="ir">
                Ir
            </a>
        </div>
        <br> 
        <br>

        <!-- CAJAS -->
        <div class="cajas">
            <diV class="Celular">
                <div class="contenedorIcono">
                    <i class="fa-solid fa-mobile-screen-button icon"></i>
                </div>
                <br>
                <h2>Celular</h2>
                <br>
                <p class="lorem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi accusantium
                    reprehenderit labore voluptatibus quisquam maxime, nisi illum perspiciatis laboriosam saepe </p>
            </diV>
            <diV class="Casa"> 
                <div class="contenedorIcono">
                    <i class="fa-solid fa-truck-fast icon"></i>
                </div>
                <br>
                <h2>Casa</h2>
                <br>
                <p class="lorem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi accusantium
                    reprehenderit labore voluptatibus quisquam maxime, nisi illum perspiciatis laboriosam saepe </p>
            </diV>
            <diV class="Compra">
                <div class="contenedorIcono">
                    <i class="fa-solid fa-cart-shopping icon"></i>
                </div>
                <br>
                <h2>Compra</h2>
                <br>
                <p class="lorem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi accusantium
                    reprehenderit labore voluptatibus quisquam maxime, nisi illum perspiciatis laboriosam saepe </p>
            </diV>
        </div>    
    </div>

    <!-- CONTENIDO IMAGEN -->
    <div class="contenido__imagen">
            <img src="img/img.png" alt="imagen index">
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
                    <p>Mi Perfil</p>
                </a >

                <!-- NOSOTROS -->
                <a class="ancla-f" href="">
                    <p>Nosotros</p>
                </a >

                <!-- CONTACTO -->
                <a class="ancla-f" href="">
                    <p>Contacto</p>
                </a >

                <!-- CARRITO -->
                <a class="ancla-f" href="">
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