<?php
class Auteur {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private array $livres;

    public function __construct(string $nom,string $prenom,string $dateNaissance){
        $this->nom = $nom;
        $this->prenom =$prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->livres = [];
       
        
    }

    public function  getNom()
    {
        return $this->nom;
    }

    public function  setNom($nom){
         $this->nom = $nom; 
    }
    

    public function  getPrenom()
    {
        return $this->prenom;
    }

    public function  setPrenom($prenom){
         $this->prenom = $prenom; 
    }

    public function  getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function  setDateNaissance($dateNaissance){
         $this->dateNaissance = $dateNaissance; 
    }
    public function  getLivres()
    {
        return $this->livres;
    }

    public function  setLivres($livres){
         $this->livres = $livres; 
    }


    public function getInfos(){
        return $this->getPrenom()." ".$this->getNom()/*." a été né(e) le ".$this->getDateNaissance()->format("d-n-Y")*/."<br>";
    }

    public function addLivre(Livre $livre){
        $this->livres [] = $livre;
        //array_push($this->$contrats,$contrat);
    }

    public function afficherLivre(){
        $result ="<h2>Livres de $this</h2>";
            foreach($this->livres as $livre){
                $result .= $livre."<br>";
            }

        return $result;

    }

    public function __toString(){
        return $this->prenom. " ".$this->nom." ".$this->getDateNaissance()->format("d-n-Y");
    }


}