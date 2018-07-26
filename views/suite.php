<?php
require_once('check_connexion.php');
include_once('../controllers/functions.php');
$id = $_GET['id'];
$id =  !is_nan($id) ? $_GET['id'] : null;
if (!isset($_GET['id']) || $id == null){
    header('location:all.php');
    exit();
}
require_once('../controllers/suite.php');
?>
<!doctype html>
<html>
<head>
    <title>ESIS-OJ | Voir la suite</title>
    <!-- METAS -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- CSS -->
    <link href="static/css/compiled.min.css" type="text/css" rel="stylesheet" />
    <link href="static/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="static/css/style.css" />
    <link rel="shortcut icon" href="static/img/ico_etude.png" type="image/x-icon">
    <style rel="stylesheet">
        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }
    </style>
</head>
<body>
<?php include_once('head.php'); ?>
<div class="container">
    <main>
        <h2 class="flex-center">Voir la suite</h2>
        <hr/>
        <div class="container-fluid">
                <blockquote class="blockquote <?php if ($pub['idEtudiant'] == $_SESSION['user']['id']) { echo "blockquote-reverse"; }?>">
                    <p class="mb-0">
                        <?php echo ucfirst(stripslashes($pub['contenu']))?>
                    </p>
                    <footer class="blockquote-footer">
                        Poster le <?php $d=strtotime($pub['date']); $d=date("d-m-Y à H:i:s",$d); echo $d; ?>
                        <cite class="text-muted">
                            &emsp; <a href="like.php?like=<?php echo $pub['id'] ?>" title="like"><i class="fa fa-thumbs-up fa-2x"></i>(<?php echo $pub['nblike'] ?>)</a>
                            &emsp; <a title="dislike" href="like.php?dislike=<?php echo $pub['id'] ?>"><i class="fa fa-thumbs-down fa-2x"></i>(<?php echo $pub['nbdislike'] ?>)</a>
                        </cite>
                    </footer>
                </blockquote>
                <hr/>
        </div>
    </main>
</div>
<?php include_once('foot.php'); ?>
</body>
</html>