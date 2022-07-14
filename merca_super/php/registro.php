<?php 

    require_once "conexion.php";
    $conexion=conexion();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $username = $_POST['username'];
    $passwd = sha1($_POST['passwd']); // Con sha1 encriptamos la contraseña
    $rol = 2; // El rol por defecto para cada usuario que se registre es 2, siendo usuario y no admin

    if (buscaRepetido($username,$passwd,$conexion)==1) {
        echo 2;
    }
    else {
        $sql = "INSERT INTO usuarios (nombre_usuario,apellido,cedula,usuario,passwd,rol_id) values ('$nombre','$apellido','$cedula','$username','$passwd','$rol')";
        echo $result = mysqli_query($conexion,$sql);
    }

    function buscaRepetido ($user,$pass,$conexion) {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND passwd= '$pass' ";
        $result = mysqli_query($conexion,$sql);
        
        if (mysqli_num_rows($result) > 0) {
            return 1;
        } 
        else {
            return 0;
        }
    }


?>