<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $valor = $_POST['valor'];
    $forma_pagamento = $_POST['forma_pagamento'];

    $sql = "UPDATE doacoes SET valor = '$valor', forma_pagamento = '$forma_pagamento' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Doação atualizada com sucesso!');
                window.location.href = '../doacoes.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao atualizar a doação!');
                window.location.href = '../doacoes.php';
              </script>";
    }
}
?>
    