<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$cedula = (isset($_POST['cedula'])) ? $_POST['cedula'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$passwd = (isset($_POST['passwd'])) ? $_POST['passwd'] : '';
$rol = (isset($_POST['rol'])) ? $_POST['rol'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion) {
    // Uso de procedimientos almacenados para el CRUD de la aplicacion
    case 1:
        // Llamar función para retornar el id_rol segun el nombre del rol
        $consulta = "SELECT identificarRol('$rol')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data = $resultado -> fetchColumn(); // fetchColumn para obtener un solo dato que es id_rol

        // LLamar procedimiento para agregar un nuevo usuario a la base de datos
        $pass = sha1($passwd);
        $consulta = "CALL agregarUsuario('$nombre','$apellido','$cedula','$usuario','$pass','$data')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        // Mostrar usuarios de la base datos
        $consulta = "CALL mostrarUsuarios()"; 
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;   
    case 2:       
        // Llamar función para retornar el id_rol segun el nombre del rol
        $consulta = "SELECT identificarRol('$rol')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data = $resultado -> fetchColumn(); // fetchColumn para obtener un solo dato que es id_rol

        // Este procedimiento actualiza los usuarios existentes en base datos
        if ($passwd != 'administrador' || $passwd != 'usuario') {
            $pass = sha1($passwd);
            $consulta = "CALL actualizarUsuario('$id','$nombre','$apellido','$cedula','$usuario','$pass','$data')";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
        }

        // Mostrar productos de la base datos
        $consulta = "CALL mostrarUsuarios()";     
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:       
        // Este procedimiento se encarga de borrar usuarios en la base datos
        $consulta = "CALL borrarUsuario('$id') ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        // Mostrar usuarios de la base datos
        $consulta = "CALL mostrarUsuarios()";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); // Envio el array final formato json a AJAX
$conexion=null;