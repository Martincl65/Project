<?php

require '../app/Autoloader.php';

App\Autoloader::register();
session_start();

$auth = new App\Table\DBAuth(\App\App::getDB());

if($auth->logged()){
    if(isset($_GET['p'])){
        if($_GET['p'] == 'logout') {
            $p = 'login';
        }
        else {
            $p = $_GET['p'];
        }
    }
    else {
        $p = 'test';
    }
    $className = 'App\Controller\\'.ucfirst($p).'Controller';
    if(class_exists($className)) {
        $controller = new $className();
        if($p == 'test') {
            /** @var App\Controller\TestController $controller */
            $controller->index();
        }
        if($p == 'exercise' && isset($_GET['exercise_id'])) {
            /** @var App\Controller\ExerciseController $controller */
            $controller->show($_GET['exercise_id']);
        }
        if($p == 'login') {
            /** @var App\Controller\LoginController $controller */
            $controller->logout();
        }
    }
}
else {
    $controller = new \App\Controller\LoginController();
    /** @var App\Controller\LoginController $controller */
    $controller->login($auth);
}

