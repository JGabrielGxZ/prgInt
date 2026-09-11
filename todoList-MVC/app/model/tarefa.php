<?php 
class Tarefa {

    private $conn;

    private function __construct() {
        $db = new Db();
        $this->conn = $db->conectar();
    }
}



?>