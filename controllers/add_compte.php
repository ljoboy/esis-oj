<?php
	require_once('../models/structure/etudiant.class.php');
	require_once('../models/dao/connexiondb.class.php');
	require_once('../models/dao/etudiant.dao.php');
	include_once("functions.php");
	// var_dump($_POST);die();
	if(isset($_POST['matricule'], $_POST['pwd'], $_POST['pwdConf'])) {
		$matricule = e($_POST['matricule']);
		$pwd = e($_POST['pwd']);
		$pwdconf = e($_POST['pwdConf']);
		$gender = isset($_POST['gender']) ? "m" : "f";
		
		if($pwd == $pwdconf) {
			$etudiant = new Etudiant(0, $matricule, password_hash($pwd,PASSWORD_BCRYPT),$gender);
			$etudao = new EtudiantDAO();

			$res = $etudao->creerCompte($etudiant);
			
			if($res) {
				//Créer une session
				
				session_start();
				$_SESSION['matricule'] = $matricule;
				header('Location: ../views/index.php?success=1');
			} else {
				header('Location: ../views/index.php?error=2');
			}
			
		} else {
			header('Location: ../views/index.php?error=1');
		}
		
	} else {
		header('Location: ../views/index.php?error=3');
	}
?>