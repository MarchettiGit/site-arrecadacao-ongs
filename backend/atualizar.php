<?php
include("conexao.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM doacoes WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Atualizar Doação</title>
<link rel="stylesheet" href="../bootstrap-5.3.8-examples/assets/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="../assets/css/atualizar_cadastro.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/img/unnamed-removebg-preview.ico" type="image/x-icon">
</head>
<body class="bg-light p-5">
    <div class="container">
        <h2 class="mb-4 text-center">Editar Doação</h2>
        <form action="salvar_atualizacao.php" method="POST" class="p-4 bg-white shadow rounded ">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="mb-3">
                <label class="form-label">Valor (R$)</label>
                <input type="number" step="0.01" name="valor" value="<?= $row['valor'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Forma de Pagamento</label>
                <select name="forma_pagamento" class="form-select" required>
                    <option value="credito" <?= ($row['forma_pagamento'] == 'credito') ? 'selected' : '' ?>>Crédito</option>
                    <option value="pix" <?= ($row['forma_pagamento'] == 'pix') ? 'selected' : '' ?>>Pix</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="../doacoes.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
