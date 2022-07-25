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
    <title>Merca Super - Nosotros</title>
    
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
                    <div class="cont-ancla" id="miPerfil.php">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- NOSOTROS -->
                <a class="ancla" href="nosotros.php">
                    <p>Nosotros</p>
                    <div class="cont-anclaV" id="nos">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- CONTACTO -->
                <a class="ancla" href="contacto.php">
                    <p>Contacto</p>
                    <div class="cont-ancla" id="cont">
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
    <div class="infonosotros"><!-- Esto maneja la info de infonosotros-->
            <h1>¿Quienes Somos?</h1>
            <p class="lorem" id="lorem_nosotros">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus ipsa molestias architecto odio maxime totam ipsam possimus quo tempore obcaecati eveniet dignissimos nihil esse reprehenderit sapiente quibusdam nulla, consequuntur eius.</p>
        </div>
        <br>
        <br>
        <br>
        <div class="contenido_nosotros"><!-- esta clase contenido maneja la caja celeste de la pantalla nosotros-->
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
        </div>
        <div class="encuentranos"><!--En esta parte esta el mapa-->
<h1>¡Encuentranos!</h1>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2364.5845836436583!2d-74.17588894719506!3d4.640155145441658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9dcd0b66fc3f%3A0xcf9f2a33e0b10339!2sSupermercado%20MERCASUPER_%20DINDALITO!5e0!3m2!1ses!2scr!4v1658769776996!5m2!1ses!2scr" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        
    </div>
    <br>
    <br>

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

</html> <!--fin.html-->