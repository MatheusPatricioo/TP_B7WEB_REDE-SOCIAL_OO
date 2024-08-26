<?php
require 'config.php';
require 'models/Auth.php';

//tudo oq verifica bando de dados eu tenho que passar o PDO
//passei o pdo e a base, pq se n achar, ele manda pra base.
$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();
$activeMenu = 'home'; // agr qnd ta na page home, msm sem passar o mouse por cima, ele acende com um destaque

require 'partials/header.php';
require 'partials/menu.php';
?>
<section class="feed mt-10">

</section>
<?php
require 'partials/footer.php';
?>