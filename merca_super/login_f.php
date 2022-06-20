<!-- HAY PROBLEMAS EN LOS NAVEGADORES, ALGUNAS COSAS SE VEN DISTINTAS -->

<!-- HTML5 -->
<!DOCTYPE html>

<!-- HTML -->
<html lang="en">

<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../merca_super/style/login_registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@700&family=Mukta:
                wght@200&family=Open+Sans&family=PT+Sans:wght@400;700&family=Quicksand:wght@300&
                family=Staatliches&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Merca Super - Login</title>
</head> <!--fin.Head-->

<!-- BODY -->
<body style="overflow-y:hidden;">

    <!-- MAIN -->
    <main class="contenedor">
        <div class="contenedor__logo">
            <img src="img/logo.png" alt="Logo de MercaSuper" class="logo">
            <p class="contenedor__logo__titulo">Merca<br><span class="contenedor__logo__titulo--spam">Súper</span></p>
        </div>

        <div class="contenedor__form">
            <h1 class="titulo">¡Bienvenido!</h1>
            <form action="#" method="POST" class="formulario">
                <div class="contenedor__input">
                    <label class="formulario__label__u">Usuario:</label>
                    <input class="formulario__text"  type="text" name="username">
                </div>
                <div class="contenedor__input contenedor__input--ultimo">
                    <label class="formulario__label__p">Contraseña:</label>
                    <input class="formulario__text" type="text" name="passwd">
                </div>
                <input class="btn__celeste" type="submit" value="Ingresar">
                <div class="r">
                    <p class="registro">¿No tienes cuenta?  -
                        <a href="registro.php" class="registro--span">Regístrate</a>
                    </p>
                </div>
            </form>
        </div>
    </main> <!--fin.main-->

</body> <!--fin.body-->

</html> <!--fin.html-->