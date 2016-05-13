<?php

require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

require '../controller/'.$p.'.php';

