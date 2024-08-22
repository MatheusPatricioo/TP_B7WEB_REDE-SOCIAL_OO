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
    <form method="POST" action="<?= $base; ?>/login_action.php">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172

      <?php if (!empty($_SESSION['flash'])) : ?>
        <?= $_SESSION['flash']; ?>
        <?php $_SESSION['flash'] = ''; ?>
      <?php endif; ?>


<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172
      <input placeholder=" Digite seu e-mail" class="input" type="email" name="email" />

      <input placeholder="Digite sua senha" class="input" type="password" name="password" />

      <input class="button" type="submit" value="Acessar o sistema" />

      <a href="<?= $base; ?>/signup.php">Ainda não tem conta? Cadastre-se</a>
    </form>
  </section>
</body>

</html>