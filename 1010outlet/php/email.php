<?php

if(isset($_POST(['email']) && !empty($_POST(['email'])){

$nome = addslashes($_POST(['name']));
$email = addslashes($_POST(['email']));
$mensagem = addslashes($_POST(['message']));

$to = "anaameliacoelho.s@gmail.com";
$subject = "Contato - Loja 1010";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Mensagem: ".$mensagem;
$header = "From: anacoelho430@gmail.com"."\r\n".
          "Reply-To:".$email."\r\n".
          "X=Mailer:PHP/".phpversion();
if(mail($to, $subject, $body, $header)){
    echo("Email enviado com sucesso!");
} else{
    echo("O Email não pode ser enviado!");
}

}
?>