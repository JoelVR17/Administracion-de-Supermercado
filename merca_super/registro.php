<!-- HAY PROBLEMAS EN LOS NAVEGADORES, ALGUNAS COSAS SE VEN DISTINTAS -->

<!-- HTML5 -->
<!DOCTYPE html>

<!-- HTML -->
<html lang="en">

<!-- HEAD -->

<head>
    <?php require_once "scripts.php"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@700&family=Mukta:
                wght@200&family=Open+Sans&family=PT+Sans:wght@400;700&family=Quicksand:wght@300&
                family=Staatliches&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/login_registro.css">
    <title>Merca Super - Registro</title>
</head>
<!--fin.Head-->

<!-- BODY -->

<body>

    <!-- MAIN -->
    <main class="contenedor">
        <div class="contenedor__logo">
            <img src="img/logo.png" alt="Logo de MercaSuper" class="logo">
            <p class="contenedor__logo__titulo">Merca<br><span class="contenedor__logo__titulo--spam">Súper</span></p>
        </div>

        <div class="contenedor__form">
            <h1 class="titulo--registro">¡Regístrate!</h1>
            <form class="formulario--registro" id="formRegistro">
                <div class="contenedor__input">
                    <label class="formulario__label__n">Nombre:</label>
                    <input class="formulario__text" type="text" id="registerName">
                </div>
                <div class="contenedor__input">
                    <label class="formulario__label__u">Apellido:</label>
                    <input class="formulario__text" type="text" id="registerLastName">
                </div>
                <div class="contenedor__input">
                    <label class="formulario__label__u">Usuario:</label>
                    <input class="formulario__text" type="text" id="registerUser">
                </div>
                <div class="contenedor__input">
                    <label class="formulario__label__u">Cedula:</label>
                    <input class="formulario__text" type="text" id="registerCedula">
                </div>
                <div class="contenedor__input--ultimo">
                    <label class="formulario__label__p">Contraseña:</label>
                    <input class="formulario__text" type="password" id="registerPass">
                </div>
                <input class="btn__celeste" id="registrarNuevo" onclick="alert()" value="Crear" readonly>
                <div class="r">
                    <p class="registro">¿Ya tienes cuenta? -
                        <a href="login.php" class="registro--span">Acceder</a>
                    </p>
                </div>
            </form>
        </div>

    </main>
    <!--fin.main-->

</body>
<!--fin.body-->

</html>
<!--fin.html-->


<script type="text/javascript">
    function alert() {
        // Validamos que los datos no esten vacios, se usa JQuery
        if ($("#registerName").val() == "") {
            // Alerta de Sweet Alert
            swal({
                title: "Error!",
                text: "Debe ingresar su nombre!",
                icon: "error",
                dangerMode: true, // Para poner el fondo del boton de color rojo
                button: "Continuar",
            });
            return false;
        } else if ($("#registerLastName").val() == "") {
            swal({
                title: "Error!",
                text: "Debe ingresar su apellido!",
                icon: "error",
                dangerMode: true,
                button: "Continuar",
            });
            return false;
        } else if ($("#registerCedula").val() == "") {
            swal({
                title: "Error!",
                text: "Debe ingresar su cedula!",
                icon: "error",
                dangerMode: true,
                button: "Continuar",
            });
            return false;
        } else if ($("#registerUser").val() == "") {
            swal({
                title: "Error!",
                text: "Debe ingresar su usuario!",
                icon: "error",
                dangerMode: true,
                button: "Continuar",
            });
            return false;
        } else if ($("#registerPass").val() == "") {
            swal({
                title: "Error!",
                text: "Debe ingresar su contraseña!",
                icon: "error",
                dangerMode: true,
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
            url: "./php/registro.php",
            data: cadena,
            success: function(r) {
                if (r == 2) {
                    $('#formRegistro')[0].reset();
                    swal({
                        title: "Error!",
                        text: "Este usuario ya existe",
                        icon: "error",
                        dangerMode: true,
                        button: "Continuar",
                    });
                } else if (r == 1) {
                    $('#formRegistro')[0].reset();
                    swal({
                        title: "Correcto",
                        text: "Usuario agregado con exito",
                        icon: "success",
                        button: "Continuar",
                    });
                } else {
                    swal({
                        title: "Error!",
                        text: "Fallo al agregar usuario",
                        icon: "error",
                        dangerMode: true,
                        button: "Continuar",
                    });
                }
            }

        });

    }
</script>