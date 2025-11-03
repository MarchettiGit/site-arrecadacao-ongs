


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro - DoaBem</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- CSS principal + CSS específico -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/cadastro_login.css">

  <link rel="shortcut icon" href="assets/img/unnamed-removebg-preview.ico" type="image/x-icon">
</head>
<body>
  <!-- Header igual ao da home -->
  <header class="cabeça d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" data-aos="fade-down">
    <div class="col-md-3 mb-2 mb-md-0 d-flex align-items-center">
      <a href="index.php" class="d-inline-flex text-decoration-none">
        <div class="logo_header"><img src="assets/img/Header/unnamed.jpg" alt="Logo" width="100"></div>
      </a>
      <p class="paragrafo-header">Cadastre-se e comece a fazer o bem!</p>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="index.php" class="nav-link px-5">Início</a></li>
      <li><a href="doacoes.php" class="nav-link px-5">Doações</a></li>
      <li><a href="contato.php" class="nav-link px-5">Contato</a></li>
      <li><a href="sobre.php" class="nav-link px-5">Sobre</a></li>
    </ul>
  </header>

  <!-- Corpo da página -->
  <main class="cadastro-container" data-aos="fade-up">
    <div class="form-box shadow-lg">
      <h2 class="text-center mb-4">Crie sua conta</h2>
      <form action="backend/cadastrar_usuario.php" method="POST">
        <div class="form-group mb-3">
          <label for="nome">Nome completo</label>
          <input type="text" id="nome" name="nome" class="form-control" required>
        </div>

        
        <div class="mb-3">
          <label for="cpf" class="form-label text-dark">CPF</label>
          <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" required>
        </div>

        <div class="form-group mb-3">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>


        <div class="form-group mb-4">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" class="form-control" required>
        </div>

        <button type="submit"  name="submit" class="btn btn-primary w-100">Cadastrar</button>

        <p class="text-center mt-3">Já tem uma conta? 
          <a href="login.php" class="text-danger">Entrar</a>
        </p>
      </form>
    </div>
  </main>

  <!-- Footer igual ao da home -->
   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" >
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

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>
</html>
