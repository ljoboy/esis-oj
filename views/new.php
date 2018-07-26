<?php
//var_dump($_SESSION);die();
require_once('check_connexion.php');
include_once('../controllers/functions.php') ?>
<!doctype html>
<html>
	<head>
		<title>ESIS-OJ</title>
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
		<main>
            <div class="container">
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <!--Panel-->
                        <div class="card text-xs-center">
                            <div class="card-header card-info white-text">
                                <h2><strong>Nouvelle Publication</strong></h2>
                            </div>
                            <div class="card-block">
                                <form method="post" action="../controllers/new_publication.php" >
                                    <div class="md-form">
                                        <i class="fa fa-pencil prefix"></i>
                                        <textarea type="text" name="contenu" id="form8" class="md-textarea" required></textarea>
                                        <label for="form8">Tapez votre publication ici</label>
                                    </div>
                                    <div class="md-form">
                                        <button class="btn btn-default">Publier</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-muted default-color white-text">
                                <p>Vos publications sont anonymes <i class="fa fa-user-secret"></i>.</p>
                            </div>
                        </div>
                        <!--/.Panel-->

                    </div>
                </div>
            </div>
        </main>
		<?php include_once('foot.php');
        if(isset($_GET['error'])) {
            if($_GET['error'] == 3)
                echo '$(document).ready(function(){toastr["error"]("Erreur inattendu ! <br/> Veuillez réessayer...") });';
        }
		?>
	</body>
</html>