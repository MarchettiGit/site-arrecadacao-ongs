<?php
include("conexao.php");
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: ../login.php");
    exit;
}

$id_usuario = $_SESSION['id'];

// Pega os dados do formulário
$nome = $_POST['nome'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$ong = $_POST['ong'] ?? '';
$valor = $_POST['valor'] ?? 0;
$pagamento = $_POST['pagamento'] ?? '';

if ($nome == '' || $cpf == '' || $ong == '' || $valor == 0 || $pagamento == '') {
    header("Location: ../doacoes.php?erro=1");
    exit;
}

// Prepara a query
$sql = "INSERT INTO doacoes (id_usuario, nome_completo, cpf, nome_ong, valor, forma_pagamento) 
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar a query: " . $conn->error);
}

// Corrigido: adicionando $id_usuario e tipos corretos
$stmt->bind_param("isssds", $id_usuario, $nome, $cpf, $ong, $valor, $pagamento);

if ($stmt->execute()) {
    header("Location: ../doacoes.php?sucesso=1");
    exit;
} else {
    header("Location: ../doacoes.php?erro=1");
    exit;
}

$stmt->close();
$conn->close();
?>
