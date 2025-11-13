<?php
require_once "classes/Database.php";
require_once "classes/Usuario.php";

if (isset($_POST['submit'])) {
    $db = new Database();
    $conn = $db->conectar();

    $usuario = new Usuario($conn);
    $usuario->setDados($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha']);
    $usuario->cadastrar();
} else {
    exit();
}
?>
