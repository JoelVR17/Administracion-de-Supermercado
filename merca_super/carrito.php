<?php
require_once 'scriptsDatatables.php';
require './database/validar.php';
require './database/modal.php';
validarUsuario();
?>
<!-- HTML5 -->
<!DOCTYPE html>
<!-- HTML -->
<html lang="en">
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
    <title>Merca Super - Inventario Admin</title>
</head>
<!-- BODY -->
<body style="height: auto;">
    <!-- SE IMPORTA EL HEADER -->
    <?php
    require './style/template_user/header.php';
    ?>
    <!-- CONTENEDOR PRINCIPAL -->
    <div class="container">
        <form class="form-horizontal" role="form" id="datos_presupuesto" method="post">
            <div id="print-area">
                <div class="row ">
                    <hr />
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h3>Detalles del cliente</h3>
                        <select class="cliente form-control" name="cliente" id="cliente" required>
                            <option value="">Seleccionar cliente</option>
                        </select><br>
                        <label>* Para pedidos a domicilio enviar ubicación al siguiente número 88320921<span id="direccion"></span></label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h3>Detalles de la orden de compra</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <label id="numeroOrden">Orden #<?php echo 1; ?></label>
                            </div>
                            <div class="col-lg-6">
                                <label>Fecha: <?php echo date("d/m/Y"); ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Formas de pago</label>
                                <select class="pago form-control" name="pago" id="pago" required>
                                    <option selected>Forma de pago</option>
                                    <option value="">Sinpe Movil</option>
                                    <option value="">Tarjeta/Efectivo</option>
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label>Métodos de envío</label>
                                <select class="envio form-control" name="envio" id="envio" required>
                                    <option selected>Método de envío</option>
                                    <option value="">Domicilio</option>
                                    <option value="">Pickup en Tienda</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container">
        <button id="btnNuevo" class="btn btn-success mb-3" title="Nuevo producto">Agregar Producto</button>
        <div>
            <table id="tablaOrdenes" class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td style="text-align:right;" colspan="4"><strong>Subtotal: </strong></td>
                        <td id="subtotal" style="text-align:center;"></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;" colspan="4"><strong>Envío: </strong></td>
                        <td id="envioDetalle" style="text-align:center;"></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;" colspan="4"><strong>Método de pago: </strong></td>
                        <td id="pagoDetalle" style="text-align:center;"></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;" colspan="4"><strong>Total: </strong></td>
                        <td id="total" style="text-align:center;"></td>
                    </tr>
                </tfoot>
                <tbody>
                </tbody>
            </table>
            <hr />
            <button id="btnNuevo" class="btn btn-success mt-3" title="Nuevo producto">Orden compra</button>
        </div>
    </div>

    <!-- SE IMPORTA EL FOOTER -->
    <?php 
        require './style/template_user/footer.php';
    ?>

    <!--Modal para CRUD-->
    <div id="modalCRUD" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                </div>
                <form id="formOrdenes">
                    <div class="modal-body">
                        <input id="id" hidden>
                        <label for="" class="col-form-label">Nombre</label><br>
                        <select class="form-control" name="nombre" id="nombre">
                            <option selected>Escoger producto</option>
                            <?php foreach ($productos as $valores) :
                                echo '<option>' . $valores["nombre"] . '</option>';
                            endforeach; ?>
                        </select>
                        <label for="" class="col-form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcion">
                        <label for="" class="col-form-label">Precio</label>
                        <input id="precio" type="number" class="form-control">
                        <label for="" class="col-form-label">Cantidad</label>
                        <input id="cantidad" type="number" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnGuardar" class="guardar btn rounded">Agregar</button>
                        <button type="button" class="cancelar btn rounded" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
<!--fin.body-->
<script src="js/index.js"></script>
<script src="js/ordenes.js"></script>
</html>
<!--fin.html-->