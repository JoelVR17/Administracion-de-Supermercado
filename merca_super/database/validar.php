<?php
function validarRol() {
    include_once 'conexion.php';

    session_start();

    if (isset($_GET['cerrar_sesion'])) {
        session_unset();
        session_destroy();
    }

    if (isset($_SESSION['rol'])) {
        switch ($_SESSION['rol']) {
            case 1:
                header('location: indexadmin.php'); // Esto se cambia
                break;
            case 2:
                header('location: index.php'); // Esto se cambia
                break;
            default:
        }
    }

    /* Esto sirve para validar/autenticar a los usuarios */
    if (isset($_POST['username']) && isset($_POST['passwd'])) {
        $username = $_POST['username'];
        $passwd = SHA1($_POST['passwd']);
        // Nueva instancia/objeto 
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();
        // Ejecutar consulta
        $consulta = "CALL validarLogin('$username','$passwd')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $row = $resultado->fetch(PDO::FETCH_NUM);
        if ($row == true) {

            // Validar rol
            $id = $row[0]; // Indice del rol en arreglo o posición del id en tabla de usuarios
            $nombre = $row[1]; // Indice del rol en arreglo o posición del id en tabla de usuarios
            $apellido = $row[2]; // Indice del rol en arreglo o posición del id en tabla de usuarios
            $cedula = $row[3]; // Indice del rol en arreglo o posición del id en tabla de usuarios
            $usuario = $row[4]; // Indice del rol en arreglo o posición del id en tabla de usuarios
            $rol = $row[7]; // Indice del rol en arreglo o posición del rol en tabla de usuarios
            $nombreCompleto = $row[1] . " " . $row[2]; 

            //  SE LLENA EL SESSION
            $_SESSION['id'] = $id;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellido'] = $apellido;
            $_SESSION['cedula'] = $cedula;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['rol'] = $rol;
            $_SESSION['nombreCompleto'] = $nombreCompleto;

            switch ($_SESSION['rol']) {
                case 1:
                    header('location: indexadmin.php'); // Esto se cambia
                    break;
                case 2:
                    header('location: index.php'); // Esto se cambia
                    break;
                default:
            }
        } else {
            // No existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }
    }
}

function validarAdmin () {
    session_start();
    if (!isset($_SESSION['rol'])) {
        header('location: login.php'); 
    }
    else {
        if($_SESSION['rol'] != 1){
            header('location: login.php'); 
        }
    }
}

function validarUsuario () {
    session_start();
    if (!isset($_SESSION['rol'])) {
        header('location: login.php'); 
    }
    else {
        if ($_SESSION['rol'] != 2) {
            header('location: login.php'); 
        }
    }
}


function usuarioId (): int {
    $id = $_SESSION['id'];
    return $id;
}

function usuarioNombre (): string {
    $nombre_usuario = $_SESSION['nombreCompleto'];
    return $nombre_usuario;
}


// En caso que se agregue una pantalla para gestionar perfil de admin se usa este
/*
function validarPerfil () {
    session_start();
    if(!isset($_SESSION['rol'])) {
        header('location: login.php'); // Esto se debe cambiar
    }
}
*/

function cerrarSesion() {
    session_start();
    unset($_SESSION['rol']);
    header("location: login.php");
}