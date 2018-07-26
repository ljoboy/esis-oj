<?php
	class Etudiant {
		private $id;
		private $matricule;
		private $pwd;
		private $sexe;
		
		public function __construct($id, $matricule, $pwd, $sexe) {
			$this->id = $id;
			$this->matricule = $matricule;
			$this->pwd = $pwd;
			$this->sexe = $sexe;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function getMatricule() {
			return $this->matricule;
		}
		
		public function getPwd() {
			return $this->pwd;
		}

        public function getSexe()
        {
            return $this->sexe;
        }
	}
?>