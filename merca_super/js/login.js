//  SE EXTRAEN LOS ID DE LOS INPUT PARA LOGRAR VALIDAR LA FUNCION
let loginUser = document.getElementById("loginUser");
let loginPass = document.getElementById("loginPass");

//  SE ESTABLECE FUNCION PARA VALIDAR EL LOGIN
function alert() {
    // Validamos que los datos no esten vacios, se usa JQuery
    if ($("#loginUser").val() == "") {
        // Alerta de Sweet Alert
        swal({
            title: "¡Error!",
            text: "¡Debe ingresar su Usuario!",
            icon: "error",
            dangerMode: true, // Para poner el fondo del boton de color rojo
            button: "Continuar",
        });
        return false;
    } else if ($("#loginPass").val() == "") {
        swal({
            title: "¡Error!",
            text: "¡Debe ingresar su Contraseña!",
            icon: "error",
            dangerMode: true,
            button: "Continuar",
        });
        return false;
    }

    cadena = "username=" + $("#loginUser").val() +
        "&passwd=" + $("#loginPass").val();

    $.ajax({
        type: "POST",
        url: "./database/validar.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                window.location = "indexadmin.php";
            } 
            else if (r == 2) {
                window.location = "index.php";
            }
            else {
                swal({
                    title: "¡Error!",
                    text: "Fallo al iniciar sesión",
                    icon: "error",
                    dangerMode: true,
                    button: "Continuar",
                });
            }
        }
    });

}