<?php
require('../config/database.php');

class Carrito
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=romantechmx', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function agregarProductoAlCarrito($data)
    {
        
        try {
            
            
            $sql = "INSERT INTO productos (id_sesion, sku_producto) 
                        VALUES (?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->__GET('id_sesion'),
                        $data->__GET('sku_producto'),
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function iniciarSesionSiNoEstaIniciada()
    {
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }
}
