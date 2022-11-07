<?php
require_once('php/header.php');
require_once('config/config.php');
require_once('config/database.php');

$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT SKU, Nombre, Precio FROM productos ");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<body>

    <main>
        <div class="productos-show">
            <div class="contenedor clearfix">
                <div id="box">
                    <div id="box-heading">
                        Catalogo
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

                                    <img  class="imgs" src="<?php echo $imagen; ?>" alt="">
                                </a>
                                

                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $row['Nombre']; ?>
                                    </h5>
                                    <p>
                                    <?php echo MONEDA . number_format($row['Precio'], 2,'.', ','); ?>
                                    </p>
                                </div>

                            </div>
                        <?php } ?>
                    </div>
                    
                </div>                    
            </div>
        </div>
    </main>

<!--
                            <a href="#">
                                <figure>
                                    <img src="imgs/Tarjetas madre/CP-ASUS-90MB17E0-M0AAY0-1.webp" alt="tarjeta madre asus">
                                    <div class="descripcion">
                                        <h5>
                                        Tarjeta Madre ASUS Micro-ATX PRIME H510M-E, S-1200, Intel H510, HDMI, 64GB DDR4 para Intel 
                                        </h5>
                                        <p>
                                            precio
                                        </p>

                                        <div>
                                        <a href="#">Agregar al Carrito</a>    
                                        </div>
                                        
                                    </div>
                                </figure>                        
                            </a>
                    -->


<!--

        <main class="contenedor sombra">
            <div class="productos">
                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Tarjetas madre/CP-ASUS-90MB17E0-M0AAY0-1.webp" alt="tarjeta madre asus">
                            <div class="descripcion">
                                Tarjeta Madre ASUS Micro-ATX PRIME H510M-E, S-1200, Intel H510, HDMI, 64GB DDR4 para Intel 
                            </div>
                        </figure>                        
                    </a>
                </div>     
                           
                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Memorias ram/CP-CORSAIR-CMSO8GX3M1C1600C11-5a934d.webp" alt="memoria ram">
                            <div class="descripcion">
                                Memoria RAM Corsair Value Select DDR3L, 1600MHz, 8GB, SO-DIMM, 1.35v
                            </div>
                        </figure>                        
                    </a>
                </div>
                
                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Accesorios/CP-LOGITECH-980-001224-1.webp" alt="bocinas">
                            <div class="descripcion">
                                Logitech Bocinas Multimedia con Subwoofer Z213, Alámbrico, 2.1, 7W RMS, Negro 
                            </div>
                        </figure>                        
                    </a>
                </div>     

                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Laptops/CP-DELL-V3510_I38256BWNXPS_522-79e74d.webp" alt="laptop">
                            <div class="descripcion">
                                Laptop Dell Vostro 3511 15.6" HD, Intel Core i3-1115G4 3GHz, 8GB, 256GB SSD, Windows 11 Pro 64-bit, Español, Negro 
                            </div>
                        </figure>                        
                    </a>
                </div>

                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Tarjetas de video/CP-EVGA-06G-P4-2068-KR-3.jpg" alt="tarjeta de video">
                            <div class="descripcion">
                                Tarjeta de Video NVIDIA GeForce RTX 2060 KO ULTRA GAMING, 6GB 192-bit GDDR6, PCI Express 3.0
                            </div>
                        </figure>                        
                    </a>
                </div>      

                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Tarjetas de video/CP-GIGABYTE-GV-N2060D6-6GDREV20-a13fdd.webp" alt="tarjeta de video">
                            <div class="descripcion">
                                Tarjeta de Video Gigabyte NVIDIA GeForce RTX 2060 D6 6G (rev. 2.0), 6GB 192-bit GDDR6, PCI Express x16 3.0
                            </div>
                        </figure>                        
                    </a>
                </div>

                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Tarjetas de video/CP-GIGABYTE-GV-N2060D6-6GDREV20-bb4d40.webp" alt="tarjeta de video">
                            <div class="descripcion">
                                Tarjeta de Video Gigabyte NVIDIA GeForce RTX 2060 D6 6G (rev. 1.0), 6GB 192-bit GDDR6, PCI Express x16 3.0 
                            </div>
                        </figure>                        
                    </a>
                </div>  

                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Tarjetas de video/CP-MSI-GEFORCERTX2060VENTUS12GOC-4c9f99.webp" alt="tarjeta de video">
                            <div class="descripcion">
                                Tarjeta de Video MSI NVIDIA GeForce RTX 2060 VENTUS OC, 12GB 192-bit GDDR6, PCI Express x16 3.0 
                            </div>
                        </figure>                        
                    </a>
                </div>

                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Laptops/CP-LENOVO-82C3001JLM-3.webp" alt="laptop">
                            <div class="descripcion">
                                Laptop Lenovo V15 15.6" HD, Intel Celeron N4020 1.10GHz, 4GB, 500GB, Windows 10 Home 64-bit, Español, Gris
                            </div>
                        </figure>                        
                    </a>
                </div>          
                      
                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Procesadores/CP-AMD-100-100000252BOX-1.webp" alt="procesador">
                            <div class="descripcion">
                                Procesador AMD Ryzen 5 5600G con Gráficos Radeon 7, S-AM4, 3.90GHz, Six-Core, 16MB L3 Caché - incluye Disipador Wraith Stealth 
                            </div>
                        </figure>                        
                    </a>
                </div>

                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Tarjetas madre/CP-GIGABYTE-A520MS2H-1.jpg" alt="tarjeta madre">
                            <div class="descripcion">
                                Tarjeta Madre Gigabyte micro ATX A520M S2H, S-AM4, AMD A520, HDMI, 64GB DDR4 para AMD ― No es Compatible con Ryzen 5 3400G y Ryzen 3 3200G (Revisar Compatibilidades en la Página del Fabricante)
                            </div>
                        </figure>                        
                    </a>
                </div>      

                <div class="producto">
                    <a href="#">
                        <figure>
                            <img src="imgs/Tarjetas madre/CP-BIOSTAR-A520MH-1.jpg" alt="tarjeta madre">
                            <div class="descripcion">
                                Tarjeta Madre Biostar micro ATX A520MH, S-AM4, AMD A520, HDMI, 64GB DDR4 para AMD ― Revisar Compatibilidades en la Página del Fabricante
                            </div>
                        </figure>                        
                    </a>
                </div>
                
            </div>
                
        </main>
-->
        <?php
            require_once('php/footer.php')
        ?> 
    </body>
</html>