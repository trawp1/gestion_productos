<?php

require_once __DIR__ . "/../models/clientes.php";

class clientecontroller {

    public function index(){
        $cliente = new cliente();
        $clientes = $cliente->getAll();

        require_once __DIR__ . "/../views/clientes/index.php";
    }
}
?>