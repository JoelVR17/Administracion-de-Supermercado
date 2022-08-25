<?php 
class Conexion {	  
    public function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'super_merca');  // Nombre BD
        define('usuario', 'root');
        define('password', 'mantoara2310');	// Agregar Passwd MySQL/phpMyAdmin			        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de conexión es: ". $e->getMessage());
        }
    }
}