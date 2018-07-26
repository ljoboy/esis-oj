<?php 
require_once('check_connexion.php');
include_once('../controllers/functions.php');
require_once('../controllers/all.php');
?>
<!doctype html>
<html>
<head>
    <title>ESIS-OJ | Voir toutes les publications</title>
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
                <h2 class="flex-center">Toutes les publications</h2>
                <hr/>
                <div class="container-fluid">
                    <?php if(empty($all)){
                        echo "<h3 class='text-danger text'>Aucune publication</h3>";
                    }else{foreach ($all as $msg){?>
                        <blockquote class="blockquote <?php if ($msg['idEtudiant'] == $_SESSION['user']['id']) { echo "blockquote-reverse"; }?>">
                            <p class="mb-0"><?php echo stripslashes(ucfirst(substr($msg['contenu'],0,25)))?>... <a href="suite.php?id=<?php echo $msg['id'] ?>">Lire la suite</a></p>
                            <footer class="blockquote-footer">
                                Poster le <?php $d=strtotime($msg['date']); $d=date("d-m-Y à H:i:s",$d); echo $d; ?>
                                <cite class="text-muted">
                                    &emsp; <a href="like.php?like=<?php echo $msg['id'] ?>" title="like"><i class="fa fa-thumbs-up fa-2x"></i>(<?php echo $msg['nblike'] ?>)</a>
                                    &emsp; <a title="dislike" href="like.php?dislike=<?php echo $msg['id'] ?>"><i class="fa fa-thumbs-down fa-2x"></i>(<?php echo $msg['nbdislike'] ?>)</a>
                                </cite>
                            </footer>
                        </blockquote>
                        <hr/>
                    <?php } }?>
                </div>
            </main>
        </div>
		<?php include_once('foot.php'); ?>
	</body>
</html>