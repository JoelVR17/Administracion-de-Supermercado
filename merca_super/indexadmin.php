<?php
require_once 'scripts.php';
require './database/validar.php';
require './database/conexion.php';
require './database/tarjetas.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
validarAdmin();
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
    <div class="contenido__columnasAd">
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
                <div id="noti">
                    <p>Bienvenido <?php echo $nombre?> <?php echo 'Administrador';?></p>
                    <span id="ficacion"></spanclass=>
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

    <!-- DATOS -->
    <div class="contenedor__grafico">
        <div class="contenedor__elemento">
            <!-- GRAFICO -->
            <div class="grafico" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                <div id="chartdiv"></div>
            </div>
            <!-- TARJETA 1 -->
            <div class="tarjeta tarjeta1 bg-warning">
                <h2 class="titulo__tarjeta">Cantidad de Productos</h2>
                <p class="resultado__tarjeta"><?php echo cantidadProductos($conexion);?></p>
            </div>
            <!-- TARJETA 2 -->
            <div class="tarjeta tarjeta2 bg-danger">
            <h2 class="titulo__tarjeta">Cantidad de Categorias</h2>
                <p class="resultado__tarjeta"><?php echo cantidadCategorias($conexion);?></p>
            </div>
            <!-- TARJETA 3 -->
            <div class="tarjeta tarjeta3 bg-danger">
                <h2 class="titulo__tarjeta">Cantidad de Usuarios Admin</h2>
                <p class="resultado__tarjeta"><?php echo cantidadUsuariosAdmin($conexion);?></p>
            </div>
            <!-- TARJETA 4 -->
            <div class="tarjeta tarjeta4 bg-warning">
                <h2 class="titulo__tarjeta">Cantidad de Usuarios</h2>
                <p class="resultado__tarjeta"><?php echo cantidadUsuariosNormales($conexion);?></p>
            </div>
        </div>
    </div>
    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_admin/footer.php';
    ?>
</body> <!--fin.body-->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="https://cdn.amcharts.com/lib/4/plugins/annotation.js"></script> 
<script src="./js/graficos.js"></script>
</html> <!--fin.html-->