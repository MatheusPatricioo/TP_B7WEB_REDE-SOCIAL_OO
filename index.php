<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46

    <?php
    require 'config.php';
    require 'models/Auth.php';

    //tudo oq verifica bando de dados eu tenho que passar o PDO
    //passei o pdo e a base, pq se n achar, ele manda pra base.
    $auth = new Auth($pdo, $base);
    $userInfo = $auth->checkToken();

    echo 'index';
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD

    <?php
require 'config.php';
require'models/Auth.php';

//tudo oq verifica bando de dados eu tenho que passar o PDO
//passei o pdo e a base, pq se n achar, ele manda pra base.
$auth = new Auth($pdo, $base);
=======
<?php
require 'config.php';
>>>>>>> d9d24d1c6bf77813458eeb59267a2d5bbf81d63a
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
