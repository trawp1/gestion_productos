<?php

require_once __DIR__ ."/../app/controllers/productosController.php";

$productoController= new productoController();
$productoController->index();

require_once __DIR__ . "/../app/Controllers/clientecontroller.php";

$clienteController = new clientecontroller();
$clienteController->index();


require_once __DIR__ . "/../app/Controllers/proveedorescontroller.php";

$proveedorController = new proveedorController();
$proveedorController->index();


?>