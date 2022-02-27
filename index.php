<?php


?>

<html>
    <head>
        <title>Contate-nos</title>
        <link rel="stylesheet" href="./styles/style.css">
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <style>
            @media (max-width: 600px) {
  body {
    background-color: #fff;
  }
}
        </style>
        <div class="container">
            <header class="title-top-container">
                Contate-nos
            </header>
            <form action="" method="POST">
                <div class="holder-field">
                    <div class="field">
                        <input type="text" name="nome" placeholder="Insira o seu nome">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Insira o seu e-mail">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                <div class="holder-field">
                    <div class="field">
                        <input type="text" name="telefone" placeholder="Insira o seu telefone">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="field">
                        <input type="text" name="website" placeholder="Insira o seu website">
                        <i class="fas fa-globe"></i>
                    </div>
                </div>
                <div class="message">
                    <textarea placeholder="Insira sua mensagem" name="message"></textarea>
                    <i class="material-icons">message</i>
                </div>
                <div class="button-area">
                    <button type="submit">Enviar</button>
                    <span></span>
                </div>
            </form>
        </div>

        <script src="script.js"></script>
    </body>
</html>