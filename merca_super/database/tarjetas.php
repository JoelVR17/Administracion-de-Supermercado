<?php
include_once 'conexion.php';
require_once 'scripts.php';

//  SE ESTABLECE FUNCION PARA DETERMINAR LA CANTIDAD DE CATEGORIAS
function cantidadCategorias($conexion) {

    $sql = "SELECT COUNT(*) AS cantidad FROM categoria";

    $resultado = $conexion->prepare($sql);
    $resultado -> execute();

    while ($registro = $resultado -> fetch(PDO::FETCH_ASSOC)) {
        $cantidad = $registro['cantidad'];
    }

    return $cantidad;
}

//  SE ESTABLECE FUNCION PARA DETERMINAR LA CANTIDAD DE USUARIOS ADMIN
function cantidadUsuariosAdmin($conexion) {

    $sql = "SELECT COUNT(*) AS cantidad FROM usuarios WHERE rol_id = 1";

    $resultado = $conexion->prepare($sql);
    $resultado -> execute();

    while ($registro = $resultado -> fetch(PDO::FETCH_ASSOC)) {
        $cantidad = $registro['cantidad'];
    }

    return $cantidad;
}

//  SE ESTABLECE FUNCION PARA DETERMINAR LA CANTIDAD DE USUARIOS NORMALES
function cantidadUsuariosNormales($conexion) {

    $sql = "SELECT COUNT(*) AS cantidad FROM usuarios WHERE rol_id = 2";

    $resultado = $conexion->prepare($sql);
    $resultado -> execute();

    while ($registro = $resultado -> fetch(PDO::FETCH_ASSOC)) {
        $cantidad = $registro['cantidad'];
    }

    return $cantidad;
}
//  SE ESTABLECE FUNCION PARA DETERMINAR LA CANTIDAD DE PRODUCTOS
function cantidadProductos($conexion) {

    $sql = "SELECT COUNT(*) AS cantidad FROM productos";

    $resultado = $conexion->prepare($sql);
    $resultado -> execute();

    while ($registro = $resultado -> fetch(PDO::FETCH_ASSOC)) {
        $cantidad = $registro['cantidad'];
    }

    return $cantidad;
}