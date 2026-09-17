<?php

require_once __DIR__ . "/../../config/database.php";

class categoria
{
    private $connection;

    public function __construct()
    {
        $database = new database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try {

            $sql = "SELECT 
                        id_categoria,
                        nombre,
                        descripcion_categoria
                    FROM categorias";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $p) {

            echo "Ocurrió un error  en categoria.php en esta linea " . $p->getMessage();

            return [];

        }
    }
}

?>
