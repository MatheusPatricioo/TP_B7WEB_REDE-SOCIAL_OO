
    <?php
    require 'config.php';
    require 'models/Auth.php';

    //tudo oq verifica bando de dados eu tenho que passar o PDO
    //passei o pdo e a base, pq se n achar, ele manda pra base.
    $auth = new Auth($pdo, $base);
    $userInfo = $auth->checkToken();

    echo 'index';
