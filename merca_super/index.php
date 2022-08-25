<?php
require_once 'scripts.php';
require './database/validar.php';
validarUsuario();

$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$cedula = $_SESSION['cedula'];
$user = $_SESSION['usuario'];

?>
<!-- HTML5 -->
<!DOCTYPE html>
<!-- HTML -->
<html lang="en">
<!-- SE IMPORTA EL HEAD -->
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
    <link rel="stylesheet" href="../merca_super/style/miPerfil.css">
    <script src="https://kit.fontawesome.com/850c2e9361.js" crossorigin="anonymous"></script>
</head> <!--fin.Head-->

<!-- BODY -->
<body style="height: auto;">

    <!-- SE IMPORTA EL HEADER -->
    <?php 
        require './style/template_user/header_index.php';
    ?>

    <!-- CONTENIDO COLUMNAS -->
    <div class="contenido__columnas">
        <div class="info">
            <div style="display: flex; justify-content: flex-end; align-items: center; margin-left: 30px;">
                <!-- BIENVENIDO -->
                <div class="notificacion">
                    <p>Bienvenid@ <?php echo $nombre . ' ' . $apellido;?></p> <!-- Hay que insertarle un echo con el nombre dle usuario logueado -->
                    <span class="progress"></span>
                </div>
            </div>
            
            <h1 id="tit" style="font-size: 35px !important; font-weight: 800 !important;">¡Haz tu pedido en línea!</h1>
            <p>Llega hasta tu casa</p>
                <br>
            <a href="carrito.php" class="ir">
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
                <p class="lorem">Nos mantenemos innovando nuestros productos para brindar la mejor calidad a los clientes, ahora puede hacer sus pedidos desde el celular.</p>
            </diV>
            <diV class="Casa"> 
                <div class="contenedorIcono">
                    <i class="fa-solid fa-truck-fast icon"></i>
                </div>
                <br>
                <h2>Casa</h2>
                <br>
                <p class="lorem">Nos enfocamos en complacer las necesidades de nuestros clientes por eso hacemos envíos a casa con un pequeño costo extra.</p>
            </diV>
            <diV class="Compra">
                <div class="contenedorIcono">
                    <i class="fa-solid fa-cart-shopping icon"></i>
                </div>
                <br>
                <h2>Compra</h2>
                <br>
                <p class="lorem">Nos complace informarles que la compra de nuestros productos se puede realizar a través de tarjeta, efectivo y sinpe móvil. </p>
            </diV>
        </div>    
    </div>

    <!-- Aqui va el carrusel -->
    <div class="br_espacio"></div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 130rem !important;" >
        <div class="carousel-inner"style="height: 130rem !important;" >
            <div class="carousel-item active">
                <img src="https://www.larepublica.net/storage/images/2019/12/05/20191205112225.pilsen-fifco.jpg"
                    class="imagen_carrusel" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.heineken.com/media-us/0pip2jhq/web-site-uefa-hr.jpg?quality=85"
                    class="imagen_carrusel" alt="..." >
            </div>
            <div class="carousel-item">
                <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2020/02/coca-cola-portada-1877741.jpg"
                    class="imagen_carrusel" alt="..." >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_user/footer.php';
    ?>
</body> <!--fin.body-->
</html> <!--fin.html-->