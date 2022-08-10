<?php
require_once 'scripts.php';
require './database/validar.php';
validarAdmin();
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
<body>
    <!-- SE IMPORTA EL HEADER -->
    <?php 
        require './style/template_admin/header_index.php';
    ?>
    <!-- CONTENIDO  -->
    <div class="contenido__columnas">
        <div class="imagen">
            <img src="./img/logo.png">
        </div>
        <div class="contenedor__tit">
            <!-- INDEX -->
            <a class="anclaP">
                <p id="mercas" class="mercaA">Merca<br>
                <span id="supers" class="superA">Súper</span></p>
            </a>
        </div>
        <div class="infoA">
            <div style="display: flex; justify-content: flex-end; align-items: center; margin-left: 30px;">
                <!-- BIENVENIDO -->
                <div class="notificacion">
                    <p>Bienvenido <?php echo 'Administrador';?></p> <!-- Hay que insertarle un echo con el nombre dle usuario logueado -->
                    <span class="progress"></span>
                </div>
            </div>
            <h1 id="tit">Bienvenido</h1>
            <p>Ve los pedidos</p>
            <br>
            <a href="pedidos.php" class="ir">
                Ir
            </a>
            <br> <br>
            <p>Ve el inventario</p>
            <br>
            <a href="inventario.php" class="ir">
                Ir
            </a>
        </div>
        
    </div>
    <div class="contenedor__grafico" style="width: 90%; height: 40rem; display: flex; justify-content: center; margin-top: 50rem; margin-bottom: 10rem;">
        <img src="img/grafico.png" alt="" style="width: 100%; height: 100%;">
    </div>
    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_admin/footer.php';
    ?>
</body> <!--fin.body-->
</html> <!--fin.html-->