<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion) {
    case 1:       
        // Este procedimiento se encarga de borrar consultas en la base datos
        $consulta = "CALL borrarConsulta('$id') ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 2:    
        // Mostrar consultas de la base datos
        $consulta = "CALL mostrarConsultas()";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:
        // Llamar función para retornar el mensaje segun el id_consulta
        $consulta = "SELECT identificarMensaje('$id')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data = $resultado -> fetchColumn(); // fetchColumn para obtener un solo dato que es id_consulta
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); // Envio el array final formato json a AJAX
$conexion=null;