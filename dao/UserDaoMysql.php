<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
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
<<<<<<< HEAD
  public function findByEmail($email)
  {
    if (!empty($email)) {
      $sql = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
      $sql->bindValue(':email', $email);
      $sql->execute();

      if ($sql->rowCount() > 0) {
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        $user = $this->generateUser($data);
        return $user;
      }
    }

    return false;
  }

  public function update(User $u)
  {
    $sql = $this->pdo->prepare("UPDATE users SET
          email =:email,
          password = :password,
          name =:name,
          birthdate =: birdthdate,
          city = :city,
          work = :work,
          avatar = :avatar,
          cover = :cover,
          token = :token
          WHERE id = id");

    $sql->bindValue(':email', $u->email);
    $sql->bindValue(':password', $u->password);
    $sql->bindValue(':name', $u->email);
    $sql->bindValue('birthdate', $u->birthdate);
    $sql->bindValue('city', $u->city);
    $sql->bindValue('work', $u->work);
    $sql->bindValue('avatar', $u->avatar);
    $sql->bindValue('cover', $u->cover);
    $sql->bindValue('token', $u->token);
    $sql->bindValue('id', $u->id);
    $sql->execute();

    return true;
  }
}
=======
}
=======
  require_once'models/User.php';
  class UserDaoMysql implements UserDAO {
    private $pdo;

    public function __construct(PDO $driver) {

      $this->pdo = $driver;
    }
    public function findByToken($token) {
      
    }
  }
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
