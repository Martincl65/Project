<?php

$exercise_id = $_GET['exercise_id'];
/** @var \App\Table\Exercise $exercise */
$exercise = App\Table\Exercise::find($exercise_id);

$test_id = $_GET['test_id'];
/** @var \App\Table\Test $test */
$test = App\Table\Test::find($test_id);

$response = new \App\Table\Response();
$form = new \App\Form('Response_form', $response);

var_dump($response);

if($form->isSubmitted()) {
    var_dump($response);
    if($response->getId()) {

    }
    else {
        $response->add();
    }
}

include_once '../vue/template/exercise.php';
