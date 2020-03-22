<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $erro = '';
    $sucesso = '';
    //Verifica a existencia dos campos;
    if (!isset($_POST['nome']) || !isset($_POST['email']) ||
        !isset($_POST['mensagem']) || !isset($_POST['assunto'])){
          $erro = 'Não foi possível enviar o e-mail.';
      }

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $assunto = $_POST['assunto'];
      $mensagem = $_POST['mensagem'];

      //Validação do e-mail;
      if (empty($erro)) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $erro = 'Endereço de e-mail inválido!';
        }
      }


      //Envio de e-mail;
      if (empty($erro)) {
        include('php/enviar-email.php');
      }
  }
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contato // Thiago de Paula</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="imagens/favicon.png"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contato.css">
    <link href="https://fonts.googleapis.com/css?family=Yeon+Sung&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-inverse custom">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " id="brand-custom" href="index.html">Thiago de Paula</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="menu-custom">
              <li><a href="sobre-mim.html">Sobre Mim</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projetos <span class="caret"></span></a>
                <ul class="dropdown-menu projetos-dropdown">
                  <li><a href="garotos-nunca-dizem-nao.html">Garotos nunca dizem não</a></li>
                  <li><a href="caos.html">Caos</a></li>
                  <li><a href="mais-perto-fim.html">Mais perto do fim</a></li>
                </ul>
              </li>
              <li><a href="contato.php">Contato</a></li>
              <li><a href="loja.html">Loja</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <h3 class="titulo-contato">Mande suas dúvidas, críticas, elogios ou pedidos!</h3>
        <form class="form" method="POST" action="contato.php">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="name" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
          </div>
          <div class="form-group">
            <label type="email" for="email" >Email:</label>
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@email.com" required>
            </div>
          </div>

          <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Escreva sua mensagem" required></textarea>
          </div>
          <div class="form-group">
            <label for="assunto">Assunto:</label>
            <select class="form-control" id="assunto" name="assunto">
              <option disabled selected class="selecione">Selecione</option>
              <option>Dúvida</option>
              <option>Pedido</option>
              <option>Elogios</option>
              <option>Crítica</option>
              <option>Outros</option>
            </select>
          </div>
          <button type="submit" class="btn btn-danger">Enviar</button>
        </form>

         <?php if(!empty($erro)):?><div class="mensagem-erro"><?php echo $erro; ?></div><?php endif; ?>
         <?php if(!empty($sucesso)):?><div class="mensagem-sucesso"><?php echo $sucesso; ?></div><?php endif; ?>

      </div>
    </main>


    <footer>
      <address >
        <div class="thiago-de-paula-footer">
          <a href="index.html" >Thiago de Paula
        </div>

        <br>
        <a href="https://www.instagram.com/thi_maravilha/" target="_blank">
          <img class="icone-insta" src="imagens/icone-insta.png" alt="Ícone instagram">
        </a>
        <div class="insta">
          <a href="https://www.instagram.com/thi_maravilha/" target="_blank" id="insta">
            @thi_maravilha
          </a>
        </div>

        <br>
        <br>
        <p class="brasilia">Brasília, DF</p>
      </address>
      <address>
        <img class="icone-email" src="imagens/icone-email.png" alt="icone-email">
        <p class="email">thiagodepaula.jornalismo@gmail.com</p>
      </address>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
