<?php

if (isset($_POST['email']) && !empty) {

  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $mensagem = addslashes($_POST['mensagem']);


  $to = "thiagodepaula.jornalismo@gmail.com";
  $subject = "Blog // Thiago de Paula: ".$_POST['assunto'];
  $body = "Nome: ".$nome. "\r\n".
          "Email: ".$email. "\r\n".
          "Mensagem: ".$mensagem;
  $header = "From:thiagodepaula.jornalismo@gmail.com"."\r\n".
                "Reply-to:".$email."\r\n".
                "X=Mailer:PHP/".phpversion();


  if (mail($to,$subject,$body,$header)) {
    echo ("E-mail enviado com sucesso!");
  }else {
    echo("O e-mail não pode ser enviado!");
  }
}
?>
