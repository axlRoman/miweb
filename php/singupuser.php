<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "romantechmx";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexion fallida: ".$conexion->connect_error);
    }

    if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['pass'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        $sql = "INSERT INTO `usuarios` (`Nombre`, `Correo`, `Password`) 
                                VALUES ('$nombre', '$correo', '$pass')";

        if($conexion->query($sql) === true){

        }
        else{
            die("Error al insertar datos: ".$conexion->error);
        }
    }
/*
    if(validarEmail($correo) == true){
        header('Location: ../login.php');
    }
    else{
        header('Location: ../sign-up.php');
    }
*/
?>
<script languaje="javascript">
        function validarEmail(email) {
            expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!expr.test(email))
                alert("Error: La dirección de correo " + email + " es incorrecta.");
        }
</script>