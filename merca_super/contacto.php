<!-- HTML5 -->
<!DOCTYPE html>
<!-- HTML -->
<html lang="en">
<!-- SE IMPORTA EL HEAD -->
<?php 
    require 'scripts.php';
    require './style/template_user/head.php';
?>
<!-- BODY -->
<body style="height: auto;">
    <!-- SE IMPORTA EL HEADER -->
    <?php 
        require './style/template_user/header.php';
    ?>
    <!-- CONTENEDOR PRINCIPAL -->
    <div style="min-height: 30rem !important;" class="container">
        <div class="contenedor_form">
            <form class="row g-5" id="formContacto">
                <div class="col-md-6">
                    <label for="contacName" class="form-label">Nombre</label>
                    <input type="text" placeholder="Nombre" class="form-control" id="contacName"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-6">
                    <label for="contacLastName" class="form-label">Apellido</label>
                    <input type="text" placeholder="Apellido" class="form-control" id="contacLastName"  maxlength="40" minlength="1">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="contacEmail" class="form-label">Correo</label>
                    <input type="text" placeholder="marco23@dominio.com" class="form-control" id="contacEmail">
                </div>
                <div class="col-6 mt-3">
                    <label for="contacUser" class="form-label">Tipo Consulta</label> <!-- se le puso ahi consultar si se va a poner otro !-->
                    <select class="form-select" name="" id="contacTipoconsulta">
                        <option value="">Seleccione consulta</option>
                        <option value="">Consulta Envios</option>
                        <option value="">Consulta Horario</option>
                        <option value="">Consulta Defectos</option>
                    </select>
                </div>
                <div class="col-6 mt-3">
                    <label for="contacTelef" class="form-label">Teléfono</label>
                    <input type="text" placeholder="Teléfono" class="form-control" id="contacTelf" maxlength="20" minlength="5">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="contacDesc" class="form-label">Descripción</label>
                    <textarea type="text" placeholder="Descripción consulta" class="form-control" id="contacDesc"></textarea>
                </div>
                <div class="col-12 m-0" id="x">
                    <input class="btn" id="entrarSistema" onclick="alert()" value="Enviar" readonly>
                </div>
            </form>
        </div>
    </div>
    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_user/footer.php';
    ?>
</body> <!--fin.body-->
<script src="js/contacto.js"></script>
</html> <!--fin.html-->