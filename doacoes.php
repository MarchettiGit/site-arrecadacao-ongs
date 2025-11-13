<?php
session_start();
print_r($_SESSION);

if ((!isset($_SESSION['email'])) && (!isset($_SESSION['senha']))) {
    
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header("Location: ../login.php");
  
    
}else { 
  $logado = $_SESSION['email'];
}
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doações para ONG'S</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/unnamed-removebg-preview.ico" type="image/x-icon">
</head>
<body>
  <!-- ========================= HEADER ========================= -->
  <header class="cabeça d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" data-aos="fade-down">
    <div class="col-md-3 mb-2 mb-md-0 d-flex align-items-center">
      <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
        <div class="logo_header"><img src="assets/img/Header/unnamed.jpg" alt="Logo" width="100"></div>
      </a>
      <p class="paragrafo-header">Escolha uma causa, faça sua parte. Sua doação muda vidas!</p>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="index.php" class="nav-link px-5 link-secondary">Início</a></li>
      <li><a href="doacoes.php" class="nav-link px-5">Doações</a></li>
      <li><a href="contato.php" class="nav-link px-5">Contato</a></li>
      <li><a href="sobre.php" class="nav-link px-5">Sobre</a></li>
      <div class = "d-flex">
        <a href="backend/sair.php" class = "btn btn-danger">Sair</a>
      </div>
    </ul>

    
  </header>

  <!-- ========================= SEÇÃO DE DOAÇÃO ========================= -->
  <main class="container py-5">
    <h1 class="text-center mb-4 text-dark" data-aos="fade-up">Faça sua Doação 💖</h1>
    <?php if (isset($_GET['sucesso'])): ?>
      <div class="alert alert-success text-center" data-aos="fade-up" role="alert">
        Doação cadastrada com sucesso!
      </div>
    <?php elseif (isset($_GET['erro'])): ?>
      <div class="alert alert-danger text-center" data-aos="fade-up" role="alert">
        Erro ao cadastrar doação. Tente novamente.
      </div>
<?php endif; ?>


    <div class="text-center mb-4" data-aos="fade-up">
      <button id="abrirForm" class="btn btn-primary btn-lg">Fazer uma Doação</button>
    </div>

    <!-- FORMULÁRIO TOGGLE -->
    <div id="formDoacao" class="card p-4 shadow-lg mx-auto" style="max-width:600px; " data-aos="fade-up">
      <h3 class="text-center mb-3 text-dark">Preencha suas informações</h3>
      <form action="backend/inserir.php" method="POST">
        <div class="mb-3">
          <label for="nome" class="form-label text-dark">Nome completo</label>
          <input type="text" id="nome" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="cpf" class="form-label text-dark">CPF</label>
          <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" required>
        </div>

        <div class="mb-3">
          <label for="ong" class="form-label text-dark">Selecione a ONG</label>
          <select id="ong" name="ong" class="form-select" required aria-label="Default select example">
            <option value="" selected disabled>Escolha uma ONG</option>
            <option value="ampara">AMPARA</option>
            <option value="graac">GRAAC</option>
            <option value="sosmata">SOS Mata Atlântica</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="valor" class="form-label text-dark">Valor da Doação (R$)</label>
          <input type="number" id="valor" name="valor" class="form-control" placeholder="Digite o valor" required>
        </div>

        <div class="mb-3">
          <label class="form-label text-dark">Forma de Pagamento</label>
          <div class="form-check">
            <input class="form-check-input text-dark" type="radio" name="pagamento" id="pix" value="pix" required>
            <label class="form-check-label text-dark" for="pix">Pix</label>
          </div>
          <div class="form-check">
            <input class="form-check-input text-dark" type="radio" name="pagamento" id="credito" value="credito" required>
            <label class="form-check-label text-dark" for="credito">Cartão de Crédito</label>
          </div>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-success">Confirmar Doação</button>
        </div>
      </form>
    </div>

    <!-- TABELA DE DOAÇÕES -->
    <section class="mt-5 .bg-danger" data-aos="fade-up">
      <h2 class="text-center mb-3 text-dark">Minhas Doações</h2>
      <div class="table-responsive ">
        <table class="table    table-striped align-middle">
          <thead class="table-dark table-primary">
            <tr class=''>
              <th>Nome</th>
              <th>ONG</th>
              <th>Valor (R$)</th>
              <th>Forma de Pagamento</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody class="table-light">
                <?php
                include("backend/conexao.php");

                $id_usuario = $_SESSION['id']; // pega o id do usuário logado

                      $sql = "SELECT  id, nome_completo, nome_ong, valor, forma_pagamento FROM doacoes WHERE id_usuario = ? ORDER BY id DESC";
                      $stmt = $conn->prepare($sql);
                      $stmt->bind_param("i", $id_usuario);
                      $stmt->execute();
                      $result = $stmt->get_result();


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='text-dark'>
                            <td >{$row['nome_completo']}</td>
                            <td>{$row['nome_ong']}</td>
                            <td>R$ " . number_format($row['valor'], 2, ',', '.') . "</td>
                            <td>{$row['forma_pagamento']}</td>
                            <td class='d-flex justify-content-center'>
                                
                                <!-- Botão de Excluir -->
                                <form action='backend/excluir.php' method='POST' style='display:inline;'>
                                   <input type='hidden' name='id' value='{$row['id']}'>
                                    <button type='submit' class='btn btn-sm btn-danger me-2 mr-3'>Excluir</button>
                                </form>
                    
                                <!-- Botão de Atualizar -->
                                <form action='backend/atualizar.php' method='GET' style='display:inline;'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <button type='submit' class='btn btn-sm btn-info'>Atualizar</button>
                               </form>
                            </td>
                        </tr>";
                    }
} else {
    echo "<tr><td colspan='5' class='text-center'>Nenhuma doação registrada.</td></tr>";
}


$conn->close();
?>
</tbody>
        </table>
      </div>
    </section>
  </main>

  <!-- ========================= FOOTER ========================= -->
  <div class="foter"><footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-6">
    <p class="col-md-4 mb-0 text-body-secondary">&copy; UMC</p>
    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Início</a></li>
      
      <li class="nav-item"><a href="contato.php" class="nav-link px-2 text-body-secondary">Contato</a></li>
      <li class="nav-item"><a href="sobre.php" class="nav-link px-2 text-body-secondary">Sobre</a></li>
    </ul>
  </footer></div>

  <!-- ========================= SCRIPTS ========================= -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    const btnAbrir = document.getElementById("abrirForm");
    const form = document.getElementById("formDoacao");
    btnAbrir.addEventListener("click", () => {
      form.style.display = form.style.display === "none" ? "block" : "none";
      form.classList.toggle("show");
    });
  </script>
</body>
</html>
