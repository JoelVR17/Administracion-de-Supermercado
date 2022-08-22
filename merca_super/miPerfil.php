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
<?php 
    require './style/template_user/head.php';
?>
<!-- BODY -->
<body style="height: auto;">
    <!-- SE IMPORTA EL HEADER -->
    <?php 
        require './style/template_user/header.php';
    ?>

    <!-- CONTENEDOR MIPERFIL -->
    <div style="min-height: 200px;" class="container" style="justify-content: center; align-items: center;">
        <div class="contenedor__imagen">
            
        </div>
    </div>

    <!-- CONTENEDOR PRINCIPAL -->
    <div style="min-height: 400px;" class="container">
        <div class="contenedor_form">
            <form class="row g-3" id="formRegistro">
                <div class="col-md-6">
                    <label for="perfilName" class="form-label">Nombre</label>
                    <input readonly value="<?php echo $nombre?>" type="text" class="form-control" id="perfilName"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-6">
                    <label for="perfilLastName" class="form-label">Apellido</label>
                    <input readonly type="text" value="<?php echo $apellido?>" class="form-control" id="perfilLastName"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-6">
                    <label for="perfilCedula" class="form-label">Cédula</label>
                    <input readonly type="text" value="<?php echo $cedula?>"class="form-control" id="perfilCedula"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-6">
                    <label for="perfilUser" class="form-label">Usuario</label>
                    <input readonly type="text"value="<?php echo $user?>" class="form-control" id="perfilUser"  maxlength="40" minlength="1">
                </div>
            </form>
        </div>
    </div>
    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_user/footer.php';
    ?>
</body> <!--fin.body-->
</html> <!--fin.html-->