<?php

$developer_id = $_SESSION['auth'];
/**
 * @var \App\Table\Developer $developer
 */
$developer = App\Table\Developer::find($developer_id);


$test_id = $_GET['test_id'];
/** @var \App\Table\Test $test */
//$test = App\Table\Test::find($test_id);
$test = $developer->getTest();
include_once '../vue/template/test.php';
