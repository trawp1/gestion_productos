<?php

require_once __DIR__ . "/../../config/database.php";

class cliente {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM clientes";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>