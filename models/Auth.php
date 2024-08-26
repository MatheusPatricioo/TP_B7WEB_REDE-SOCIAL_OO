<?php
require_once 'dao/UserDaoMysql.php';
//vou usar para autenticar os logins 

/* a class Auth é como o "guarda/policial" da aplicação;
esse guarda tem duas tarefas, verifica se alguem tem permissão pra entrar
e verifica se alguem esta tentando entrar usando senha incorreta;
*/
class Auth
{

    private $pdo;
    private $base;
    private $dao;

    //passei PDO $pdo, pra deixar claro que to especificando
    //que o parametro pdo é um objeto do tipo PDO
    //obs:objetos do tipo PDO, criam conexão com o bd;
    public function __construct(PDO $pdo, $base)
    {
        $this->pdo = $pdo;
        $this->base = $base;
        $this->dao = new UserDaoMysql($this->pdo);
    }

    //Verificar se alguém tem permissão para entrar (checkToken)
    public function checkToken()
    {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];


            $user = $this->dao->findByToken($token);

            if ($user) {
                return $user;  // Retornando o objeto do usuário
            }
        }

        header("Location:" . $this->base . "/login.php");
        exit;
    }

    //Verificar se alguém está tentando entrar usando a senha correta:
    public function validateLogin($email, $password)
    {


        $user = $this->dao->findByEmail($email);

        if ($user) {

            if (password_verify($password, $user->password)) {
                $token = md5(time() . rand(0, 9999));

                $_SESSION['token'] = $token;
                $user->token = $token;
                $this->dao->update($user);

                return true;
            }
        }

        return false;
    }

    //verifica se o email existe;
    public function emailExists($email)
    {;
        //$sql = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        return $this->dao->findByEmail($email) ? true : false;
    }



    //registra o usuario 
    public function registerUser($name, $email, $password, $birthdate)
    {


        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time() . rand(0, 9999));

        $newUser = new User();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = $hash;
        $newUser->birthdate = $birthdate;
        $newUser->token = $token;

        $this->dao->insert($newUser);

        $_SESSION['token'] = $token;
    }
}
