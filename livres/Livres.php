
<?php
    class Livres {
        private string $_titre ;
        private int $_nbPage ;
        private DateTime $_anneeParution ;
        private float $_prix ;
        private Auteur $_auteur ;

        public function __construct ($titre , $nbPage , $anneeParution , 
        $prix , $auteur) {
        
            $this -> _titre = $titre ;
            $this -> _nbPage = $nbPage ;
            $this -> _anneeParution = new DateTime ($anneeParution) ;
            $this -> _prix = $prix ;
            $this -> _auteur = $auteur ;
            $this -> _auteur->ajouterLivre($this);
        }

        public function getTitre () {
            return $this -> _titre ;
        }

        public function getNbPage () {
            return $this -> _nbPage ;
        }

        public function getAnneeParution () {
            return $this -> _anneeParution -> format ('Y') ;
        }

        public function getPrix () {
            return $this -> _prix ;
        }

        public function getAuteur () {
            return $this -> _auteur ;
        }

        public function setTitre ($titre) {
            $this -> _titre = $titre ;
        }
        public function setnbPage ($nbPage) {
            $this -> _nbPage = $nbPage ;
        }

        public function setAnneeParution ($anneeParution) {
            $this -> _anneeParution = $anneeParution ;
        }

        public function setPrix ($prix) {
            $this -> _prix = $prix ;
        }

        public function setAuteur ($auteur) {
            $this -> _auteur = $auteur ;
        }
        
        public function __toString () {
            return $this -> _titre." (".$this -> getAnneeParution ().") : "
            .$this -> _nbPage." pages / ".$this -> _prix."€ " ;
        }
    }


?>
