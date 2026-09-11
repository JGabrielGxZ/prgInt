<?php 
    class Db{
        private $host = "localhost";
        private $user = "root";
        private $hash = "";
        private $database = "todo_list";

        public $conexao = "";

        public function conectar() {
            try {
                $this->conexao = new myslqi($this->host, $this->user, $this->hash, $this->database);
                if ($this->conexao->connect_error) {
                    die("Deu erro na conexão com o banco: " . $this->conexao->connect_error);
                }
                return $this->conexao;
            } catch (Exception $e) {
                die("Erro: " . $e->getMessage());
            }
        }
    }
?>