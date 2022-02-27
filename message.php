<?php
  $name = htmlspecialchars($_POST['nome']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['telefone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "murilocs.sjc@gmail.com";
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Desculpe, houve um erro ao enviar sua mensagem!";
      }
    }else{
      echo "Insira um e-mail válido!";
    }
  }else{
    echo "O campo de e-mail e mensagem são obrigatórios!";
  }
?>