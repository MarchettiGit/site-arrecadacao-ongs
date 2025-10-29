<?php 
session_start();
//print_r($_REQUEST);
 if(isset($_POST['submit'])&& !empty($_POST['email'])&& !empty($_POST['senha'])){
                                                   // ACESSAR O SISTEMA
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha=$_POST['senha'];
    
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' ";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result)< 1){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../login.html');   
    }else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../doacoes.php');
    }
                                                
 }else{
    header('Location: ../login.html');         // NÃO DEIXA ACESSAR DIRETAMENTE O LOGIN.PHP
 } 
?>