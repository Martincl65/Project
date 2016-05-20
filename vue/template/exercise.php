<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <img src="images/Logo-NEO-SOFT.png" alt="Neo Soft" class="sidebar-brand-logo"/>
                    </a>
                </li>
                <li class="sidebar-small-info" >
                    <a href="#">
                        <strong>Prénom NOM</strong><br/>
                        <?php echo $test->getLevel()->getLabel();?><br/>
                        Temps estimé : <?php echo $test->getTotalTime(); ?>
                    </a>
                </li>
                <?php foreach ($test->getExercises() as $testExercise): ?>
                    <li>
                        <a href="?p=exercise&test_id=<?php echo $test->getId(); ?>&exercise_id=<?php echo $testExercise->getId(); ?>">
                            <i>
                                <?php echo $testExercise->getTitle(); ?>
                                &nbsp;&nbsp;<span class="label label-<?php echo $testExercise->getLanguage()->getLabel();?>"><?php echo $testExercise->getLanguage()->getLabel(); ?></span>
                            </i>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-lg fa-bars"></i> </a>
                        <h1><?php echo $exercise->getTitle();?></h1>
                        <h2 class="title-<?php echo $exercise->getLanguage()->getLabel();?>"><?php echo $exercise->getLanguage()->getLabel();?></h2>
                    </div>
                    <div class="col-md-6 col-sm-12 mg-top-20">
                        <p><strong>Temps estimé : </strong><?php echo $exercise->getTime();?></p>
                        <p><?php echo $exercise->getDetail();?></p>
                    </div>
                    <div class="col-md-6 col-sm-12 mg-top-20">
                        <form action="#" method="post">
                            <?php echo $form->textArea('content', array('class' => 'code')); $response->getContent()?>
                            <?php echo $form->submit(); ?>
                        </form>
                    </div>
                    <div class="col-xs-12 mg-top-20">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/js/ace/ace.js"></script>
    <script src="/js/ace/theme-vibrant_ink.js"></script>
    <script src="/js/ace/mode-<?php echo $exercise->getLanguage()->getLabel();?>.js"></script>
    <script src="/js/jquery-ace.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            $('.code').ace({ theme: 'vibrant_ink', lang: '<?php echo $exercise->getLanguage()->getLabel();?>'});
        });

    </script>
</body>
</html>
