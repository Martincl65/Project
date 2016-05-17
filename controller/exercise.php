<?php

$exercise_id = $_GET['exercise_id'];
/** @var \App\Table\Exercise $exercise */
$exercise = App\Table\Exercise::find($exercise_id);

$test_id = $_GET['test_id'];
/** @var \App\Table\Test $test */
$test = App\Table\Test::find($test_id);

$response = new \App\Table\Response();
$form = new \App\Form('Response_form', $_POST['Response_form']);
echo '<pre>';
var_dump($response);
echo '</pre>';

echo '<pre>';
var_dump($form);
echo '</pre>';
/*
echo '<pre>';
var_dump($_GET);
echo '</pre>';
echo '<pre>';
var_dump($_POST);
echo '</pre>';
/*
if($_POST['']){
    //le code de traitement
}
*/

include_once '../vue/template/exercise.php';
