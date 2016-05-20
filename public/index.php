<?php

require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = '404';
}

$app = new \App\App();
$auth = new App\Table\DBAuth($app->getDB());
if(!$auth->logged()){
    //$app->forbidden();
}

require '../controller/'.$p.'.php';

