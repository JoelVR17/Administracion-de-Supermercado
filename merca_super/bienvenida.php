<?php
require_once 'scripts.php';
?>
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
    <link rel="stylesheet" href="./style/template_css/footer_header.css">
    <link rel="stylesheet" href="./style/normalize.css">
    <link rel="stylesheet" href="../merca_super/style/contacto.css">
    <script src="https://kit.fontawesome.com/850c2e9361.js" crossorigin="anonymous"></script>
    <title>Merca Super</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Responsive css datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <!-- SweetAlert 2 para alertas -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../merca_super/style/index.css">
    <link rel="stylesheet" href="./style/template_css/footer_header.css">
    <link rel="stylesheet" href="./style/normalize.css">
    <link rel="stylesheet" href="../merca_super/style/contacto.css">
    <link rel="stylesheet" href="../merca_super/style/bienvenida.css">
    <script src="https://kit.fontawesome.com/850c2e9361.js" crossorigin="anonymous"></script>
</head> <!--fin.Head-->
<!-- BODY -->
<body>

    <!-- HEADER -->
    <header class="headerI">
        <nav class="navbar navbar-light">   
            <!-- CONTENEDOR DEL HOME -->
            <div class="contenedor__home">  
                <!-- INDEX -->
                <a class="anclaP" href="bienvenida.php">
                    <p class="merca">Merca<br><span class="super">Súper</span></p>
                </a>
            </div>
            <!-- MENU MOBILE -->
            <div class="mobile-menu" style="font-size: 3rem; cursor: pointer;">
                <i style="color: #FFF4E6;" class="fa-solid fa-bars"></i>
            </div>
            <!-- CONTENEDOR DE LAS ANCLAS -->
            <div class="contenedor__anclas">

                <!-- NOSOTROS -->
                <a class="ancla" href="nosotros.php">
                    <p>Nosotros</p>
                    <div class="cont-ancla" id="nos">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- INICIAR SESION -->
                <a class="ancla" href="login.php">
                    <p>Iniciar Sesión</p>
                    <div class="cont-ancla" id="nos">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                </a >

                <!-- INICIAR SESION -->
                <a class="ancla" href="registro.php">
                    <p>Registrarse</p>
                    <div class="cont-ancla" id="nos">
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

    <!-- Aqui va el carrusel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="background-color: #608BA1; padding: 20px; display: flex; justify-content: center;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active contenedor_item">
            <img src="./img/img4.jpg" class="d-block w-100" alt="...">
            
            </div>
            <div class="carousel-item contenedor_item">
            <img src="./img/img2.png" class="d-block w-100" alt="...">
            
            </div>
            <div class="carousel-item contenedor_item">
            <img src="./img/img1.png" class="d-block w-100" alt="...">
            
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

    <br><br><br><br>
    <!-- RELLENO -->
    <div class="relleno" style="height: 40rem !important; display: flex; justify-content: center; align-items: center;"> 
        <div class="contenedor__objetos">

            <!-- Objeto 1 -->
            <div class="contenedor__objeto obj">
                <img src="./img/pan.png" alt="">
                <p class="informacion b">Panes</p>
            </div>
            <!-- Objeto 3 -->
            <div class="contenedor__objeto obj">
                <img src="./img/jabon.png" alt="">
                <p class="informacion b">Aseo Personal</p>
            </div>
            <!-- Objeto 4 -->
            <div class="contenedor__objeto obj">
                <img src="./img/carne.png" alt="">
                <p class="informacion b">Carnes</p>
            </div>
            <!-- Objeto 2 -->
            <div class="contenedor__objeto obj">
                <img src="./img/frutas.png" alt="">
                <p class="informacion b">Frutas y Verduras</p>
            </div>
            <!-- Objeto 5 -->
            <div class="contenedor__objeto obj">
                <img src="./img/jugo.png" alt="">
                <p class="informacion b">Jugos</p>
            </div>
            <!-- Objeto 6 -->
            <div class="contenedor__objeto obj">
                <img src="./img/congelado.png" alt="">
                <p class="informacion b">Congelados</p>
            </div>

        </div>
    </div>

    <!-- INFORMACION -->
    <div class="in">
        <h2 class="slogan">Satisfacción y calidad en el mismo lugar</h2>
    </div>

    <!-- CONTENEDOR DE CONSEJOS -->
    <div class="contenedorP">
        <div class="contenedor__publicidad">

            <!-- ROW 1 -->
            <div class="contenedor__imgP">
                <img class="imagenP" src="./img/imgP1.png" alt="">
            </div>

            <div class="contenedor__infor">
                <div class="infor">
                    <h2 class="informacion__titulo">Envíos a tu casa</h2>
                    <p class="informacion">
                        ¡Llevaremos tu pedido hasta la puerta de tu casa en menos de <span class="resalta">12 horas</span>!
                    </p>
                </div>
            </div>

            <!-- ROW 2 -->
            <div class="contenedor__infor">
                <div class="infor">
                    <h2 class="informacion__titulo">Gran Oferta</h2>
                    <p class="informacion">
                        ¡Pídelo Ahora! 
                        <br> Lleva todas las carnes con un <span class="resalta">10%</span> de descuento 
                        <br> Disponible hasta el 15/9/2022
                    </p>
                </div>
            </div>

            <div class="contenedor__imgP">
                <img class="imagenP" src="./img/imgP2.png" alt="">
            </div>
        </div>
    </div>

    <!-- TESTIMONIOS -->
    <div class="containerT">
        <div class="contenedor__testimonios">
            <section class="testimoniales">
                <h3 class="informacion__titulo" style="text-align: center; margin: 1rem;">Testimoniales</h3>
                <div class="cuerpoTestimonio">
                    <img class="imgT" src="./img/persona4.jpg" alt="">
                </div>
                <div class="testimonial">
                    <blockquote>
                        El pedido que realicé me llegó de una manera muy rápida. Ofrecen buenos precios y alta comodidad a la hora de realizar el pedido.
                    </blockquote>
                    <p class="testimonio">- Joel Vargas</p>
                </div>
            </section>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <nav class="navbar navbar-light">
                
            <!-- CONTENEDOR DEL HOME -->
            <div class="contenedor__home">
                <!-- INDEX -->
                <a class="ancla" href="bienvenida.php">
                    <p class="merca">Merca<br><span class="super">Súper</span></p>
                </a >
            </div>

            <!-- MENU MOBILE -->
            <div class="mobile-menu" style="font-size: 3rem; cursor: pointer;">
                <i style="color: #FFF4E6;" class="fa-solid fa-bars"></i>
            </div>

            <!-- CONTENEDOR DE LAS ANCLAS -->
            <div class="contenedor__anclas">
                <!-- NOSOTROS -->
                    <a class="ancla-f" href="nosotros.php">
                        <p>Nosotros</p>
                        <div class="cont-ancla" id="nos">
                            <i class="fa-solid fa-caret-up"></i>
                        </div>
                    </a >

                    <!-- INICIAR SESION -->
                    <a class="ancla-f" href="login.php">
                        <p>Iniciar Sesión</p>
                        <div class="cont-ancla" id="nos">
                            <i class="fa-solid fa-caret-up"></i>
                        </div>
                    </a >

                    <!-- INICIAR SESION -->
                    <a class="ancla-f" href="registro.php">
                        <p>Registrarse</p>
                        <div class="cont-ancla" id="nos">
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

</html> <!--fin.html-->