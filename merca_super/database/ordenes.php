<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
$cantidad = (isset($_POST['cantidad'])) ? $_POST['cantidad'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id_orden = 1;
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion) {
    case 1:
        // LLamar procedimiento para agregar un nuevo producto a la base de datos
        $consulta = "CALL agregarProductoCarrito('$id_orden','$nombre','$descripcion','$precio', '$cantidad')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        // Mostrar productos de la base datos
        $consulta = "CALL mostrarProductosCarrito('$id_orden')"; 
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;   
    case 2:        
        // Este procedimiento actualiza los productos existentes en base datos
        $consulta = "CALL actualizarProductoCarrito('$id_orden','$precio','$cantidad')";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        // Mostrar productos de la base datos
        $consulta = "CALL mostrarProductosCarrito('$id_orden')";     
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:       
        // Este procedimiento se encarga de borrar productos en la base datos
        $consulta = "CALL borrarProductoCarrito('$id') ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        // Mostrar productos de la base datos
        $consulta = "CALL mostrarProductosCarrito('$id_orden')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); // Envio el array final formato json a AJAX
$conexion=null;