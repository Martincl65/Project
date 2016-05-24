<?php

$developer_id = $_SESSION['auth'];
/**
 * @var \App\Table\Developer $developer
 */
$developer = App\Table\Developer::find($developer_id);

/** @var \App\Table\Test $test */
$test = $developer->getTest();

include_once '../vue/template/test.php';
