<?php

require_once __DIR__ . "/../../config/database.php";

class producto {
    private $connection;

    public function __construct() {
        $database = new database();

        $this->connection = $database->connect();
    }

    public function getALL() {
    $sql = "SELECT 
                productos.id,
                productos.nombre,
                productos.precio,
                productos.categoria,
                productos.id_categoria,
                proveedores.nombre AS nombre_proveedor,
                categorias.nombre AS nombre_categoria
            FROM productos
            INNER JOIN proveedores
                ON productos.idproveedor = proveedores.idProveedor
            INNER JOIN categorias
                ON productos.id_categoria = categorias.id_categoria";

    $consulta = $this->connection->query($sql);

    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

    public function getById($id) {

    $sql = "SELECT * FROM productos WHERE id = :id";

    $consulta = $this->connection->prepare($sql);

    $consulta->bindParam(':id', $id, PDO::PARAM_INT);

    $consulta->execute();

    return $consulta->fetch(PDO::FETCH_ASSOC);
}
}

?>