
<?php
    class Joueur{

        private string $nom;
        private string $prenom;
        private DateTime $dateNaissance;
        private Pays $paysNaissance;
        private array $contrats;

        public function __construct(string $nom,string $prenom,string $dateNaissance,Pays $paysNaissance){
            $this->nom = $nom;
            $this->prenom =$prenom;
            $this->dateNaissance = new DateTime($dateNaissance);
            $this->paysNaissance = $paysNaissance;
            $this->paysNaissance->addJoueur($this);
            $this->contrats = [];
        }


        public function getNom(){
            return $this->nom;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function getDateNaissance(){
            return $this->dateNaissance;
        }

        public function setDateNaissance($dateNaissance){
            $this->dateNaissance = $dateNaissance;
        }


        public function getPaysNaissance(){
            return $this->dateNaissance;
        }

        public function setPaysNaissance($paysNassance){
            $this->paysNassance = $paysNassance;
        }



        public function  getContrats()
        {
            return $this->contrats;
        }
    
    
        public function  setContrats($contrats){
            $this->contrats = $contrats; 
       }
    
        public function addContrat(Contrat $contrat){
            $this->contrats [] = $contrat;
            
        }
    
        public function afficherEquipes(){
            $result ="<h3>Carriere de $this</h3>";
                foreach($this->contrats as $contrat){
                    $result .= "<p>".$contrat->getEquipe()." (".$contrat->getDateContrat().")</p>";
                }
    
            return $result;
    
        }


        public function __toString(){
            return $this->nom. " ".$this->prenom." (".$this->dateNaissance->format("Y")." )";
        }

    }