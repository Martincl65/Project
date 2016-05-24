<?php

$developer_id = $_SESSION['auth'];
/**
 * @var \App\Table\Developer $developer
 */
$developer = App\Table\Developer::find($developer_id);
/*
var_dump($response);

var_dump($response->getDeveloper());
die;
*/
$exercise_id = $_GET['exercise_id'];
/** @var \App\Table\Exercise $exercise */
$exercise = App\Table\Exercise::find($exercise_id);

/** @var \App\Table\Test $test */
$test = $developer->getTest();

foreach($test->getExercises() as $testExercise) {
    /** @var \App\Table\Exercise $testExercise */
    $exercises_id[] = $testExercise->getId();
}
if(!in_array($exercise->getId(), $exercises_id)){
    header('location: ?p=404');
}

$response = App\Table\Response::findOneBy(array('id_developer' => $developer->getId(), 'id_exercise' => $exercise_id));

if($response == NULL) {
    $response = new \App\Table\Response();
    $response->setDeveloper($developer);
    $response->setExercise($exercise);
}

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
