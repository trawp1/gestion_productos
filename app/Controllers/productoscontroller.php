<?php
require_once __DIR__ ."/../models/productos.php";

class productocontroller{
    public function index(){
        $producto = new producto();
        $productos= $producto->getALL();

        require_once __DIR__."/../views/productos/index.php";
    }
}


?>