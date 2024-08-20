<?php
require_once 'dao/UserDaoMysql.php';
//vou usar para autenticar os logins 


class Auth
{

    private $pdo;
    private $base;

    //passei PDO $pdo, pra deixar claro que to especificando
    //que o parametro pdo é um objeto do tipo PDO
    //obs:objetos do tipo PDO, criam conexão com o bd;
    public function __construct(PDO $pdo, $base)
    {
        $this->pdo = $pdo;
        $this->base = $base;
    }

    public function checkToken()
    {

        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $userDao = new UserDaoMysql($this->pdo);
            $user = $userDao->findByToken($token);
            if ($user) {
                return true;
            }
        }

        header("Location:" . $this->base . "/login.php");
        exit;
    }
}
