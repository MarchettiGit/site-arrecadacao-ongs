<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doações para ONG'S</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/unnamed-removebg-preview.ico" type="image/x-icon">
</head>
<body>
  <header class="cabeça d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" data-aos="fade-down">
    <!-- Logo -->
    <div class="col-md-3 mb-2 mb-md-0 d-flex align-items-center">
      <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
        <div class="logo_header"><img src="assets/img/Header/unnamed.jpg" alt="Logo do site" width="100" height="auto"></div>
      </a>
      <p class="paragrafo-header">Escolha uma causa, faça sua parte. Sua doação muda vidas!</p>
    </div>

    <!-- Menu -->
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="index.php" class="nav-link px-5 link-secondary">Início</a></li>
      <li>
        <?php if (isset($_SESSION['email']) && isset($_SESSION['senha'])): ?>
          <a href="doacoes.php" class="nav-link px-5">Doações</a>
        <?php else: ?>
          <a href="login.php" class="nav-link px-5">Doações</a>
        <?php endif; ?>
      </li>
      <li><a href="contato.php" class="nav-link px-5">Contato</a></li>
      <li><a href="sobre.php" class="nav-link px-5">Sobre</a></li>
    </ul>

    <!-- Botões -->
    <div class="cadastro col-md-3 text-end">
  <?php if (isset($_SESSION['email']) && isset($_SESSION['senha'])): ?>
    <span class="text-dark me-3 fw-bold">
      👋 Olá, <?php echo explode('@', $_SESSION['email'])[0]; ?>
    </span>
    <button onclick="window.location.href='backend/sair.php'" type="button" class="btn btn-danger">
      Sair
    </button>
  <?php else: ?>
    <button onclick="window.location.href='login.php'" type="button" class="btn btn-light me-2">
      Login
    </button>
    <button onclick="window.location.href='cadastro.php'" type="button" class="btn btn-outline-danger">
      Cadastre-se
    </button>
  <?php endif; ?>
</div>

  </header>

  <!-- =========================
       Seção de Texto com Imagem
       ========================= -->
  <div class="px-5 py-5 my-5 text-center" data-aos="fade-up">
    <img class="d-block mx-auto mb-4" src="assets/img/Header/unnamed.jpg" alt="Imagem pequena" width="332" height="auto">
    <h1 class="display-5 fw-bold text-body-emphasis">Faça parte da mudança que o mundo precisa.</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">
        Nosso objetivo é aproximar quem quer fazer o bem de quem realmente precisa.
        Aqui, você encontra ONGs comprometidas com causas que vão desde o cuidado com os animais até a proteção do meio ambiente e o apoio a crianças em tratamento.
        Cada doação é um gesto de empatia que se transforma em alimento, abrigo, tratamento e esperança.
        Escolha uma causa que toque o seu coração e descubra como pequenos gestos podem gerar grandes transformações.
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center botoes-container">
  <button type="button" onclick="window.location.href='login.php'"  class="btn btn-primary btn-lg px-4">
    DOE AGORA MESMO!
  </button>
  <button type="button" onclick="window.location.href='sobre.php'" class="btn btn-light hover-overlay btn-lg px-4">
    Sobre Nós!
  </button>
</div>
    </div>
  </div>

  <!-- =========================
       Seção de Cards
       ========================= -->
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5" data-aos="fade-up">
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('assets/img/Cards/resgate-de-animais.jpg')">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
            Doe para transformar a vida de um animal abandonado.
          </h3>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="assets/img/Cards/institutoamparanimal_logo.jpg" alt="Logo ONG" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <small>Instituto Ampara Animal</small>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('assets/img/Cards/hospital.jpg')">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
            Doe esperança e ajude quem mais precisa.
          </h3>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="assets/img/Cards/GRAAC.jpg" alt="Logo ONG" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <small>GRAACC</small>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('assets/img/Cards/mata.jpg')">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
            Sua ajuda mantém viva a natureza que nos mantém vivos.
          </h3>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="assets/img/Cards/mata icon.png" alt="Logo ONG" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <small>SOS Mata Atlântica</small>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- =========================
       Footer
       ========================= -->
  <div class="container" >
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">
        &copy; UMC 
      </p>
      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none" aria-label="Bootstrap">
        <svg class="bi me-2" width="40" height="32" aria-hidden="true">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item">
          <a href="index.php" class="nav-link px-2 text-body-secondary">Inicio</a>
        </li>
        
        <li class="nav-item">
          <a href="contato.php" class="nav-link px-2 text-body-secondary">Contato</a>
        </li>
        <li class="nav-item">
          <a href="sobre.php" class="nav-link px-2 text-body-secondary">Sobre</a>
        </li>
      </ul>
    </footer>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>
</html>
