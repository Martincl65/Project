<?php
$exercise_id = $_GET['exercise_id'];
$exercise = App\Table\Exercise::find($exercise_id);
?>

<div class="col-sm-12 MenuHaut">
    <h1><?php echo $exercise->getTitle();?></h1>
</div>
<div class="col-sm-6 col-xs-12 mg-top-20">
    <h2><?php echo $exercise->getLanguage();?></h2>
    <p>Temps pour realiser cet exercice : <?php echo $exercise->getTime();?></p>
    <p><?php echo $exercise->getDetail();?></p>
</div>
<div class="col-sm-6 col-xs-12 mg-top-20 TextArea">
    <textarea class="texte" rows=30>ATTENTION, READY ? CODEZ !</textarea>
</div>
<div class="col-xs-12 mg-top-20 MenuBas">
    <button type="button" class="btn btn-danger btn-nav pull-left">Precédent</button>
    <button type="button" class="btn btn-success btn-nav pull-right"> Suivant </button>
</div>