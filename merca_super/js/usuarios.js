$(document).ready(function () {
    var now = new Date();
    var jsDate = now.getDate() + '/' + (now.getMonth() + 1) + '/' + now.getFullYear(); // Guardamos la fecha es para el PDF
    var id, opcion;
    opcion = 4;
    // Esta función se encarga de Agregar desde el inicio todos los productos/registros en la datatable
    tablaUsuarios = $('#tablaUsuarios').DataTable({
        "ajax": {
            "url": "database/usuarios.php",
            "method": 'POST', // Usamos el metodo POST
            "data": { opcion: opcion }, // Enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "id_usuario" },
            { "data": "nombre_usuario" },
            { "data": "apellido" },
            { "data": "cedula" },
            { "data": "usuario" },
            { "data": "rol" },
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
            { extend: "copyHtml5", filename: "UsuariosRegistrados", text: "Copiar", titleAttr: "Copiar", className: "btn btn-secondary px-2 mr-2 rounded",
            exportOptions: { 
                columns: [ 0, 1, 2, 3,4 ] 
            } },
            { extend: "excelHtml5", filename: "UsuariosRegistrados", text: "Excel", title: "Reporte de Usuarios Registrados",titleAttr: "Exportar Excel", className: "btn btn-success px-3 mr-2 rounded",
            messageTop: `Reporte de usuarios registrados en la plataforma en la fecha ${jsDate}`,
            exportOptions: { 
                columns: [ 0, 1, 2, 3, 4] 
            }, excelStyles: {                // Add an excelStyles definition
                template: "green_medium",  // Apply the 'blue_medium' template
            }},
            {
                extend: "pdfHtml5", filename: "UsuariosRegistrados", text: "PDF", titleAttr: "Exportar PDF", className: "btn btn-danger px-3 mr-2 rounded",
                exportOptions: { 
                    columns: [ 0, 1, 2, 3, 4 ] 
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
                                { alignment: 'center', italics: false, text: 'Reporte de Usuarios Registrados', color: "gray",fontSize: 18, margin: [0, 10] },
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
            { extend: "csvHtml5", filename: "UsuariosRegistrados", text: "CSV", titleAttr: "Exportar CSV", className: "btn btn-primary px-3 mr-2 rounded",
                exportOptions: { 
                    columns: [ 0, 1, 2, 3,4 ] 
                },
                customize: function (csv) {
                    return `Reporte de usuarios registrados en la plataforma en la fecha ${jsDate}\n`+  csv;
                }
            },
            { extend: "print", filename: "UsuariosRegistrados", text: "Imprimir", titleAttr: "Imprimir", className: "btn btn-dark px-2 mr-2 rounded",
                exportOptions: { 
                    columns: [ 0, 1, 2, 3,4 ] 
                }
            }
        ],
        // Agregar o al inicio para que sirva, falta actualizar documentación
        "oLanguage": {
            "sSearch": "", // Para cambiar el label de search por buscar
            "sSearchPlaceholder": "Buscar usuarios...",
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
    $('#formUsuarios').submit(function (e) {
        e.preventDefault(); // Evita el comportambiento normal del submit, es decir, recarga total de la página
        nombre = $.trim($('#nombre').val());
        apellido = $.trim($('#apellido').val());
        cedula = $.trim($('#cedula').val());
        usuario = $.trim($('#usuario').val());
        passwd = $.trim($('#passwd').val());
        rol = $.trim($('#rol').val());
        // Validamos los campos que no esten vacios
        if (nombre == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar el nombre',
            })
            return;
        }
        else if (apellido == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar el apellido',
            })
            return;
        }
        else if (cedula == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar la cédula',
            })
            return;
        }
        else if (usuario == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar el usuario',
            })
            return;
        }
        else if (passwd == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar la contraseña',
            })
            return;
        }
        else if (rol == '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe agregar el rol',
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
                // Este if es para saber cuando se agrega un nuevo usuario
                if (result.isConfirmed && opcion == 1) {
                    $.ajax({
                        url: "database/usuarios.php",
                        type: "POST",
                        datatype: "json",
                        data: { id: id, nombre: nombre, apellido: apellido, cedula: cedula, usuario: usuario, passwd: passwd, rol: rol, opcion: opcion },
                        success: function (data) {
                            tablaUsuarios.ajax.reload(null, false);
                        }
                    });
                    $('#modalCRUD').modal('hide');
                    Swal.fire('Usuario agregado correctamente', '', 'success')
                }
                // Esta else if es para saber cuando se edita un usuario
                else if (result.isConfirmed && opcion == 2) {
                    $.ajax({
                        url: "database/usuarios.php",
                        type: "POST",
                        datatype: "json",
                        data: { id: id, nombre: nombre, apellido: apellido, cedula: cedula, usuario: usuario, passwd: passwd, rol: rol, opcion: opcion },
                        success: function (data) {
                            tablaUsuarios.ajax.reload(null, false);
                        }
                    });
                    $('#modalCRUD').modal('hide');
                    Swal.fire('Usuario editado correctamente', '', 'success')
                }
                else if (result.isDenied) {
                    Swal.fire('Cambios no guardados', '', 'info')
                    $('#modalCRUD').modal('hide');
                }
            })
        }
    });

    // Esta función se encarga de Agregar Usuarios
    $("#btnNuevo").click(function () {
        opcion = 1;
        id = null;
        // Habilitar la edición de nombre y apellido
        $('#cedula').prop('readonly', false);
        $('#rol').prop('readonly', false);

        $("#formUsuarios").trigger("reset");
        $(".modal-header").css("background-color", "#14213d");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nuevo Usuario");
        $('#modalCRUD').modal('show');
    });

    // Esta función se encarga de Editar Usuarios       
    $(document).on("click", ".btnEditar", function () {
        opcion = 2;// Editar
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text()); // Capturo el ID		            
        nombre = fila.find('td:eq(1)').text();
        apellido = fila.find('td:eq(2)').text();
        cedula = fila.find('td:eq(3)').text();
        usuario = fila.find('td:eq(4)').text();
        passwd = fila.find('td:eq(5)').text();
        rol = fila.find('td:eq(5)').text();
        // Desabilitar la edición de datos
        $('#cedula').prop('readonly', true);
        $('#rol').prop('readonly', true);
        // Obtener datos de los inputs
        $("#nombre").val(nombre);
        $("#apellido").val(apellido);
        $("#cedula").val(cedula);
        $("#usuario").val(usuario);
        $("#passwd").val(passwd);
        $("#rol").val(rol);
        $(".modal-header").css("background-color", "#14213d");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Usuario");
        $('#modalCRUD').modal('show');
    });

    // Esta función se encarga de Borrar Usuarios
    $(document).on("click", ".btnBorrar", function () {
        fila = $(this);
        id = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3; //Eliminar    
        // Uso de Sweet Alert 2 para mostrar una alerta al borrar un producto    
        Swal.fire({
            title: 'Esta seguro de borrar este usuario?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2b9348',
            cancelButtonColor: '#d00000',
            confirmButtonText: 'Si, borrar usuario',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "database/usuarios.php",
                    type: "POST",
                    datatype: "json",
                    data: { opcion: opcion, id: id },
                    success: function () {
                        tablaProductos.row(fila.parents('tr')).remove().draw();
                    }
                });
                Swal.fire(
                    'Usuario borrado!',
                    `El usuario ${id} ha sido borrado`,
                    'success'
                )
            }
        })
    });
});    