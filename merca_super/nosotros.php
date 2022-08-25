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
    require './style/template_user/header.php';
    ?>
    <!-- CONTENEDOR PRINCIPAL -->
    <div class="infonosotros"><br>
        <!-- Esto maneja la info de infonosotros-->
        <h1 class="n">¿Quienes Somos?</h1>
        <p class="lorem" id="lorem_nosotros">Inicia como un pequeño supermercado en Guanacaste en donde se da a conocer por el servicio al cliente personalizado, lo que permitió, poco a poco, brindar una oferta de producto basada en lo que busca el cliente. Hace algunos años se expandieron operaciones con la incorporación de mayores productos. 
            Es a partir de este paso que impulsa un crecimiento continuo año tras año. Esto le permite a Super Merca implementar un sistema estratégico, con el objetivo de estar más cerca de una clientela cada vez mayor.
        </p>
    </div>
    <div class="contenido_nosotros">
        <!-- esta clase contenido maneja la caja celeste de la pantalla nosotros-->
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
                <p class="lorem">Nos complace informarles que la compra de nuestros productos se puede realizar a través de tarjeta, efectivo y sinpe móvil.</p>
            </diV>
        </div>
    </div>
    </div>
    <div class="encuentranos">
        <!--En esta parte esta el mapa-->
        <h1 class="n">¡Encuentranos!</h1>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2364.5845836436583!2d-74.17588894719506!3d4.640155145441658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9dcd0b66fc3f%3A0xcf9f2a33e0b10339!2sSupermercado%20MERCASUPER_%20DINDALITO!5e0!3m2!1ses!2scr!4v1658769776996!5m2!1ses!2scr" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
    <br>
    <br>
    <!-- SE IMPORTA EL FOOTER -->
    <?php
    require './style/template_user/footer.php';
    ?>
</body>
<!--fin.body-->

</html>
<!--fin.html-->