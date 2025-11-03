<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    // Redireciona para o login se não estiver logado
    header("Location: login.php?erro=nao_logado");
    exit;
}
?>
