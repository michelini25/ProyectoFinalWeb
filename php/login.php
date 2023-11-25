<?php

require 'conexion.php';

if(isset($_POST['login'])){
    //Obtener los valores enviados por el formulario
$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];

//Ejecutamosla insercion a la base de datos utilizando la funcion mysqli_query
$sql = "SELECT * FROM usuarios WHERE nombre_user= '$usuario' and contrasena_user = '$contrasena'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
    if($numero_registros != 0){
        //Inicio de sesion exitoso
        echo "Inicio de sesión exitoso. Bienvenido, ". $usuario . "!";
    }else{
        //Credenciales invalidas
        echo "Credenciales invalidas. Por favor, verifica tu nombre de usuario y/o contrseña."."</br>";
        echo "Error: ". $sql . "</br>" . mysqli_error($conexion);
        }
    }

?>