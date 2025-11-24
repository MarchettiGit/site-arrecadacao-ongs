<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta para verificar o usuário
    $sql = "SELECT * FROM usuarios WHERE email=? AND senha=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        // Login incorreto
        $_SESSION['erro_login'] = "Usuário ou senha incorretos!";
        header('Location: ../login.php');
        exit();
    } else {
        // Login correto
        $usuario = $result->fetch_assoc(); // pega os dados do usuário
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['senha'] = $usuario['senha'];
        $_SESSION['id'] = $usuario['id']; 
        header('Location: ../doacoes.php'); // redireciona para a página de doações
        exit();
    }
} else {
    // Se o formulário não foi enviado corretamente
    header('Location: ../login.php');
    exit();
}
?>
