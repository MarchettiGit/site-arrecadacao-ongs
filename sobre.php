


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre nós!</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- CSS principal + CSS específico -->
  <link rel="stylesheet" href="assets/css/sobre.css">
  <link rel="stylesheet" href="assets/css/cadastro_login.css">

  <link rel="shortcut icon" href="assets/img/unnamed-removebg-preview.ico" type="image/x-icon">
</head>
<body>
  <!-- Header -->
  <header class="cabeça d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" data-aos="fade-down">
    <div class="col-md-3 mb-2 mb-md-0 d-flex align-items-center">
      <a href="index.php" class="d-inline-flex text-decoration-none">
        <div class="logo_header"><img src="assets/img/Header/unnamed.jpg" alt="Logo" width="100"></div>
      </a>
      <p class="paragrafo-header">Sobre Nós</p>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="index.php" class="nav-link px-5">Início</a></li>
      <li>
        <?php if (isset($_SESSION['email']) && isset($_SESSION['senha'])): ?>
          <a href="doacoes.php" class="nav-link px-5">Doações</a>
        <?php else: ?>
          <a href="login.php" class="nav-link px-5">Doações</a>
        <?php endif; ?>
      <li><a href="contato.php" class="nav-link px-5">Contato</a></li>
      <li><a href="sobre.php" class="nav-link px-5">Sobre</a></li>
    </ul>
  </header>

  <!-- CONTEÚDO PRINCIPAL -->
  <main class="container my-5 flex-grow-1">
    <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
        Plataforma Solidária — Conectando Você a Quem Precisa
      </h1>
      <p class="lead">
        A Plataforma Solidária é um projeto financiado pelo Governo Federal, criado para aproximar cidadãos e
        instituições que fazem a diferença. Nosso objetivo é facilitar o ato de doar, oferecendo um espaço seguro 
        e transparente para apoiar ONGs reconhecidas, como AMPARA, GRAAC e SOS Mata Atlântica. Com apenas alguns 
        cliques, você contribui para causas que transformam vidas e ajudam a construir um futuro melhor para todos.
      </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
        <button type="button" onclick="window.location.href='cadastro.php'" class="btn btn-primary btn-lg px-4 me-md-2">
          Faça seu cadastro agora!
        </button>
        <button type="button" onclick="window.location.href='contato.php'" class="btn btn-outline-light btn-lg px-4">
          Nosso Contato!
        </button>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
   <div class="container" >
    <footer class="mt-auto d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">&copy; UMC</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none" aria-label="Bootstrap">
      <svg class="bi me-2" width="40" height="32" aria-hidden="true">
        <use xlink:href="#bootstrap"></use>
      </svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Início</a></li>
      
      <li class="nav-item"><a href="contato.php" class="nav-link px-2 text-body-secondary">Contato</a></li>
      <li class="nav-item"><a href="sobre.php" class="nav-link px-2 text-body-secondary">Sobre</a></li>
    </ul>
    
  </footer>
  </div>
 

  <!-- Scripts -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>
</body>
</html>
