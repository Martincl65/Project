<?php

$form = new \App\Form('Login_form');

if($form->isSubmitted()) {
    var_dump($_POST);
    var_dump($form);
    var_dump($form->getValue('username'));
    /** @var App\Table\DBAuth $auth */
    if($auth->login($form->getValue('username'), $form->getValue('password'))) {
        header('location: ?p=test&test_id=1');
    }
    else {
        var_dump($_SESSION);
    }
    die;
    

}

include_once '../vue/template/login.php';
