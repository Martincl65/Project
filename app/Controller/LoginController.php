<?php

namespace App\Controller;

use App\Controller;
use App\Form;
use App\Table\DBAuth;
use App\Table\Developer;

class LoginController extends Controller
{
    /**
     * @param DBAuth $auth
     */
    public function login(DBAuth $auth)
    {
        $form = new Form('Login_form');
        if ($form->isSubmitted()) {
            /** @var DBAuth $auth */
            if ($auth->login($form->getValue('username'), $form->getValue('password'))) {
                header('location: ?p=test');
            } else {
                header('location: ?p=login');
            }
        }
        $this->render('template/login', array('form' => $form));
    }

    public function logout(){
        session_destroy();
        header('location: ?p=login');
    }
}