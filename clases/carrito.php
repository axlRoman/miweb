<?php
 require_once ('../config/config.php');

 if(isset($_POST['SKU']))
 {
    $sku = $_POST['SKU'];
    $token = $_POST['token'];

    $token_tmp = hash_hmac('sha1', $sku, KEY_TOKEN);
    if ($token == $token_tmp) {

        if(isset($_SESSION['carrito']['productos'][$sku])){
            $_SESSION['carrito']['productos'][$sku] += 1;
        }
        else{
            $_SESSION['carrito']['productos'][$sku] = 1;
        }

        $datos['numero'] = count($_SESSION['carrito']['productos']);
        $datos['ok'] = true;
    }
    else
    {
        $datos['ok'] = false;
    }
 }
 else
 {
    $datos['ok'] = false;
 }

 echo json_encode($datos);
