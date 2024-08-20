<?php
// essa classe (UserDaoMysql) é como uma "ponte" entre o seu código PHP e o banco de dados.

/*Aqui, você está dizendo ao PHP:
 "Antes de continuar, vá lá no arquivo User.php
 e traga a definição da classe User"
*/
require_once 'models/User.php';

/*
Aqui, você está criando uma nova classe chamada UserDaoMysql.
A parte implements UserDAO diz que essa classe deve seguir um conjunto de regras,
definidas por uma interface chamada UserDAO. Pense nisso como um contrato que diz:
"Se você quiser ser um UserDaoMysql, você precisa ter certas funções".
*/
class UserDaoMysql implements UserDAO
{
  private $pdo;

  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }

  // Função que recebe um array e monta o objeto
  private function generateUser($array)
  {
    $u = new User();
    $u->id = $array['id'] ?? 0;
    $u->name = $array['name'] ?? '';
    $u->email = $array['email'] ?? '';
    $u->password = $array['password'] ?? '';
    $u->birthdate = $array['birthdate'] ?? '';
    $u->city = $array['city'] ?? '';
    $u->work = $array['work'] ?? '';
    $u->avatar = $array['avatar'] ?? '';
    $u->cover = $array['cover'] ?? '';
    $u->token = $array['token'] ?? '';

    return $u;
  }

  public function findByToken($token)
  {
    if (!empty($token)) {
      $sql = $this->pdo->prepare("SELECT * FROM users WHERE token = :token");
      $sql->bindValue(':token', $token);
      $sql->execute();

      if ($sql->rowCount() > 0) {
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        $user = $this->generateUser($data);
        return $user;
      }
    }

    return false;
  }

  /*
UserDaoMysql: É uma classe que serve de ponte para o banco de dados,
lidando com usuários.
generateUser: Monta um objeto User a partir de um conjunto de dados.
findByToken: Procura um usuário no banco de dados usando um token.
*/
}
