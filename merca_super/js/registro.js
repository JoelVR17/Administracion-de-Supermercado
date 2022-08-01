//  SE EXTRAEN LOS ID DE LOS INPUT PARA LOGRAR VALIDAR LA FUNCION
let registerName = document.getElementById("registerName");
let registerLastName = document.getElementById("registerLastName");
let registerCedula = document.getElementById("registerCedula");
let registerUser = document.getElementById("registerUser");
let registerPass = document.getElementById("registerPass");

//  SE ESTABLECE FUNCION PARA VALIDAR EL REGISTRO
function alert() {
    // Validamos que los datos no esten vacios, se usa JQuery
    if ($("#registerName").val() == "") {
        // Alerta de Sweet Alert
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Nombre!",
            icon: "error",
            dangerMode: true, // Para poner el fondo del boton de color rojo
            button: "Continuar",
        });
        return false;
    } else if ($("#registerLastName").val() == "") {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Apellido!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
        return false;
    } else if ($("#registerCedula").val() == "") {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Cédula!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
        return false;
    } else if ($("#registerUser").val() == "") {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Usuario!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
        return false;
    } else if ($("#registerPass").val() == "") {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe ingresar su Contraseña!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
        return false;
    } else if (!($("#gridCheck").prop('checked'))) {
        Swal.fire({
            title: "¡Error!",
            text: "¡Debe aceptar las políticas de privacidad!",
            icon: "error",
            dangerMode: true, // Para poner el fondo del boton de color rojo
            button: "Continuar",
        });
        return false;
    }

    cadena = "nombre=" + $("#registerName").val() +
        "&apellido=" + $("#registerLastName").val() +
        "&cedula=" + $("#registerCedula").val() +
        "&username=" + $("#registerUser").val() +
        "&passwd=" + $("#registerPass").val();

    $.ajax({
        type: "POST",
        url: "./database/registro.php",
        data: cadena,
        success: function(r) {
            if (r == 2) {
                $('#formRegistro')[0].reset();
                Swal.fire({
                    title: "¡Error!",
                    text: "Este usuario ya existe",
                    icon: "error",
                    dangerMode: true,
                    button: "Continuar",
                });
            } else if (r == 1) {
                $('#formRegistro')[0].reset();
                Swal.fire({
                    title: "¡Correcto!",
                    text: "Usuario agregado con exito",
                    icon: "success",
                    button: "Continuar",
                });
            } else {
                Swal.fire({
                    title: "¡Error!",
                    text: "Fallo al agregar usuario",
                    icon: "error",
                    dangerMode: true,
                    button: "Continuar",
                });
            }
        }

    });

}