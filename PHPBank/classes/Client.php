<?php
class Client {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;

    public function __construct(string $nom,string $prenom,string $dateNaissance,string $ville){
        $this->nom = $nom;
        $this->prenom =$prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville =$ville;
        $this->comptes = [];
       
        
    }

    public function  getNom(): string
    {
        return $this->nom;
    }

    public function  setNom($nom){
         $this->nom = $nom; 
    }
    

    public function  getPrenom(): string
    {
        return $this->prenom;
    }

    public function  setPrenom($prenom){
         $this->prenom = $prenom; 
    }

    public function  getVille(): string
    {
        return $this->ville;
    }

    public function  setVille($ville): string
    {
        return $this->ville;
    }

    public function  getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function  setDateNaissance($dateNaissance){
         $this->dateNaissance = $dateNaissance; 
    }


    public function  getComptes()
    {
        return $this->comptes;
    }

    public function  setComptes($comptes){
         $this->comptes = $comptes; 
    }


    public function getInfos(){
        return $this->getPrenom()." ".$this->getNom()." a été né(e) le ".$this->getDateNaissance()->format("d-n-Y")." (".date("Y")- $this->getDateNaissance()->format("Y")." ans) <br>";
    }

    public function addCompte(Compte $comptes){
        $this->comptes [] = $comptes;
        ;
    }

    public function afficherCompte(){
        $result ="<h2>Comptes de $this</h2>";
            foreach($this->comptes as $compte){
                $result .= $compte."<br>";
            }

        return $result;

    }

    public function __toString(){
        return $this->prenom. " ".$this->nom;
    }



}