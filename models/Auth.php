<?php
<<<<<<< HEAD
require_once 'dao/UserDaoMysql.php';
//vou usar para autenticar os logins 

/* a class Auth é como o "guarda/policial" da aplicação;
esse guarda tem duas tarefas, verifica se alguem tem permissão pra entrar
e verifica se alguem esta tentando entrar usando senha incorreta;
*/
class Auth
{
=======
<<<<<<< HEAD
require_once 'dao/UserDaoMysql.php';
//vou usar para autenticar os logins 


class Auth
{
=======
//vou usar para autenticar os logins 


class Auth {
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46

    private $pdo;
    private $base;

    //passei PDO $pdo, pra deixar claro que to especificando
    //que o parametro pdo é um objeto do tipo PDO
    //obs:objetos do tipo PDO, criam conexão com o bd;
<<<<<<< HEAD
    public function __construct(PDO $pdo, $base)
    {
=======
<<<<<<< HEAD
    public function __construct(PDO $pdo, $base)
    {
=======
    public function __construct(PDO $pdo, $base) {
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
        $this->pdo = $pdo;
        $this->base = $base;
    }

<<<<<<< HEAD
    //Verificar se alguém tem permissão para entrar (checkToken)
=======
<<<<<<< HEAD
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
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
<<<<<<< HEAD

    //Verificar se alguém está tentando entrar usando a senha correta:
    public function validateLogin($email, $password)
    {
        $userDao = new UserDaoMysql($this->pdo);

        $user = $userDao->findByEmail($email);

        if ($user) {

            if (password_verify($password, $user->password)) {
                $token = md5(time() . rand(0, 9999));

                $_SESSION['token'] = $token;
                $user->token = $token;
                $userDao->update($user);

                return true;
            }
        }

        return false;
    }
}
 
=======
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
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
