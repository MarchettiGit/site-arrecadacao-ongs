<?php
$host = "localhost";   
$usuario = "root";     
$senha = "";            
$banco = "site_doacoes"; 

// Cria a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica se deu certo
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8");

// Se quiser, pode exibir essa linha só para testar (depois pode apagar)
# echo "Conexão bem-sucedida!";
?>
