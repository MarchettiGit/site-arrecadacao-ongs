<?php
include("conexao.php");
session_start();

// Pega os dados do forms
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$ong = $_POST['ong'];
$valor = $_POST['valor'];
$pagamento = $_POST['pagamento'];

// SQL sem id_usuario
$sql = "INSERT INTO doacoes (nome_completo, cpf, nome_ong, valor, forma_pagamento)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar a query: " . $conn->error);
}

$stmt->bind_param("sssds", $nome, $cpf, $ong, $valor, $pagamento);

if ($stmt->execute()) {
    // Redireciona de volta para a página de doações com um parâmetro de sucesso
    header("Location: ../doacoes.php?sucesso=1");
    exit;
} else {
    // Redireciona com erro
    header("Location: ../doacoes.php?erro=1");
    exit;
}

$stmt->close();
$conn->close();
?>
