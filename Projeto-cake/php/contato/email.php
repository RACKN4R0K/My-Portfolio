<?php

  if(isset($_POST['email']) && !empty($_POST['email'])){

  $nome= addslashes($_POST ['name']);
  $email= addslashes($_POST ['email']);
  $mensagem= addslashes($_POST ['massage']);

  
  $to = "fernandes4626@gmail.com";
  $subject = "Contato - Royal Cake";
  $body = "Nome: ".$nome. "\n";
          "Email ".$email. "\n";
          "Mensagem: ".$mensagem;
  $header =   "From: racknarok2000@gmail.com". "\r\n"."Reply-to:".$email."\e\n"."X=Mailer:PHP/".phpversion();

  if(mail($to, $subect, $body, $header)){
    echo "Email enciado com sucesso!";
  }else{
  echo "Email não pode ser eniviado";
  }

  }
?>