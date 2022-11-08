<?php
require_once('php/header.php');
require_once('config/config.php');
require_once('config/database.php');
$db = new Database();
$con = $db->conectar();


$sql = $con->prepare("SELECT SKU, Nombre, Precio FROM productos LIMIT 0, 4;");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<body>
    <main>
        <div class="productos-show">
            <div class="contenedor clearfix">
                <div id="box">
                    <div id="box-heading">
                        Destacados
                    </div>
                    <div class="box-content">
                        <?php foreach($resultado as $row) { ?>                        
                            <div class="card sombra">
                            <a href="detalle.php?SKU=<?php echo $row['SKU']; ?>&token=<?php echo hash_hmac('sha1', $row['SKU'], KEY_TOKEN); ?>">
                                    <?php
                                        $sku = $row['SKU'];
                                        $imagen = "imgs/productos/" . $sku . "/principal.jpg";
                                        if(!file_exists($imagen)){
                                            $imagen = "imgs/no-photo.png";
                                        }
                                    ?>

                                    <img src="<?php echo $imagen; ?>" alt="">   
                                </a>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $row['Nombre']; ?>
                                    </h5>
                                    <p>
                                       <?php echo MONEDA .  number_format($row['Precio'], 2, '.', ','); ?>
                                    </p>
                                </div>

                            </div>
                        <?php } ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once('php/footer.php')
    ?>
</body>

</html>