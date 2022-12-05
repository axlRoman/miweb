<?php
    class CarritoModel
    {
        private $pdo;

        public function __CONSTRUCT()
        {
            try
            {
                $this->pdo = new PDO('mysql:host=localhost;dbname=romantechmx', 'root', '');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Contar()
        {
            try
            {
                $stm = $this->pdo->prepare("SELECT COUNT(*) FROM carrito_usuarios");
                $stm->execute();
                $r = $stm->fetch(PDO::FETCH_OBJ);
                return $r;
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Listar()
        {
            try
            {
                $result = array();

                $stm = $this->pdo->prepare("SELECT * FROM carrito_usuarios");
                $stm->execute();

                foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
                {
                    $cart = new Carrito();

                    $cart->__SET('id_sesion', $r->id_sesion);
                    $cart->__SET('SKU', $r->SKU);                    

                    $result[] = $cart;
                }
                return $result;
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Obtener($SKU)
        {
            try
            {
                $stm = $this->pdo->prepare("SELECT * FROM carrito_usuarios WHERE id_sesion = ?");

                $stm->execute(array($SKU));
                $r = $stm->fetch(PDO::FETCH_OBJ);

                $cart = new Carrito();

                $cart->__SET('id_sesion', $r->id_sesion);
                $cart->__SET('SKU', $r->SKU);                    

                return $cart;
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Eliminar($SKU)
        {
            try
            {
                $stm =  $this->pdo->prepare("DELETE FROM carrito_usuarios WHERE SKU = ?");

                $stm->execute(array($SKU));
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Agregar(Carrito $data)
        {
            try
            {
                $sql = "INSERT INTO carrito_usuarios (id_sesion, SKU) 
                        VALUES (?, ?, ?, ?)";

                $this->pdo->prepare($sql)
                            ->execute(
                                array(                                    
                                    $data->__GET('id_sesion'),
                                    $data->__GET('SKU')
                                    )
                                );
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

    }