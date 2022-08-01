<?php 
    require_once "conexion.php";
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = (int)$_POST['cedula']; // Conversion de datos
    $username = $_POST['username'];
    $passwd = sha1($_POST['passwd']); // Con sha1 encriptamos la contraseña
    $rol = 2; // El rol por defecto para cada usuario que se registre es 2, siendo usuario y no admin
    // $sesion = date('Y-m-d h:i:s', time());  // Obtener fecha sesión
    

    if (buscaRepetido($username,$passwd,$conexion)==1) {
        echo 2;
    }
    else {
        // Procedimiento almacenado para registrar un usuario nuevo
        $consulta = "CALL registrarUsuario('$nombre','$apellido','$cedula','$username','$passwd','$rol')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        echo 1;
    }
    
    function buscaRepetido ($user,$pass,$conexion) {
        $consulta = "SELECT buscarRepetido('$user','$pass')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchColumn(); // Esto trae la cantidad de columnas/resultados de acuerdo con los parametros
        // Si data es mayor a 0 indica que existe un resultado
        if ($data > 0) {
            return 1;
        } 
        // Si data no es mayor a 0 indica que el usuario no existe y se puede agregar
        else {
            return 0;
        }
    }

?>