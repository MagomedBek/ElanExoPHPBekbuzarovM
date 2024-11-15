
<?php
    class Pays{
        private string $nomPays;
        private array $joueurs;
        private array $equipes;

        public function __construct(string $nomPays){
            $this->nomPays = $nomPays;
            $this->joueurs = [];
            $this->equipes = [];

        }

        public function getNomPays(): string{
            return $this->nomPays;
        }

        public function setNomPays(string $nomPays){
            $this->nomPays = $nomPays;
        }


        public function getJoueurs(){
            return $this->joueurs;
        }

        public function setJoueurs($joueurs){
            $this->joueurs = $joueurs;
        }

        public function getEquipes(){
            return $this->equipes;
        }

        public function setEquipes($equipes){
            $this->equipes = $equipes;
        }


        public function addJoueur(Joueur $joueur){
            $this->joueurs [] = $joueur;
            
        }
    
        public function afficherJoueurs(){
            $result ="<h2>Jouers nés  en  $this</h2>";
                foreach($this->joueurs as $joueur){
                    $result .= $joueur."<br>";
                }
    
            return $result;
    
        }


        public function addEquipe(Equipe $equipe){
            $this->equipes [] = $equipe;
            //array_push($this->$contrats,$contrat);
        }
    
        public function afficherEquipes(){
            $result ="<h2> $this</h2><div class = 'contenu'>";
             
                foreach($this->equipes as $equipe){
                    $result .="<p>".$equipe->getNomEquipe()."</p>";
                }
                $result .="</div>";
    
            return $result;
    
        }

        public function __toString(){
            return $this->nomPays;
        }
    

    }

