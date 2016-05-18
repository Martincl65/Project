<?php

$developer = App\Table\Developer::find(1);
$response = App\Table\Response::find(1);

echo '<pre>';
var_dump($response);
echo '</pre>';

echo '<pre>';
var_dump($response->getDeveloper());
echo '</pre>';
die;

$exercise_id = $_GET['exercise_id'];
/** @var \App\Table\Exercise $exercise */
$exercise = App\Table\Exercise::find($exercise_id);

$test_id = $_GET['test_id'];
/** @var \App\Table\Test $test */
$test = App\Table\Test::find($test_id);

/*
if(isset($response)){

}*/
$response = new \App\Table\Response();
$form = new \App\Form('Response_form', $response);

if($form->isSubmitted()) {
    if($response->getId()) {
        $response->update();
        
    }
    else {
        //enregistrement de la nouvelle réponse
        $response->add();
    }
}

include_once '../vue/template/exercise.php';
