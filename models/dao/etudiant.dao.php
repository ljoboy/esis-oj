<?php

	class EtudiantDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function seConnecter($etudiant) {
			$str = "SELECT * FROM etudiant WHERE matricule = :matricule";
			$req = $this->db->prepare($str);
			$req->execute(array(
				'matricule' => $etudiant->getMatricule()
			));
			while($res = $req->fetch()){
				$user[] = $res;
			}
			$user = $user[0];
			// var_dump($user);
			if(password_verify($etudiant->getPwd(),$user['pwd'])) {
				return $user;
			} else {
				return false;
			}
		}
		
		public function creerCompte($etudiant) {
			$str = "INSERT INTO etudiant VALUES(null, :matricule, :pwd, :gender)";
			$req = $this->db->prepare($str);
			$res = $req->execute(array(
				'matricule' => $etudiant->getMatricule(),
				'pwd' => $etudiant->getPwd(),
                "gender" => $etudiant->getSexe()
			));
			
			if($res) {
				return true;
			} else {
				return false;
			}
		}
	}
?>