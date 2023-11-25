<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base_de_datos = "dramascoreanos";
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);

if(!$conexion){
    die("conexion fallida: ". mysqli_connect_error());
}

?>