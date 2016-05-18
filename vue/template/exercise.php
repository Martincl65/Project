<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar collapse width" id="sidebar">
                <ul class="nav nav-sidebar">
                    <p class="active">Nom Prenom <span class="sr-only">(current)</span></p>
                    <p class="active">Test <?php echo $test->getLevel()->getLabel();?><span class="sr-only">(current)</span></p>
                    <p class="active">Temps estimé : <?php echo $test->getTotalTime(); ?><span class="sr-only"></span></p>
                    <?php foreach ($test->getExercises() as $testExercise): ?>
                        <li><a href="?p=exercise&test_id=<?php echo $test->getId(); ?>&exercise_id=<?php echo $testExercise->getId(); ?>"><i><?php echo $testExercise->getTitle(); ?><span class="label label-<?php echo $testExercise->getLanguage()->getLabel();?>"><?php echo $testExercise->getLanguage()->getLabel(); ?></span></i></a></li>
                    <?php endforeach; ?>
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
                    <form action="#" method="post">
                        <?php echo $form->textArea('content', array('class' => 'code')); ?>
                        <?php echo $form->submit(); ?>
                    </form>
                </div>
                <div class="col-xs-12 mg-top-20 MenuBas">
                    <button type="button" class="btn btn-danger btn-nav pull-left">Precédent</button>
                    <button type="button" class="btn btn-success btn-nav pull-right"> Suivant </button>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="/js/moment.js"></script>
<script src="/js/ace/ace.js"></script>
<script src="/js/ace/theme-vibrant_ink.js"></script>
<script src="/js/ace/mode-<?php echo $exercise->getLanguage()->getLabel();?>.js"></script>
<script src="/js/jquery-ace.min.js"></script>

<script type="text/javascript">
    $(function(){
        $('.code').ace({ theme: 'vibrant_ink', lang: '<?php echo $exercise->getLanguage()->getLabel();?>'});
    });

</script>
</body>
</html>
