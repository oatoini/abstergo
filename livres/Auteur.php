<?php
    class Auteur {
        private string $_nom ;
        private string $_prenom ;
        private array $_tableauLivres;

        public function __construct ($nom , $prenom) {
        
            $this -> _nom = $nom ;
            $this -> _prenom = $prenom ;
            $this -> _tableauLivres = [] ;
        }

        public function getNom () {
            return $this ->_nom ;
        }

        public function getPrenom () {
            return $this ->_nom ;
        }

        public function setNom ($nom) {
            $this ->_nom = $nom ;
        }

        public function setPrenom ($prenom) {
            $this ->_prenom = $prenom ;
        }

        public function ajouterLivre($livre) {
            $this -> _tableauLivres[] = $livre;
        }

        public function afficherBibliographie() {
            foreach ($this->_tableauLivres as $livre){
                echo $livre."<br>";
            }
        }

        public function __toString () {
            return $this -> _nom." ".$this -> _prenom." ";
        }

    }

?>
