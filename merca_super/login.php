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
    <link rel="stylesheet" href="./style/login_registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@700&family=Mukta:
                wght@200&family=Open+Sans&family=PT+Sans:wght@400;700&family=Quicksand:wght@300&
                family=Staatliches&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Merca Super - Login</title>
</head>
<!--fin.Head-->

<!-- BODY -->

<body>

    <!-- MAIN -->
    <main class="contenedor">
        <div class="contenedor__logo">
            <img src="img/logo.png" alt="Logo de MercaSuper" class="logo">
            <p class="contenedor__logo__titulo contenedor__logo__titulo--spam">Merca<br><span class="contenedor__logo__titulo--spam">Súper</span></p>
        </div>

        <div class="contenedor__form">
            <h1 class="titulo">¡Bienvenido!</h1>
            <form class="formulario">
                <div class="contenedor__input">
                    <label class="formulario__label__u">Usuario:</label>
                    <input class="formulario__text" type="text" id="loginUser">
                </div>
                <div class="contenedor__input contenedor__input--ultimo">
                    <label class="formulario__label__p">Contraseña:</label>
                    <input class="formulario__text" type="password" id="loginPass">
                </div>
                <input class="btn__celeste" id="entrarSistema" onclick="alert()" value="Ingresar" readonly>
                <div class="r">
                    <p class="registro">¿No tienes cuenta? -
                        <a href="registro.php" class="registro--span">Regístrate</a>
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
        if ($("#loginUser").val() == "") {
            // Alerta de Sweet Alert
            swal({
                title: "Error!",
                text: "Debe ingresar su usuario!",
                icon: "error",
                dangerMode: true, // Para poner el fondo del boton de color rojo
                button: "Continuar",
            });
            return false;
        } else if ($("#loginPass").val() == "") {
            swal({
                title: "Error!",
                text: "Debe ingresar su contraseña!",
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
            url: "./php/login.php",
            data: cadena,
            success: function(r) {
                if (r == 1) {
                    window.location = "index.php";
                } else {
                    swal({
                        title: "Error!",
                        text: "Fallo al iniciar sesión",
                        icon: "error",
                        dangerMode: true,
                        button: "Continuar",
                    });
                }
            }

        });

    }
</script>