<?php
	require_once('../models/structure/etudiant.class.php');
	require_once('../models/dao/connexiondb.class.php');
	require_once('../models/dao/etudiant.dao.php');
	
	if(isset($_POST['matricule'], $_POST['pwd'])) {
		$matricule = $_POST['matricule'];
		$pwd = $_POST['pwd'];
		
		$etudiant = new Etudiant(0, $matricule, $pwd,"");
		$etudao = new EtudiantDAO();

		$res = $etudao->seConnecter($etudiant);
		
		if($res) {
			//Créer une session
			session_start();
			$_SESSION['user'] = $res;
			
			header('Location: ../views/today.php');
		} else {
			header('Location: ../views/index.php?error=3');
		}
		
	} else {
		echo 'Erreur dans les données envoyées!';
	}