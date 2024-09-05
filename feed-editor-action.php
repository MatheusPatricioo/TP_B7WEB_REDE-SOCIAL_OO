<?php
require 'config.php';
require 'models/Auth.php';
require 'dao/PostDaoMysql.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

$body = filter_input(INPUT_POST, 'body');

if ($body) {

  $postDao = new PostDaoMysql($pdo);

  // Criando um novo post corretamente
  $newPost = new Post();
  $newPost->id_user = $userInfo->id;
  $newPost->type = 'text';
  $newPost->created_at = date('Y-m-d H:i:s');
  $newPost->body = $body;

  // Inserindo o post no banco de dados
  $postDao->insert($newPost);
}

// Redirecionamento deve ser feito apenas se nenhuma saída foi enviada antes
header("Location: " . $base);
exit;