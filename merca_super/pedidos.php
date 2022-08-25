<?php
require_once 'scriptsDatatables.php';
require './database/validar.php';
validarAdmin();
?>
<!-- HTML5 -->
<!DOCTYPE html>
<!-- HTML -->
<html lang="en">
<!-- SE IMPORTA EL HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Responsive css datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <!-- SweetAlert 2 para alertas -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS personalizado -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../merca_super/style/datatables.css">
    <script src="https://kit.fontawesome.com/850c2e9361.js" crossorigin="anonymous"></script>
    <title>Merca Super - Ordenes Admin</title>
</head>
<!-- BODY -->

<body>
    <!-- SE IMPORTA EL HEADER -->
    <?php
    require './style/template_admin/header.php';
    ?>
    <!-- CONTENEDOR PRINCIPAL -->
    <div class="container py-4">
        <div style="background-color: var(--crema); padding-left: 0;" class="card-header h3 text-dark">Ordenes Compra</div><br>
        <div>
            <table id="tablaCompras" class="table table-hover">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Pago</th>
                        <th>Envío</th>
                        <th>Monto</th>
                        <th>Fecha Compra</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <!-- SE IMPORTA EL FOOTER -->
    <?php
    require './style/template_admin/footer.php';
    ?>
</body>
<!--fin.body-->
<script src="./js/ordenes_admin.js"></script>
</html>
<!--fin.html-->