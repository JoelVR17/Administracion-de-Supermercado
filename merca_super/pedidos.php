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
        require './style/template_admin/header.php';
    ?>
    <!-- CONTENEDOR PRINCIPAL -->
    <div style="border: 1px solid black; height: 800px;" class="container">

    </div>
    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_admin/footer.php';
    ?>
</body> <!--fin.body-->
</html> <!--fin.html-->