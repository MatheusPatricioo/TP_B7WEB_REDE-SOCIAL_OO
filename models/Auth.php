<?php
<<<<<<< HEAD
require_once 'dao/UserDaoMysql.php';
//vou usar para autenticar os logins 


class Auth
{
=======
//vou usar para autenticar os logins 


class Auth {
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac

    private $pdo;
    private $base;

    //passei PDO $pdo, pra deixar claro que to especificando
    //que o parametro pdo é um objeto do tipo PDO
    //obs:objetos do tipo PDO, criam conexão com o bd;
<<<<<<< HEAD
    public function __construct(PDO $pdo, $base)
    {
=======
    public function __construct(PDO $pdo, $base) {
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac
        $this->pdo = $pdo;
        $this->base = $base;
    }

<<<<<<< HEAD
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
=======
    public function checkToken() {

    if (!empty($_SESSION['token'])) {
        $token = $_SESSION['token'];
        
        } 
    
        header("Location:". $this->base."/Login.php");
        exit;

    }
}
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac
