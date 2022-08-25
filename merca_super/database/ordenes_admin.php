<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$cliente = (isset($_POST['cliente'])) ? $_POST['cliente'] : '';


switch($opcion) {
    case 1:       
        $consulta = "SELECT identificarUsuarioId('$cliente')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data = $resultado -> fetchColumn(); // fetchColumn para obtener un solo dato que es id_categoria

        // Este procedimiento se encarga de borrar consultas en la base datos
        $consulta = "CALL borrarCompras('$data')";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 2:    
        // Mostrar consultas de la base datos
        $consulta = "CALL mostrarCompras()";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); // Envio el array final formato json a AJAX
$conexion=null;