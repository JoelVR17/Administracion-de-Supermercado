<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : '';
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
$cantidad = (isset($_POST['cantidad'])) ? $_POST['cantidad'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion) {
    // Uso de procedimientos almacenados para el CRUD de la aplicacion
    case 1:
        // Determinar condicionales en caso que una categoria no exista
        // Esta función retorna un valor int del id_categoria que se asocia en el procedimiento agregar producto
        $consulta = "SELECT identificarCategoria('$categoria')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data = $resultado -> fetchColumn(); // fetchColumn para obtener un solo dato que es id_categoria

        // LLamar procedimiento para agregar un nuevo producto a la base de datos
        $consulta = "CALL agregarProducto('$data','$nombre','$precio', '$cantidad')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        // Mostrar productos de la base datos
        $consulta = "CALL mostrarProductos()"; 
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;   
    case 2:        
        // Este procedimiento actualiza los productos existentes en base datos
        $consulta = "CALL actualizarProducto('$id','$precio','$cantidad')";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        // Mostrar productos de la base datos
        $consulta = "CALL mostrarProductos()";     
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:       
        // Este procedimiento se encarga de borrar productos en la base datos
        $consulta = "CALL borrarProducto('$id') ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        // Mostrar productos de la base datos
        $consulta = "CALL mostrarProductos()";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); // Envio el array final formato json a AJAX
$conexion=null;