<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="icon" type="image/png" href="assets/img/unnamed-removebg-preview.ico">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <!-- CSS personalizado -->
     <link rel="stylesheet" href="assets/css/BASE.css">
    <link rel="stylesheet" href="assets/css/contato.css">
  </head>

  <body>

    <!-- Navbar -->
    <header class="cabeça d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" data-aos="fade-down">
      <div class="col-md-3 mb-2 mb-md-0 d-flex align-items-center">
        <a href="index.php" class="d-inline-flex text-decoration-none">
          <div class="logo_header"><img src="assets/img/Header/unnamed.jpg" alt="Logo" width="100"></div>
        </a>
        <p class="paragrafo-header">Sobre Nós</p>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-5">Início</a></li>
        <li><a href="doacoes.php" class="nav-link px-5">Doações</a></li>
        <li><a href="contato.php" class="nav-link px-5">Contato</a></li>
        <li><a href="sobre.php" class="nav-link px-5">Sobre</a></li>
      </ul>
    </header>

    <!-- Seção de ícones -->
    <div class="secao"><div class="container px-4000 py-50 m-30" id="hanging-icons" data-aos="fade-up">
        <h2 class="fs-2 text-dark">Nossos Contatos!</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div
              class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
            >
              <img src="assets/img/contato/insta.png" alt="Ícone" width="24" height="24">
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Nosso Instagram!</h3>
              <div class="p-insta"><p>
                Acompanhe nossas novidades, bastidores e projetos diretamente pelo Instagram! Lá você encontra atualizações em tempo real e pode interagir com a gente de forma leve e descontraída.
                Siga e faça parte da nossa comunidade!
              </p></div>
              <a href="https://www.instagram.com" class="btn btn-primary" target="_blank"> Siga a gente! </a>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div
              class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
            >
              <img src="assets/img/contato/whats.png" alt="Ícone" width="24" height="24">
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Nosso WhatsApp!</h3>
              <div class="p-whats"><p>
                Fale conosco de forma rápida e prática! Nosso canal no WhatsApp está sempre aberto para tirar dúvidas, receber sugestões e oferecer suporte personalizado.
                Clique no botão e entre em contato agora mesmo!
              </p></div>
              <a href="https://www.whatsapp.com/?lang=pt" class="btn btn-primary" target="_blank"> Mande sua mensagem! </a>
              
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div
              class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
            >
              <img src="assets/img/contato/email.png" alt="Ícone" width="24" height="24">
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Nosso Email!</h3>
              <div class="p-email"><p>
                Prefere um contato mais detalhado? Envie um e-mail para nossa equipe! Respondemos todas as mensagens com atenção e o cuidado que você merece.
                Estamos prontos pra te ajudar!
              </p></div>
              <a href="" class="btn btn-primary" target="_blank"> Mande seu email! </a>
            </div>
          </div>
        </div>
      </div></div>

 
    
    <!-- Bootstrap JS -->
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
