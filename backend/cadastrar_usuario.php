<?php
include_once("conexao.php");

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $CPF = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, cpf, email, senha) VALUES ('$nome', '$CPF', '$email', '$senha')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href = '../login.php';
              </script>";
    } else {
        echo 'Erro ao cadastrar: ' . mysqli_error($conn);
    }
} else {
    header('Location: ../cadastro.php');
    exit();
}
?>
