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
        require './style/template_user/header.php';
    ?>
    <!-- CONTENEDOR PRINCIPAL -->
    <div style="border: 1px solid black; height: 800px;" class="container">
        
    </div>
    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_user/footer.php';
    ?>
</body> <!--fin.body-->
</html> <!--fin.html-->