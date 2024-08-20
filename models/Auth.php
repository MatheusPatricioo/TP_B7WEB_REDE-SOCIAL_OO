<?php
//vou usar para autenticar os logins 


class Auth {

    private $pdo;
    private $base;

    //passei PDO $pdo, pra deixar claro que to especificando
    //que o parametro pdo é um objeto do tipo PDO
    //obs:objetos do tipo PDO, criam conexão com o bd;
    public function __construct(PDO $pdo, $base) {
        $this->pdo = $pdo;
        $this->base = $base;
    }

    public function checkToken() {

    if (!empty($_SESSION['token'])) {
        $token = $_SESSION['token'];
        
        } 
    
        header("Location:". $this->base."/Login.php");
        exit;

    }
}