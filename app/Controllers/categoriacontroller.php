<?php

require_once __DIR__ . "/../models/categoria.php";

class categoriacontroller {

    public function index(){
        $categoria = new categoria();
        $categorias = $categoria->getAll();

        require_once __DIR__ . "/../views/categoria/index.php";
    }
}

?>