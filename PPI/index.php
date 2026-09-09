<?php 

# Conexão com o banco
class dbconn{
        private $host = "localhost";
        private $hash = "";
        private $user = "root";
        private $banco = "todo_list";

        public $conectar;
        public function conexao() {
            try {
                $this->conectar = new mysqli($this->host, $this->user, $this->hash, $this->banco);

                if ($this->conectar->connect_error) {
                    throw new Exception($this->conectar->connect_error);
                }
                return $this->conectar;
            } catch (Exception $e) {
                die("ERRO:" . $e->getMessage());
            }
            
        }
}
# criacao de tarefas
$db = new dbconn();
$conn = $db_>conexao();

$desc = $_POST["descricao"];

try {
    $sql = "INSERT INTO tarefas(descricao) values $desc";
    $conn->query($sql);
} catch (\Throwable $th) {
    //throw $th;
}

# Exclusão de tarefas


$tarefas=[]; 
# Listar tarefas


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-list</title>
</head>
<body>

    <h1>TO-DO List</h1>
    <form action="index.php" method="POST">
        <input type="text" placeholder="Descrição da sua tarefa" name="descricao"/>
        <button type="submit">Adicionar</button> 
    </form>
    <?php if (!empty($tarefas)):?>
    <h2>Suas tarefas</h2>
    <UL>
        <LI>Tenho uma tarefa</LI>
    </UL>
    <?php else:?>
    <h3>não tenho uma tarefa</h3>
    <?php endif;?>
</body>
</html>