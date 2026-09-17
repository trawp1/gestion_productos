<?php

require_once __DIR__ . "/../../config/database.php";

class proveedor
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

            $sql = "SELECT * FROM proveedores";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $a) {

            echo "Ocurrió un error en la tabla provedores: " . $a->getMessage();

            return [];
        }
    }
}

?>
