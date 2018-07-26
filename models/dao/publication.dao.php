<?php
	class PublicationDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function nouvellePublication($publication) {
//		    var_dump($publication);die();
			$r = $this->db->prepare("INSERT INTO publication(idEtudiant, contenu, date, nblike, nbdislike) VALUES(:idEtudiant, :contenu, now(), 0, 0)");
			$r->execute([
			    "idEtudiant" => $publication->getIdEtudiant(),
                "contenu" => $publication->getContenu()
            ]);
            return $r;
		}
		
		public function top10() {
            $top10 = [];
            $r = $this->db->prepare("SELECT * FROM publication ORDER BY nblike DESC LIMIT 10");
            $r->execute();
            while($q=$r->fetch())
                $top10[] = $q;
            return $top10;
		}
		
		public function getAllPublication() {
		    $all = [];
		    $r = $this->db->prepare("SELECT * FROM publication ORDER BY date DESC");
		    $r->execute();
            while($q=$r->fetch())
                $all[] = $q;
            return $all;
		}
		
		public function like($id) {
			$r = $this->db->prepare("UPDATE publication SET nblike = publication.nblike+1 WHERE id = :id");
			$r->execute([
			    "id" => $id
            ]);
			return $r;
		}
		
		public function dislike($id) {
            $r = $this->db->prepare("UPDATE publication SET nbdislike = publication.nbdislike+1 WHERE id = :id");
            $r->execute([
                "id" => $id
            ]);
            return $r;
		}

        public function today() {
            $today=[];
		    $r = $this->db->prepare("SELECT * FROM publication WHERE date LIKE :today");
		    $r->execute([
		        "today"=>date("Y-m-d")."%"
            ]);
		    while($q=$r->fetch())
                $today[] = $q;
		    return $today;
        }

        public function pubById($id)
        {
            $r = $this->db->prepare("SELECT * FROM publication WHERE id = :id");
            $r->execute(["id"=>$id]);
            while($q=$r->fetch())
                $pub = $q;
            return $pub;
        }

        public function getComment($id){
            $comments = [];
            $r = $this->db("SELECT * FROM commentaire WHERE id = :id");
            $r->execute(["id"=>$id]);
            while($q=$r->fetch())
                $comments[] = $q;
            return $comments;
        }
        
        public function nbComment($id){
            $r = $this->db("SELECT COUNT(*) FROM commentaire WHERE id = :id");
            $r->execute(["id"=>$id]);
            while($q=$r->fetch())
                $nb = $q;
            return $nb;
        }
	}