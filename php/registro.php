<?php
require 'conexion.php';

if(isset($_POST['register'])){

    //Obtener los valores enviados por el formulario
$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];
$correo = $_POST['email'];
$ubicacion = $_POST['pais'];

//Insertamos los datos en la base de datos
$sql = "INSERT INTO usuarios (id_user, nombre_user,contrasena_user,email, pais) VALUES (null, '$usuario', '$contrasena', '$correo','$ubicacion')";
$resultado = mysqli_query($conexion,$sql);
if($resultado){
    //insercion correcta
    echo "¡Se insertaron los datos correctamente!";
}else{
    //Inserción fallida
    echo "¡No se puede insertar la informacion!"."</br>";
    echo "Error: " . $sql . "</br>" . mysqli_error($conexion);
 }
}

?>