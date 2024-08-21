<?php
require 'config.php';
require 'models/Auth.php';
<<<<<<< HEAD


$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if ($email && $password) {

  $auth = new Auth($pdo, $base);
  if ($auth->validateLogin($email, $password)) {
    header("Location: " . $base);
    exit;
  }
}

$_SESSION['flash'] = 'E-mail e/ou senha errados.';
header("Location: " . $base . "/login.php");
exit;
=======
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
