<?php

require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
require '../pages/templates/'.$p.'.php';

$content = ob_get_clean();


require '../pages/templates/default.php';


/*
$test = App\Table\Test::find($_GET['test']);
echo '<pre>';
var_dump($exercise);
echo '</pre>';

/*
$exercises = App\Table\Exercise::findAll();
echo '<pre>';
var_dump($exercises);
echo '</pre>';
foreach ($exercises as $exercise) {
    echo $exercise->getTitle();
    echo '<pre>';
    var_dump($exercise);
    echo '</pre>';
}


echo '<br/><br/><br/>-----------------------------------<br/><br/><br/>';

$parameters = array(
    'lastName' => 'MARTIN',
    'firstName' => 'Clément'
);

$developers = App\Table\Developer::findBy($parameters);
//$developers = App\Table\Developer::findAll();
echo '<pre>';
var_dump($developers);
echo '</pre>';
*/

?>