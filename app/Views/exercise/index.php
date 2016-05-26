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
                    <strong><?php echo $developer->getFirstName(); ?>  <?php echo $developer->getLastName()?></strong><br/>
                    <?php echo $test->getLevel()->getLabel();?><br/>
                    Temps estimé : <?php echo $test->getTotalTime(); ?>
                </a>
            </li>
            <?php foreach ($test->getExercises() as $testExercise): ?>
                <li>
                    <a href="?p=exercise&exercise_id=<?php echo $testExercise->getId(); ?>">
                        <i>
                            <?php echo $testExercise->getTitle(); ?>
                            &nbsp;&nbsp;<span class="label label-<?php echo $testExercise->getLanguage()->getLabel();?>"><?php echo $testExercise->getLanguage()->getLabel(); ?></span>
                        </i>
                    </a>
                </li>
            <?php endforeach; ?>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li class="text-center"><i><a href="?p=logout"><span class="fa fa-sign-out fa-3x" aria-hidden="true"></span></a></i></li>
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
                        <?php echo $form->textArea('content', array('class' => 'code')); ?>
                        <?php echo $form->submit(); ?>
                    </form>
                </div>
                <div class="col-xs-12 mg-top-20">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/ace/ace.js"></script>
<script src="js/ace/theme-vibrant_ink.js"></script>
<script src="js/ace/mode-<?php echo $exercise->getLanguage()->getLabel();?>.js"></script>
<script src="js/jquery-ace.min.js"></script>
<script type="text/javascript">
    $(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $('.code').ace({ theme: 'vibrant_ink', lang: '<?php echo $exercise->getLanguage()->getLabel();?>'});
    });

</script>
