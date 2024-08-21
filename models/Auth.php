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

    //passei PDO $pdo, pra deixar claro que to especificando
    //que o parametro pdo é um objeto do tipo PDO
    //obs:objetos do tipo PDO, criam conexão com o bd;
    public function __construct(PDO $pdo, $base)
    {
        $this->pdo = $pdo;
        $this->base = $base;
    }

    //Verificar se alguém tem permissão para entrar (checkToken)
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
 