//  SE EXTRAEN LOS ID DE LOS INPUT PARA LOGRAR VALIDAR LA FUNCION
let contacName = document.getElementById("contacName");
let contacLastName = document.getElementById("contacLastName");
let contacEmail = document.getElementById("contacEmail");
let contacTipoconsulta = document.getElementById("contacTipoconsulta");//preguntar con que id se va a trabajar en tipo de consulta//
let contacTelf = document.getElementById("contacTelf");
let contacDesc = document.getElementById("contacDesc");

//  SE ESTABLECE FUNCION PARA VALIDAR EL REGISTRO
function alert() {
    // Validamos que los datos no esten vacios, se usa JQuery
    if ($("#contacName").val() == "") {
        // Alerta de Sweet Alert
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Nombre!",
            icon: "error",
            dangerMode: true, // Para poner el fondo del boton de color rojo
            button: "Continuar",
        });
        return false;
    } else if ($("#contacLastName").val() == "") {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Apellido!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
        return false;
    } else if ($("#contacEmail").val() == "") {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Correo!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
        return false;
    } else if ($("#contacTipoconsulta").prop('selected')) {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su tipo de consulta!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
        return false;
    } else if ($("#contacTelf").val() == "") {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Telefono!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
    }else if ($("#contacDesc").val() == "") {
            Swal.fire({
                title: "¡Error!",
                text: "¡Debe ingresar su Descripcion!",
                icon: "error",
                dangerMode: true,
                button: "Continuar",
            });
        return false;
    }

    cadena = "nombre=" + $("#contacName").val() +
        "&apellido=" + $("#contacLastName").val() +
        "&correo=" + $("#contacEmail").val() +
        "&tipo_consulta=" + $("#contacTipoconsulta option:selected").text() +
        "&telefono=" + $("#contacTelf").val() +
        "&mensaje=" + $("#contacDesc").val(); 


    $.ajax({
        type: "POST",
        url: "./database/contacto.php",
        data: cadena,
        success: function(r) { //preguntar aqui
            if (r == 1) {
                $('#formContacto')[0].reset();
                Swal.fire({
                    title: "¡Correcto!",
                    text: "Consulta enviada con exito",
                    icon: "success",
                    dangerMode: true,
                    button: "Continuar",
                });
            } else   {
                $('#formContacto')[0].reset();
                Swal.fire({
                    title: "¡Error!",
                    text: "Error en el envio de la consulta",
                    icon: "error",
                    button: "Continuar",
                });
            } 
        }

    });

}