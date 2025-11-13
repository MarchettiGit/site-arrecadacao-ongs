<?php
class Usuario {
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function setDados($nome, $cpf, $email, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function cadastrar() {
        $sql = "INSERT INTO usuarios (nome, cpf, email, senha) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            die("Erro no prepare: " . $this->conn->error);
        }

        $stmt->bind_param("ssss", $this->nome, $this->cpf, $this->email, $this->senha);

        if ($stmt->execute()) {
            header("Location: ../login.php");
            exit();
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>
