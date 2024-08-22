<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172
require_once 'dao/UserDaoMysql.php';
//vou usar para autenticar os logins 

/* a class Auth é como o "guarda/policial" da aplicação;
esse guarda tem duas tarefas, verifica se alguem tem permissão pra entrar
e verifica se alguem esta tentando entrar usando senha incorreta;
*/
class Auth
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172

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
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172
        $this->pdo = $pdo;
        $this->base = $base;
    }

<<<<<<< HEAD
    //Verificar se alguém tem permissão para entrar (checkToken)
=======
<<<<<<< HEAD
    //Verificar se alguém tem permissão para entrar (checkToken)
=======
<<<<<<< HEAD
    //Verificar se alguém tem permissão para entrar (checkToken)
=======
<<<<<<< HEAD
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172

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
<<<<<<< HEAD

    //verifica se o email existe;
    public function emailExists($email)
    {
        $userDao = new UserDaoMysql($this->pdo);
        return $userDao->findByEmail($email) ? true : false;
    }

    public function registerUser($name, $email, $password, $birthdate)
    {
        $userDao = new UserDaoMysql($this->pdo);

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time() . rand(0, 9999));

        $newUser = new User();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = $hash;
        $newUser->birthdate = $birthdate;
        $newUser->token = $token;

        $userDao->insert($newUser);

        $_SESSION['token'] = $token;
    }
}
=======
}
<<<<<<< HEAD
=======
 
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
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
>>>>>>> 332ca422bd32026b8f591976c917566ee339a172
