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
                <div class="cont-ancla" id="miP">
                    <i class="fa-solid fa-caret-up"></i>
                </div>
            </a >

            <!-- LISTA PEDIDOS -->
            <a class="ancla-f" href="pedidos.php">
                <i class="fa-solid fa-list-check"></i>
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