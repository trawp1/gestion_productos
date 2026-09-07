<?php
require_once __DIR__ . "/../../config/database.php";

class producto{
    private $connection;

    public function __construct(){
        $database = new database();

        $this->connection = $database->connect();
    }
    public function getALL(){
        $sql= "SELECT * FROM productos";

        $consulta=$this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);

    $sql2 = "SELECT * FROM productos WHERE id = 1";
    }

    }
   
?>