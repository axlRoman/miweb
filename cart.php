<?php
require_once('php/header.php');



require_once 'carrito/cart.entidad.php';
require_once 'carrito/card.model.php';

//Logica para eliminar en el carrito
$cart = new Carrito();
$model = new CarritoModel();

if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
        case 'eliminar':
            $model->Eliminar($_REQUEST['sku_producto']);
            header('Location: cart.php');
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-carrito.css">
    <title>Carrito de Compras</title>
</head>

<body>

    <div class="carri   to-contenedor">
        <div class="contenedor clearfix">
            <div class="carrito-contenido">

                Tu carrito de RomanTech esta vacio
                <table id="lista-carrito" class="table">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                    Compra</a>
            </div>
        </div>
    </div>

    <?php
    require_once('php/footer.php')
    ?>
</body>

</html>