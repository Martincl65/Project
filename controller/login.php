<?php

$form = new \App\Form('Login_form');

$testid = new \App\Table\Developer();

if($form->isSubmitted()) {

    /** @var App\Table\DBAuth $auth */
    if($auth->login($form->getValue('username'), $form->getValue('password'))) {
        $developer_id = $_SESSION['auth'];
        header('location: ?p=test&test_id=' .$testid->getTest());
    }
    else {
        header('location: ?p=login');
    }
}
include_once '../vue/template/login.php';
