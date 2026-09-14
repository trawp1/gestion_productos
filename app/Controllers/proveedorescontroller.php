<?php
require_once __DIR__ ."/../models/proveedores.php";

class proveedorcontroller{
    public function index(){
        $proveedor = new proveedor();
        $proveedores= $proveedor->getALL("0 OR 1=1");

        require_once __DIR__."/../views/proveedores/index.php";
    }
}


?>