<?php

$developer = App\Table\Developer::find(1);

$test_id = $_GET['test_id'];
/** @var \App\Table\Test $test */
$test = App\Table\Test::find($test_id);

include_once '../vue/template/test.php';
