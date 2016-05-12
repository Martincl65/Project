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
                    <p class="active">Test de niveau ? <span class="sr-only">(current)</span></p>
                    <p class="active">Temps estimé : 00h45<span class="sr-only">(current)</span></p>
                    <p><strong><u></br >Liste des exercices</u></strong></p>
                    <li><a href="?p=exercise&test_id=1&exercise_id=1"><i>Exercice 1</i></a></li>
                    <li><a href="?p=exercise&test_id=1&exercise_id=2"><i>Exercice 2</i></a></li>
                </ul>
            </div>
            <div class="col-xs-12 main">
                <button class="btn pull-right" id="collapse-sidebar" role="button" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar">Menu</button>
                <?php echo $content; ?>
            </div>
        </div>
    </div>
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/js/moment.js"></script>
    <script src="/js/ace/ace.js"></script>
    <script src="/js/ace/theme-vibrant_ink.js"></script>
    <script src="/js/ace/mode-ruby.js"></script>
    <script src="/js/jquery-ace.min.js"></script>

    <script type="text/javascript">
        $(function(){
            $('.texte').ace({ theme: 'vibrant_ink', lang: 'ruby'});
        });

    </script>
</body>
</html>
