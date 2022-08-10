<?php
require_once 'scripts.php';
require './database/validar.php';
validarUsuario();
?>
<!-- HTML5 -->
<!DOCTYPE html>
<!-- HTML -->
<html lang="en">
<!-- SE IMPORTA EL HEAD -->
<?php 
    require './style/template_user/head.php';
?>
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
                    <p>Bienvenido <?php echo 'Carlos Gutierrez';?></p> <!-- Hay que insertarle un echo con el nombre dle usuario logueado -->
                    <span class="progress"></span>
                </div>
            </div>
            
            <h1 id="tit">¡Haz tu pedido en línea!</h1>
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

    <!-- Aqui va el carrusel -->
    <div class="br_espacio"></div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
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