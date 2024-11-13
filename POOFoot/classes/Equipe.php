<?php
    class Equipe{
        private string $nomEquipe;
        private DateTime $dateCreation;
        private Pays $localisation;
        private array $contrats;

        public function __construct(string $nomEquipe,string $dateCreation,Pays $localisation){
            $this->nomEquipe = $nomEquipe;
            $this->dateCreation = new DateTime($dateCreation);
            $this->localisation = $localisation;
            $this->localisation->addEquipe($this);
            $this->contrats = [];

        }

        public function getNomEquipe(){
            return $this->nomEquipe;
        }

        public function setNomEquipe($nomEquipe){
            $this->nomPays = $nomEquipe;
        }


        public function getDateCreation(){
            return $this->dateCreation;
        }

        public function setDateCreation($dateCreation){
            $this->dateCreation = $dateCreation;
        }


        public function getLocalisation(){
            return $this->localisation;
        }

        public function setLocalisation($localisation){
            $this->localisation = $localisation;
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

    public function afficherJoueurs(){
        $result ="<h3>Joueur de $this</h3>";
            foreach($this->contrats as $contrat){
                $result .= "<p>". $contrat->getJoueur()." (".$contrat->getDateContrat().")</p>";
            }

        return $result;

    }


        public function __toString(){
            return $this->getNomEquipe(). " (".$this->dateCreation->format("Y")." )";
        }
    

    
    }