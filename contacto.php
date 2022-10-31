<?php
require_once('php/header.php')
?>
    <body>
        <main>                       
            <section>
                <form class="formulario sombra">
                    <fieldset>
                        <legend>Contactanos llenando todos los campos</legend>

                        <div class="contenedor-campos">

                            <div class="campo">
                                <label>Nombre</label>
                                <input class="input-text" type="text"a placeholder="Tu nombre">
                            </div>
                            
                            <div class="campo">
                                <label>Telefono</label>
                                <input class="input-text" type="tel"a placeholder="Tu telefono">
                            </div>
                            
                            <div class="campo">
                                <label>Correo</label>
                                <input class="input-text" type="email"a placeholder="Tu email">
                            </div>
                            
                            <div class="campo">
                                <label>Mensaje</label>
                                <textarea class="input-text"></textarea>
                            </div>                

                        </div><!-- .contenedor-campos -->
                        <div><!--class="alinear-derecha flex">-->
                            <input class="boton-formulario w-sm-100" type="submit" value="Enviar">
                        </div>
                        
                    </fieldset>
                </form>
            </section>
            
        </main>
        <?php
            require_once('php/footer.php')
        ?> 
    </body>
</html>