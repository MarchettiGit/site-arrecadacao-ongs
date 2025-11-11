<?php 
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $_SESSION['erro_login'] = "Usuário ou senha incorretos!";
        header('Location: ../login.php');
        exit();
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['id']  =  $id_usuario; 
        header('Location: ../doacoes.php');
        exit();
    }
} else {
    header('Location: ../login.php');
    exit();
}
?>
