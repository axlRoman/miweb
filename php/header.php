<?php
require_once('config/config.php');
require_once('config/database.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device=width, initial-scale1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/24d0778069.js" crossorigin="anonymous"></script>
    <link rel="icon" href="imgs/Logo RomanTech.png">
    <title>RomanTech</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <!--<div class="navbar"> -->
        <!--<nav class="navegacion en logo"></nav>-->
        <a href="index.html" class="logo">
            <img src="imgs/Logo RomanTech.png" alt="Logo de la compañia" class="logo-img">
        </a>


        <div class="buscar">
            <input type="text" placeholder="Buscar" required class="buscar">
            <a href="resultados.php">
                <div class="boton">
                    <i class="fas fa-search icon"></i>
                </div>
            </a>
        </div>
        <div>
            <a href="cart.php" class="carrito">
                <i class="fas fa-cart-shopping icon">
                    <span id="num-cart"> <?php echo $num_cart; ?></span>
                </i>
            </a>
        </div>
        <!--
            -->
    </header>
    <div class="nav-bg">
        <nav class="navegacion-principal">
            <a href="index.php">Inicio</a>
            <a href="quienes-somos.php">Quienes Somos</a>
            <a href="catalogo.php">Catalogo</a>
            <a href="login.php">Iniciar Sesion</a>
            <a href="contacto.php">Contacto</a>
            <!--<a href="#">Videojuegos</a>-->
        </nav>
    </div>
</body>

</html>