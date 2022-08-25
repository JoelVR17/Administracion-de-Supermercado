<?php
require_once 'scriptsDatatables.php';
require './database/validar.php';
validarAdmin();
?>
<!-- HTML5 -->
<!DOCTYPE html>
<!-- HTML -->
<html lang="en">
<!-- HEAD -->

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
    <link rel="stylesheet" href="./style/datatables.css">
    <script src="https://kit.fontawesome.com/850c2e9361.js" crossorigin="anonymous"></script>
    <title>Merca Super - Usuarios Admin</title>
</head>
<!-- BODY -->

<body style="height:auto">
    <!-- SE IMPORTA EL HEADER -->
    <?php
    require './style/template_admin/header.php';
    ?>
    <div class="container"style="min-height: 30rem !important;">
        <div style="background-color: var(--crema); padding-left: 0;"  class="card-header h3 text-dark">Usuarios Registrados</div><br>
        <button id="btnNuevo" class="btn btn-success mb-3" title="Nuevo usuario">Nuevo usuario</button>
        <div>
            <table id="tablaUsuarios" class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cédula</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <!--Modal para CRUD-->
    <div id="modalCRUD" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                </div>
                <form id="formUsuarios">
                    <div class="modal-body">
                        <input id="id" hidden>
                        <label for="" class="col-form-label">Nombre:</label>
                        <input type="text" placeholder="Nombre" class="form-control" id="nombre">
                        <label for="" class="col-form-label">Apellido:</label>
                        <input type="text" placeholder="Apellido" class="form-control" id="apellido">
                        <label for="" class="col-form-label">Cédula</label>
                        <input id="cedula" placeholder="Cédula" type="text" class="form-control">
                        <label for="" class="col-form-label">Usuario</label>
                        <input id="usuario" placeholder="Usuario" type="text" class="form-control">
                        <label for="" class="col-form-label">Contraseña</label>
                        <input id="passwd" placeholder="Contraseña" type="password" class="form-control">
                        <label for="" class="col-form-label">Rol</label>
                        <input id="rol" placeholder="Rol" type="text" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnGuardar" class="guardar btn rounded">Guardar</button>
                        <button type="button" class="cancelar btn rounded" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SE IMPORTA EL FOOTER -->
    <?php
    require './style/template_admin/footer.php';
    ?>
</body>
<!--fin.body-->
<!-- JAVASCRIPT -->
<script src="js/index.js"></script>
<script src="js/usuarios.js"></script>

</html>