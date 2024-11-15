
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


        public function getNom(): string{
            return $this->nom;
        }

        public function setNom(string $nom){
            $this->nom = $nom;
        }

        public function getPrenom():string{
            return $this->prenom;
        }

        public function setPrenom(string $prenom){
            $this->prenom = $prenom;
        }

        public function getDateNaissance(): DateTime{
            return $this->dateNaissance;
        }

        public function setDateNaissance(string $dateNaissance){
            $this->dateNaissance = $dateNaissance;
        }


        public function getPaysNaissance():Pays{
            return $this->paysNaissance;
        }

        public function setPaysNaissance(Pays $paysNassance){
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

        public function getInfos(){
            $info ="<h2>".$this->getPrenom()." ".$this->getNom()."</h2><p>".$this->getPaysNaissance()." - ".$this->getDateNaissance()->format("Y")-date("Y")."</p>";
            return $info;
        }
    
        public function afficherEquipes(){
           
           
             $result ="<div class='titre'>".$this->getInfos()."</div><div class = 'contenu'>";
            foreach($this->contrats as $contrat){
                $result .= "<p>". $contrat->getEquipe()." (".$contrat->getDateContrat().")</p>";
            }
            $result .= "</div>";
            return $result;
    
        }


        public function __toString(){
            return $this->prenom. " ".$this->nom;
        }

    }