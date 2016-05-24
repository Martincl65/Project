<?php
require '../app/Autoloader.php';
App\Autoloader::register();
session_start();


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'login';
}

//$app = new \App\App();
$auth = new App\Table\DBAuth(\App\App::getDB());
var_dump($auth->logged());
if($auth->logged()){
    require '../controller/'.$p.'.php';
}
else {
    require '../controller/login.php';
}

