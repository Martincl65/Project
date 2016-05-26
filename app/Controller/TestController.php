<?php

namespace App\Controller;

use App\Controller;
use App\Table\Developer;

class TestController extends Controller {

    public function index(){
        $developer_id = $_SESSION['auth'];
        /** @var Developer $developer */
        $developer = Developer::find($developer_id);
        /** @var \App\Table\Test $test */
        $test = $developer->getTest();

        $this->render('test/index', array('developer' => $developer, 'test' => $test));
    }
}
