<?php
    class Carrito
    {
        private $id_sesion;
        private $SKU;

        public function __GET($k) { return $this->$k; }
        public function __SET($k, $v) { return $this->$k = $v; }        
    }