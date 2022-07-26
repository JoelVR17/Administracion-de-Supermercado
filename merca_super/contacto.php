<!-- HTML5 -->
<!DOCTYPE html>

<!-- HTML -->
<html lang="en">

<!-- SE IMPORTA EL HEAD -->
<?php 
    require './style/template_html_user/head.php';
?>

<!-- BODY -->
<body style="height: auto;">

    <!-- SE IMPORTA EL HEADER -->
    <?php 
        require './style/template_html_user/header.php';
    ?>

    <!-- CONTENEDOR PRINCIPAL -->
    <div style="min-height: 800px;" class="container">
        <div class="contenedor_form">
            <form class="row g-3" id="formRegistro">
                <div class="col-md-6">
                    <label for="contacName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="contacName"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-6">
                    <label for="contacLastName" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="contacLastName"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-12">
                    <label for="contacEmail" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="contacEmail">
                </div>
                <div class="col-6">
                    <label for="contacUser" class="form-label">Tipo Consulta</label>
                    <select class="form-control" name="" id="">
                        <option value="">Seleccione</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="contacTelef" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="contacTelf" maxlength="20" minlength="5">
                </div>
                <div class="col-md-12">
                    <label for="contacDesc" class="form-label">Descripción</label>
                    <textarea type="text" class="form-control" id="contacDesc"></textarea>
                </div>
                <div class="col-12" id="x">
                    <input class="btn" id="entrarSistema" onclick="alert()" value="Enviar" readonly>
                </div>
                <div class="col-12" id="x">
                    <input class="btn" id="entrarSistema" onclick="limpiar()" value="Limpiar" readonly>
                </div>
            </form>
        </div>
    </div>

    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_html_user/footer.php';
    ?>

</body> <!--fin.body-->

<!-- SE IMPORTA EL JAVASCRIPT -->
<?php 
    require './style/template_html_user/javascript.php';
?>

</html> <!--fin.html-->