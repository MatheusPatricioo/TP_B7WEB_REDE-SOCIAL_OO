<?php
require 'config.php';

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>login</title>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
  <link rel="stylesheet" href="<?= $base; ?>/assets/css/login.css" />
</head>

<body>
  <header>
    <div class="container">
      <a href="<?= $base; ?>"><img src="<?= $base; ?>/assets/images/devsbook_logo.png" /></a>
    </div>
  </header>
  <section class="container main">
    <form method="POST" action="<?= $base; ?>/signup_action.php">

      <?php if (!empty($_SESSION['flash'])) : ?>
        <?= $_SESSION['flash']; ?>
        <?php $_SESSION['flash'] = ''; ?>
      <?php endif; ?>

<<<<<<< HEAD
      <input placeholder="Digite seu nome" class="input" type="text" name="name" />

      <input id="birthdate" placeholder="Digite sua data de nascimento" class="input" type="text" name="birthdate" />

      <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />
=======

      <input placeholder=" Digite seu nome" class="input" type="text" name="name" />

      <input placeholder=" Digite sua data de nascimento" class="input" type="text" name="birthdate" />

      <input placeholder=" Digite seu e-mail" class="input" type="email" name="email" />
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172

      <input placeholder="Digite sua senha" class="input" type="password" name="password" />

      <input class="button" type="submit" value="Fazer cadastro" />

<<<<<<< HEAD
      <a href="<?= $base; ?>/login.php">Já possui uma conta? Faça o login</a>
=======
      <a href="<?= $base; ?>/login.php">Ja possui uma conta? faça o login</a>
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172
    </form>
  </section>

  <script src="https://unpkg.com/imask"></script>
  <script>
<<<<<<< HEAD
    IMask(
      document.getElementById("birthdate"), {
        mask: '00/00/0000'
      }
    ); 
=======
    Imask(
      document.getElementById("birthdate"), {
        mask: '00/00/0000'
      }
    );
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172
  </script>
</body>

</html>