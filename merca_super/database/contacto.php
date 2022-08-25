<?php 
    require_once "conexion.php";
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $tipo_consulta = $_POST['tipo_consulta'];
    $telefono = (int)$_POST['telefono']; // Conversion de datos
    $mensaje = $_POST['mensaje'];
    
    $consulta = "CALL agregarConsulta('$nombre','$apellido','$correo','$tipo_consulta','$telefono','$mensaje')";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    echo 1;

?>