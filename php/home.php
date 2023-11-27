<?php
session_start();
echo '<link href="../styleh.css" type="text/css" rel="stylesheet">';
echo '<link href="../imagenes/favicon.png" type="image/x-icon" rel="shortcut icon">';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="">
    <title>ChinguDramas Home</title>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <label for="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="http://127.0.0.1:5500/ProyectoFinalWeb/inicio.html">Cerrar Sesión</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container"> 
            <div class="header-txt">
                <h1>Hola Bienvenid@! <span> <?php echo $_SESSION['User'];?></span> </h1>
                <p>
                    Bienvenido a este tu espacio para conocer sobre K-dramas,
                    En esta pagina encontrarás las reseñas de tus dramas favoritos
                    y podrás conocer mas sobre su contenido. Inicia sesión para 
                    comenzar a explorar este maravilloso mundo. 
                </p>
                <div class="butons">
                    <a href=""></a>
                </div>

            </div>
        </div>
    </header>

    <section class="popular container">
        <h2>K-Dramas populares</h2>

        <div class="popular-content">
            <img src="../imagenes/Kingtheland.jpg" alt=""  >
            <img src="../imagenes/EstamosM.jpg" alt="" >
            <img src="../imagenes/StrongWoman.jpg" alt="" >
            <img src="../imagenes/TrueBeauty.jpg" alt="" >
        </div>
    </section>
</body>
</html>
