<?php 
    class db{
        private $host = "localhost";
        private $user = "root";
        private $hash = "";
        private $database = "todo_lst";

        public $conexao = "";

        public function conectar() {
            $this->conexao = new myslqi($this->host, $this->user, $this->hash, $this->database);
            if ($this->conexao->connect_error) {
                die("Deu erro na conexão com o banco: " . $this->conexao->connect_error);
            }
            return $this->conexao;     
        }
    }
?>