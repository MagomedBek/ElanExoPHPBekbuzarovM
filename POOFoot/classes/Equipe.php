<?php
    class Equipe{
        private string $nomEquipe;
        private int $dateCreation;
        private Pays $localisation;
        private array $contrats;

        public function __construct(string $nomEquipe,int $dateCreation,Pays $localisation){
            $this->nomEquipe = $nomEquipe;
            $this->dateCreation = $dateCreation;
            $this->localisation = $localisation;
            $this->localisation->addEquipe($this);
            $this->contrats = [];

        }

        public function getNomEquipe(): string{
            return $this->nomEquipe;
        }

        public function setNomEquipe( string $nomEquipe){
            $this->nomPays = $nomEquipe;
        }


        public function getDateCreation(): int{
            return $this->dateCreation;
        }

        public function setDateCreation( string $dateCreation){
            $this->dateCreation = $dateCreation;
        }


        public function getLocalisation(): int{
            return $this->localisation;
        }

        public function setLocalisation(Pays $localisation){
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

    public function getInfos(){
        $info ="<h2>".$this->getNomEquipe()."</h2><p>".$this->getLocalisation()." - ".$this->getDateCreation()."</p>";
        return $info;
    }


    public function afficherJoueurs(){
        $result ="<div class='titre'>".$this->getInfos()."</div><div class = 'contenu'>";
            foreach($this->contrats as $contrat){
                $result .= "<p><b>". $contrat->getJoueur()."</b> (".$contrat->getDateContrat().")</p>";
            }
            $result .= "</div>";
        return $result;

    }




        public function __toString(){
            $result = $this->nomEquipe;
            return $result;
        }
    

    
    }