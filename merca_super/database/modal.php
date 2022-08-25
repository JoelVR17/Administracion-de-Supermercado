<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$pago = (isset($_POST['pago'])) ? $_POST['pago'] : '';
$envio = (isset($_POST['envio'])) ? $_POST['envio'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

// Select para productos
$consulta_productos = "SELECT * FROM productos"; 
$resultado_productos = $conexion->prepare($consulta_productos);
$resultado_productos->execute();
$productos=$resultado_productos->fetchAll(PDO::FETCH_ASSOC); 


switch($opcion) {
    case 1:
        $consulta = "SELECT informacionProducto('$nombre')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data = $resultado -> fetchColumn(); 
        print json_encode($data, JSON_UNESCAPED_UNICODE); // Envio el array final formato json a AJAX
        $conexion=null;
        break;   
}


