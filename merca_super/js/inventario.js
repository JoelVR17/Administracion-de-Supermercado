$(document).ready(function () {
    var now = new Date();
    var jsDate = now.getDate() + '/' + (now.getMonth() + 1) + '/' + now.getFullYear(); // Guardamos la fecha es para el PDF
    var id, opcion;
    opcion = 4;
    // Esta función se encarga de Agregar desde el inicio todos los productos/registros en la datatable
    tablaProductos = $('#tablaProductos').DataTable({
        "ajax": {
            "url": "database/inventario.php",
            "method": 'POST', // Usamos el metodo POST
            "data": { opcion: opcion }, // Enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "nombre_categoria" },
            { "data": "precio" },
            { "data": "cantidad" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='editar btn-sm mr-3 rounded btnEditar' title='Editar producto'><i class='material-icons'>edit</i></button><button class='borrar btn-sm mr-3 rounded btnBorrar' title='Borrar producto'><i class='material-icons'>delete</i></button></div></div>" }
        ],
        // Con esto acomodamos los elementos de la tabla, B=Botones, l=Cantidad resultados, f=filtro, tr= table, p=pagination
        dom: "<<'float-right mb-1'B>>" +
            "<'row'<'col-sm-12 col-md-6 mb-2'l><'col-sm-12 col-md-1 mb-2'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        "responsive": true,
        // Agregamos estilos a los botones, text=Nombre, titleAttr=Nombre al pasar cursor, className=Color Bootstrap
        buttons: [
            { extend: "copyHtml5", filename: "ProductosInventario", text: "Copiar", titleAttr: "Copiar", className: "btn btn-secondary px-2 mr-2 rounded",
            exportOptions: { 
                columns: [ 0, 1, 2, 3,4 ] 
            } },
            { extend: "excelHtml5", filename: "ProductosInventario", text: "Excel", title: "Reporte de Productos Inventario",titleAttr: "Exportar Excel", className: "btn btn-success px-3 mr-2 rounded",
            messageTop: `Reporte de productos en inventario del Super Merca en la fecha ${jsDate}`,
            exportOptions: { 
                columns: [ 0, 1, 2, 3,4 ] 
            }, excelStyles: {                // Add an excelStyles definition
                template: "green_medium",  // Apply the 'blue_medium' template
            }},
            {
                extend: "pdfHtml5", filename: "ProductosInventario", text: "PDF", titleAttr: "Exportar PDF", className: "btn btn-danger px-3 mr-2 rounded",
                exportOptions: { 
                    columns: [ 0, 1, 2, 3,4 ] 
                }, // Determinamos las columnas que queremos exportar en pdf
                // Esta función nos sirve para personalizar todo el pdf
                customize: function (doc) {
                    // Esto sirve para centrar los datos en las columnas del pdf
                    doc.styles.tableBodyEven.alignment = 'center';
                    doc.styles.tableBodyOdd.alignment = 'center'; 
                    // Esto cambia el color del header del pdf
                    for (var row = 0; row < doc.content[1].table.headerRows; row++) {
                        var header = doc.content[1].table.body[row];
                        for (var col = 0; col < header.length; col++) {
                          header[col].fillColor = 'orange';
                        }
                    }
                    // Lo siguiente se tomó de aquí: https://www.web-dev-qa-db-esp.com/es/jquery/exportacion-de-tablas-de-datos-pdf-con-100-de-ancho/823889082/
                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    doc.content[1].margin = [ 100, 0, 100, 0 ] // Esto centra la tabla en el pdf
                    //Remueve el titulo creado por dataTables
                    doc.content.splice(0, 1);
                    doc.pageMargins = [30, 70, 30, 40]; // 20,60,20,30
                    doc.defaultStyle.fontSize = 9;
                    doc.styles.tableHeader.fontSize = 10;
                    doc.styles.tableFooter.fontSize = 8;
                    // Personalizar header del pdf
                    doc['header'] = (function () {
                        return {
                            columns: [
                                { alignment: 'center', italics: false, text: 'Reporte de Productos Inventario', color: "gray",fontSize: 18, margin: [0, 10] },
                            ],
                            margin: 20
                        }
                    });
                    // Personalizar footer del pdf
                    doc['footer'] = (function (page, pages) {
                        return {
                            columns: [
                                { alignment: 'left', text: 'Creado el: ' + jsDate.toString(),color: "gray" },
                                { alignment: 'right', text: 'Página ' + page.toString() + ' de ' + pages.toString(),color: "gray" }
                            ],
                            margin: 20
                        }
                    });
                }
            },
            { extend: "csvHtml5", filename: "ProductosInventario", text: "CSV", titleAttr: "Exportar CSV", className: "btn btn-primary px-3 mr-2 rounded",
                exportOptions: { 
                    columns: [ 0, 1, 2, 3,4 ] 
                },
                customize: function (csv) {
                    return `Reporte de productos en inventario del Super Merca en la fecha ${jsDate}\n`+  csv;
                }
            },
            { extend: "print", filename: "ProductosInventario", text: "Imprimir", titleAttr: "Imprimir", className: "btn btn-dark px-2 mr-2 rounded",
                exportOptions: { 
                    columns: [ 0, 1, 2, 3,4 ] 
                }
            }
        ],
        // Agregar o al inicio para que sirva, falta actualizar documentación
        "oLanguage": {
            "sSearch": "", // Para cambiar el label de search por buscar
            "sSearchPlaceholder": "Buscar productos...",
            "sLengthMenu": "Mostrar _MENU_ datos", // Para cambiar show __MENU__ entries por Mostrar datos
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ datos",
            // Cambiar los nombres en ingles de la paginación
            "oPaginate": {
            "sFirst": "Primera", 
            "sPrevious": "Anterior", 
            "sNext": "Siguiente",
            "sLast": "Ultima"
            }
        }
    });

    var fila; // Captura la fila, para Editar o Eliminar
    // Submit para el Crear y Editar
    $('#formProductos').submit(function (e) {
        e.preventDefault(); // Evita el comportambiento normal del submit, es decir, recarga total de la página
        nombre = $.trim($('#nombre').val());
        categoria = $.trim($('#categoria').val());
        precio = $.trim($('#precio').val());
        cantidad = $.trim($('#cantidad').val());
        // Validamos los campos que no esten vacios
        if (nombre == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar el nombre del producto',
            })
            return;
        }
        else if (categoria == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar la categoria',
            })
            return;
        }
        else if (precio == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar el precio',
            })
            return;
        }
        else if (cantidad == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar la cantidad',
            })
            return;
        }
        else {
            Swal.fire({
                title: '¿Quiere guardar los cambios?',
                confirmButtonColor: '#2b9348',
                denyButtonColor: '#d00000',
                showDenyButton: true,
                confirmButtonText: 'Guardar',
                denyButtonText: `Cancelar`
            }).then((result) => {
                // Este if es para saber cuando se agrega un nuevo producto
                if (result.isConfirmed && opcion == 1) {
                    $.ajax({
                        url: "database/inventario.php",
                        type: "POST",
                        datatype: "json",
                        data: { id: id, nombre: nombre, categoria: categoria, precio: precio, cantidad: cantidad, opcion: opcion },
                        success: function (data) {
                            tablaProductos.ajax.reload(null, false);
                        }
                    });
                    $('#modalCRUD').modal('hide');
                    Swal.fire('Producto agregado correctamente', '', 'success')
                }
                // Esta else if es para saber cuando se edita un producto
                else if (result.isConfirmed && opcion == 2) {
                    $.ajax({
                        url: "database/inventario.php",
                        type: "POST",
                        datatype: "json",
                        data: { id: id, precio: precio, cantidad: cantidad, opcion: opcion },
                        success: function (data) {
                            tablaProductos.ajax.reload(null, false);
                        }
                    });
                    $('#modalCRUD').modal('hide');
                    Swal.fire('Producto editado correctamente', '', 'success')
                }
                else if (result.isDenied) {
                    Swal.fire('Cambios no guardados', '', 'info')
                    $('#modalCRUD').modal('hide');
                }
            })
        }
    });

    // Esta función se encarga de Agregar Productos
    $("#btnNuevo").click(function () {
        opcion = 1;
        id = null;
        // Habilitar la edición de nombre y categoria
        $('#nombre').prop('readonly', false);
        $('#categoria').prop('readonly', false);

        $("#formProductos").trigger("reset");
        $(".modal-header").css("background-color", "#14213d");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nuevo Producto");
        $('#modalCRUD').modal('show');
    });

    // Esta función se encarga de Editar Productos       
    $(document).on("click", ".btnEditar", function () {
        opcion = 2;// Editar
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text()); // Capturo el ID		            
        nombre = fila.find('td:eq(1)').text();
        categoria = fila.find('td:eq(2)').text();
        precio = fila.find('td:eq(3)').text();
        cantidad = fila.find('td:eq(4)').text();
        // Desabilitar la edición de nombre y categoria
        $('#nombre').prop('readonly', true);
        $('#categoria').prop('readonly', true);
        // Obtener datos de los inputs
        $("#nombre").val(nombre);
        $("#categoria").val(categoria);
        $("#precio").val(precio);
        $("#cantidad").val(cantidad);
        $(".modal-header").css("background-color", "#14213d");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Producto");
        $('#modalCRUD').modal('show');
    });

    // Esta función se encarga de Borrar Productos
    $(document).on("click", ".btnBorrar", function () {
        fila = $(this);
        id = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3; //Eliminar    
        // Uso de Sweet Alert 2 para mostrar una alerta al borrar un producto    
        Swal.fire({
            title: 'Esta seguro de borrar este producto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2b9348',
            cancelButtonColor: '#d00000',
            confirmButtonText: 'Si, borrar producto',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "database/inventario.php",
                    type: "POST",
                    datatype: "json",
                    data: { opcion: opcion, id: id },
                    success: function () {
                        tablaProductos.row(fila.parents('tr')).remove().draw();
                    }
                });
                Swal.fire(
                    'Producto borrado!',
                    `El producto ${id} ha sido borrado`,
                    'success'
                )
            }
        })
    });
});    