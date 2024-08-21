<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
<?php
session_start();
$base = 'http://localhost/redesocial';
$db_name = 'devsbook';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
    $pdo = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro de conexão: ' . $e->getMessage();
    exit;
}
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD

<?php
    session_start();
=======
<<<<<<< HEAD

<?php
    session_start();
=======
<?php
>>>>>>> d9d24d1c6bf77813458eeb59267a2d5bbf81d63a
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac
    $base = 'http://localhost/redesocial';
    $db_name = 'devsbook';
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';

    $pdo = new PDO("mysql:dbname".$db_name. ";host=".$db_user, $db_user, $db_pass);
<<<<<<< HEAD
    

=======
<<<<<<< HEAD
    

=======
    
>>>>>>> d9d24d1c6bf77813458eeb59267a2d5bbf81d63a
>>>>>>> fe9d64ea4caca22afade9dd9ca9b69eab65f95ac
>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
