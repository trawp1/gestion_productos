<?php

require_once __DIR__ . "/../../config/database.php";

class producto
{
    private $connection;

    public function __construct()
    {
        $database = new database();

        $this->connection = $database->connect();
    }

    public function getALL()
    {
        try {

            $sql = "SELECT
                        productos.id,
                        productos.nombre,
                        productos.precio,
                        productos.id_categoria,
                        categorias.nombre AS nombre_categoria,
                        categorias.descripcion_categoria,
                        proveedores.nombre AS nombre_proveedor
                    FROM productos
                    LEFT JOIN categorias
                        ON productos.id_categoria = categorias.id_categoria
                    LEFT JOIN proveedores
                        ON productos.idproveedor = proveedores.idProveedor";

            $consulta = $this->connection->prepare($sql);

            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $s) {

            echo "Ocurrió un error: " . $s->getMessage();

            return [];
        }
    }


    public function getById($id)
    {
        try {

            $sql = "SELECT * FROM productos WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(':id', $id, PDO::PARAM_INT);

            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Ocurrió un error en la tabla producto " . $e->getMessage();

            return null;
        }
    }
}

?>
