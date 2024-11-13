<?php
    class Contrat{
        private  Equipe $equipe;
        private  Joueur $joueur;
        private  DateTime $dateContrat;

        public function __construct(Equipe $equipe,Joueur $joueur,string $dateContrat){
            $this->equipe = $equipe;
            $this->joueur = $joueur;
            $this->dateContrat = new DateTime($dateContrat);
            $this->equipe->addContrat($this);
            $this->joueur->addContrat($this);
        }


        
        public function getEquipe(){
            return $this->equipe;
        }

        public function setEquipe($equipe){
            $this->equipe = $equipe;
        }


        public function getJoueur(){
            return $this->joueur;
        }

        public function setJoueur($joueur){
            $this->joueur = $joueur;
        }


        public function getDateContrat(){
            return $this->dateContrat->format("Y");
        }

        public function setDateContrat($dateContrat){
            $this->dateContrat = $dateContrat;
        }
     


    }