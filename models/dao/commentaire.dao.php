<?php

	class CommentaireDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function ajouterCommentaire($commentaire) {
			$q = $this->db->prepare("INSERT INTO commentaire(idEtudiant, idPublication, contenu, date) VALUES(:idEtd, :idPub, :contenu, :date)");
			$q->execute([
			    "idEtd" => $commentaire->getIdEtudiant(),
                "idPub" => $commentaire->getIdPublication(),
                "date" => $commentaire->getDate(),
                "contenu" => $commentaire->getContenu()
            ]);
			return $q;
		}
		
		public function getAllCommentaires($pub) {
			$q = $this->db->prepare("SELECT * FROM commentaire WHERE idPublication = :idPub ORDER BY id DESC");
			$q->execute(["idPub"=>$pub->getId()]);
		}
		
		public function like($id) {
			$q = $this->db->prepare("UPDATE commentaire SET nblike = commentaire.nblike+1 WHERE id = :id");
			$q->execute(["id"=>$id]);
			return $q;
		}
		
		public function dislike($id) {
            $q = $this->db->prepare("UPDATE commentaire SET nbdislike = commentaire.nbdislike+1 WHERE id = :id");
            $q->execute(["id"=>$id]);
            return $q;
		}
	}
?>