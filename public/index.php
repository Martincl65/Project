<?php

require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'login';
}

$app = new \App\App();
$auth = new App\Table\DBAuth($app->getDB());
if(!$auth->logged()){
    require '../controller/login.php';
    //$app->forbidden();
}
else {
    require '../controller/'.$p.'.php';
}

