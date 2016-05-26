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
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-lg fa-bars"></i> </a>
                </div>
                <div class="col-xs-12 mg-top-20 identif">
                    <form action="#" method="post" enctype="multipart/form-data" name="logform" id="logform" class="form-signin" role="form" >
                        <h2 class="form-signin-heading">Identification <br /> <br /></h2>
                        <?php echo $form->input('username', 'text', ['class' => 'form-control', 'placeholder' => 'login']); ?><br/>
                        <?php echo $form->input('password', 'password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']); ?><br/>
                        <?php echo $form->submit(); ?>
                    </form>
                </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });

</script>
</body>
</html>
