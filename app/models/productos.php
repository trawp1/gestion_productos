<?php
require_once __DIR__ . "/../../config/database.php";

class producto{
    private $connection;

    public function __construct(){
        $database = new database();

        $this->connection = $database->connect();
    }
    public function getALL(){
    $sql = "SELECT 
                productos.nombre,
                productos.precio,
                productos.categoria,
                proveedores.nombre AS nombre_proveedor
            FROM productos
            INNER JOIN proveedores
                ON productos.idproveedor = proveedores.idProveedor";

    $consulta = $this->connection->query($sql);

    return $consulta->fetchALL(PDO::FETCH_ASSOC);
}

public function getById($id){
    $sql = "SELECT 
                productos.id,
                productos.nombre,
                productos.precio,
                productos.categoria,
                proveedores.nombre AS nombre_proveedor
            FROM productos
            INNER JOIN proveedores
                ON productos.idproveedor = proveedores.idProveedor
            WHERE productos.id = $id";

    $consulta = $this->connection->query($sql);

    return $consulta->fetch(PDO::FETCH_ASSOC);
}


    }
   
?>