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

<body style="height:auto">
    <!-- SE IMPORTA EL HEADER -->
    <?php
    require './style/template_admin/header.php';
    ?>
    <!-- CONTENEDOR PRINCIPAL -->
        <div class="conteiner">
            <div class="card-header h3 text-dark">Productos disponibles</div><br>
            <button id="btnNuevo" class="btn btn-success mb-3" title="Nuevo producto">Nuevo Producto</button>
            <div>
                <table id="tablaProductos" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
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
                <form id="formProductos">
                    <div class="modal-body">
                        <input id="id" hidden>
                        <label for="" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre">
                        <label for="" class="col-form-label">Categoria:</label>
                        <input type="text" class="form-control" id="categoria">
                        <label for="" class="col-form-label">Precio</label>
                        <input id="precio" type="number" step="0.01" class="form-control">
                        <label for="" class="col-form-label">Cantidad</label>
                        <input id="cantidad" type="number" class="form-control">
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
<script src="js/inventario.js"></script>

</html>
<!--fin.html-->