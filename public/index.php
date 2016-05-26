<?php

require '../app/Autoloader.php';

App\Autoloader::register();
session_start();
$_SESSION['auth'] = 1;


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'login';
}

$auth = new App\Table\DBAuth(\App\App::getDB());

if($auth->logged()){
    $className = 'App\Controller\\'.ucfirst($p).'Controller';
    $controller = new $className();
    if($p == 'test') {
        /** @var App\Controller\TestController $controller */
        $controller->index();
    }
    if($p == 'exercise' && isset($_GET['exercise_id'])) {
        /** @var App\Controller\TestController $controller */
        $controller->show($_GET['exercise_id']);
    }
}
else {
    require '../app/Controller/login.php';
}

