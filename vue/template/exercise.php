<?php include_once '../vue/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar collapse width" id="sidebar">
                <ul class="nav nav-sidebar">
                    <p class="active">Nom Prenom <span class="sr-only">(current)</span></p>
                    <p class="active">Test <?php echo $test->getLevel()->getLabel();?><span class="sr-only">(current)</span></p>
                    <p class="active">Temps estimé : <span class="sr-only">(current)</span></p>
                    <p><strong><u></br >Liste des exercices</u></strong></p>
                    <li><a href="?p=exercise&test_id=1&exercise_id=1"><i>Exercice 1 <span class="label label-success">PHP</span></i></a></li>
                    <li><a href="?p=exercise&test_id=1&exercise_id=2"><i>Exercice 2 <span class="label label-warning">JS</span></i></a></li>
                </ul>
            </div>
            <div class="col-xs-12 main">
                <button class="btn pull-right" id="collapse-sidebar" role="button" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar">Menu</button>
                <div class="col-sm-12 MenuHaut">
                    <h1><?php echo $exercise->getTitle();?></h1>
                </div>
                <div class="col-sm-6 col-xs-12 mg-top-20">
                    <h2><?php echo $exercise->getLanguage()->getLabel();?></h2>
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
            </div>
        </div>
    </div>
<?php include_once '../vue/footer.php'; ?>