<?php
require_once('config/config.php');
require_once('config/database.php');

$db = new Database();
$con = $db->conectar();

$sku = isset($_GET['SKU']) ? $_GET['SKU'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

$token_tmp = hash_hmac('sha1', $sku, KEY_TOKEN);
if ($token == $token_tmp) {
    $sql = $con->prepare("SELECT COUNT(SKU) FROM productos WHERE SKU=? ");
    $sql->execute([$sku]);
    if ($sql->fetchColumn() > 0) {
        $sql = $con->prepare("SELECT Nombre, Descripcion, Precio, Inventario FROM productos WHERE SKU=?");
        $sql->execute([$sku]);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $nombre = $row['Nombre'];
        $descripcion = $row['Descripcion'];

        $precio = $row['Precio'];
        $inventario = $row['Inventario'];
    }
}
?>

<?php
require_once('clases/funciones.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device=width, initial-scale1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/24d0778069.js" crossorigin="anonymous"></script>
    <link rel="icon" href="imgs/Logo RomanTech.png">
    <title>Detalles</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-detalle.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <header>
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
    </header>
    <div class="nav-bg">
        <nav class="navegacion-principal">
            <a href="index.php">Inicio</a>
            <a href="quienes-somos.php">Quienes Somos</a>
            <a href="catalogo.php">Catalogo</a>
            <a href="login.php">Iniciar Sesion</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </div>



    <main>
        <div class="producto">
            <div class="contenedor clearfix">
                <div class="producto-content">
                    <div class="producto-imagen">
                        <?php $imagen = "imgs/productos/" . $sku . "/principal.jpg"; ?>

                        <img src="<?php echo $imagen ?>" alt="">
                    </div>
                    <div class="producto-mas">
                        <div class="producto-nombre">
                            <p>
                                <?php echo $nombre; ?>
                            </p>
                        </div>
                        <br>
                        <div class="producto-precio">
                            <span class="precio">
                                <?php echo MONEDA .  number_format($row['Precio'], 2, '.', ','); ?>
                            </span>
                        </div>
                        <br>
                        <div class="producto-datos">
                            <div class="pago">
                                <p>
                                    <i class="far fa-credit-card"></i>
                                    &nbsp;12 meses de <?php echo MONEDA .  number_format(($row['Precio'] / 12) + 133, 2, '.', ','); ?><br>
                                    <img src="imgs/pagos.jpg" alt="metodos de pago">
                                </p>
                            </div>
                            <br>
                            <div class="envio">
                                <p>
                                    <i class="fas fa-truck"></i>
                                    &nbsp; Envio gratis a todo el pais
                                    <br>
                                    <span>Conoce los tiempos y las fornas de envio</span>
                                </p>
                            </div>
                            <br>
                            <div class="cantidad">
                                <label for="cantidad_producto">Cantidad:</label>
                                <input type="number" name="cantidad_producto" id="cantidad_producto" max="<?php echo $inventario ?>" min="1" value="1">
                                <span>(<?php if ($inventario == 1) {
                                            echo "Ultima Disponible";
                                        } else {
                                            echo $inventario;
                                            echo "  Disponibles";
                                        } ?>) </span>
                            </div>
                            <br>
                            <div class="botones">
                                <button type="button" class="button">Comprar ahora</button>
                                <button type="submit" class="button transparente" action="cart.php"> Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                    <div class="producto-informacion">
                        <nav>
                            <a href="#descripcion">Descripcion</a>
                        </nav>
                        <div class="informacion clearfix">
                            <div class="" id="descripcion">
                                <p>
                                    <?php echo $descripcion; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php
require_once('php/footer.php');
?>

</html>