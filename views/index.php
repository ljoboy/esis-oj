<?php
	session_start();
	if(isset($_SESSION['user'])) {
		header('Location: today.php');
	}
	include("../controllers/functions.php");
	$imgSlider = imgFromDir("slider");
	$slideTxt[] = ["ESIS","Une application conçu et développé par et pour les étudiants de l'ESIS"];
    $slideTxt[] = ["OPEN","Ouvert à tous, garantit un anonymat total en publication ou en commentaire"];
    $slideTxt[] = ["JOURNAL","Récense toutes les publications et les commentaires et plus encore"];
?>
<!doctype html>
<html>
	<head>
		<title>ESIS-OJ | Accueil</title>
		<!-- METAS -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="msapplication-tap-highlight" content="no" />
		<meta name="description" content="Esis-Oj est une plateforme de libre échange anonyme entre les étudiants d'esis" />
		<meta name="keywords" content="esis, salama, open journal, informatique" />
		<meta name="author" content="Jonathan YOMBO Bosemwa Lijerbul LJOBOY" />
        <meta name="phone" content="+243991888702" />
		<!-- CSS -->    
		<link href="static/css/compiled.min.css" type="text/css" rel="stylesheet" />
		<link href="static/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="static/css/style.css" />
		<link rel="shortcut icon" href="static/img/ico_etude.png" type="image/x-icon" />
		<style rel="stylesheet">
			main {
				padding-top: 3rem;
				padding-bottom: 2rem;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-dark cyan justify-content-between animated fadeInUpBig">
			<a class="navbar-brand animated pulse infinite" href=""><h1><img src="static/img/ico_etude.png" alt="esis-oj icon">ESIS-OJ</h1></a>
			<form class="form-inline my-1" method="post" action="../controllers/new_connexion.php">
				<div class="md-form form-sm mt-0">
					<div class="md-form form-group">
						<i class="fa fa-user prefix"></i>
						<input type="text" name="matricule" id="form91" class="form-control validate">
						<label for="form91">Matricule</label>
					</div>
					<div class="md-form form-group">
						<i class="fa fa-lock prefix"></i>
						<input type="password" name="pwd" id="form92" class="form-control">
						<label for="form92">Mot de passe</label>
					</div>
					<div class="md-form form-group">
						<button class="btn btn-outline-white btn-sm my-0" type="submit">Connexion</button>
					</div>
				</div>
			</form>
		</nav>
		<main>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animated fadeInRightBig">
						<!-- Slider -->
						<!--Carousel Wrapper-->
						<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
							<!--Slides-->
							<div class="carousel-inner" role="listbox">
						<?php
							$i = 0;
							foreach ($imgSlider as $img) {
						?>
								<div class="carousel-item <?php echo ($i == 0) ? "active" : ""  ?>">
									<img src="<?php echo $img ?>" alt="Image du slider">
                                    <!--Caption-->
                                    <div class="carousel-caption">
                                        <div class="animated fadeInDown">
                                            <h3 class="h3-responsive"><?php echo $slideTxt[$i][0] ?></h3>
                                            <p><?php echo $slideTxt[$i][1] ?></p>
                                        </div>
                                    </div>
                                    <!--Caption-->
								</div>
						<?php $i++;
							}
							?>
							</div>
							<!--/.Slides-->

							<!--Thumbnails-->
							<a class="left carousel-control" href="#carousel-thumb" role="button" data-slide="prev">
								<span class="icon-prev" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-thumb" role="button" data-slide="next">
								<span class="icon-next" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							<!--/.Thumbnails-->

							<ol class="carousel-indicators">
							<?php
							$i = 0;
							foreach ($imgSlider as $img) {
						?>
								<li data-target="#carousel-thumb" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0) ? "active" : ""  ?>"> <img src="<?php echo $img ?>" class="img-fluid"></li>
								<?php $i++;
							}
							?>
							</ol>

						</div>
						<!-- Slider -->
					</div>
					<div class="col-md-6 animated fadeInLeftBig">
					<!--Form with header-->
						<form method="post" action="../controllers/add_compte.php" class="card">
							<div class="card-block">
								<!--Header-->
								<div class="form-header mdb-gradient">
									<h3 class="animated fadeInLeftBig"><i class="fa fa-user-plus"></i> Créer un compte :</h3>
								</div>

								<!--Body-->
								<div class="md-form animated fadeInRightBig">
									<i class="fa fa-user prefix"></i>
									<input type="text" id="form3" name="matricule" class="form-control" required/>
									<label for="form3">Matricule</label>
								</div>
								<div class="md-form animated fadeInDown">
									<i class="fa fa-key prefix"></i>
									<input type="password" name="pwd" id="form2" class="form-control" required/>
									<label for="form2">Mot de passe</label>
								</div>
								<div class="md-form animated fadeInDownBig">
									<i class="fa fa-lock prefix"></i>
									<input type="password" name="pwdConf" id="form4" class="form-control" required/>
									<label for="form4">Confirmer mot de passe</label>
								</div>
                                <div class="switch">
                                    Votre genre :
                                    <label>
                                        <i class="fa fa-female prefix"></i> F
                                        <input type="checkbox" name="gender"/>
                                        <span class="lever"></span>
                                        M <i class="fa fa-male prefix"></i>
                                    </label>
                                </div>
								<div class="text-xs-center animated fadeInDownBig">
									<button class="btn btn-cyan" type="submit">Enregister</button>
								</div>

							</div>
						</form>
						<!--/Form with header-->
					</div>
				</div>
			</div>

		</main>
		<?php include_once('foot.php'); ?>
		<script>
		<?php 
			if(isset($_GET['error'])) {
				if($_GET['error'] == 3)
					echo '$(document).ready(function(){toastr["error"]("Matricule et/ou Mot de passe incorrect") });';
				if($_GET['error'] == 1)
					echo '$(document).ready(function(){toastr["error"]("Les deux mots de passe ne sont pas identiques!") });';
				if($_GET['error'] == 2)
					echo '$(document).ready(function(){toastr["error"]("Erreur Inconnu !") });';
			}elseif (isset($_GET['success'])) {
				if($_GET['success'] == 1)
					echo '$(document).ready(function(){toastr["info"]("Enregistrement réussi <br/> Veuillez vous connecter maintenat !") });';
			}
							
		?>
		</script>
	</body>
</html>