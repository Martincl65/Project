<?php

$exercise_id = $_GET['exercise_id'];
/** @var \App\Table\Exercise $exercise */
$exercise = App\Table\Exercise::find($exercise_id);

$test_id = $_GET['test_id'];
/** @var \App\Table\Test $test */
$test = App\Table\Test::find($test_id);

include_once '../vue/template/exercise.php';
