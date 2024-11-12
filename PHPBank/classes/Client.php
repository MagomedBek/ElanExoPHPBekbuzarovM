<?php
class Client {
    private string $nom;
    private string $prenom;
    private string $email;
    private array $contrats;
    //private Entreprise $entreprise;
    public function __construct(string $nom,string $prenom,string $email/*,Entreprise $entreprise*/){
        $this->nom = $nom;
        $this->prenom =$prenom;
        $this->email = $email;
        $this->contrats = [];
       // $this->entreprise = $entreprise;
        //$this->entreprise->addEmploye($this);
        
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
        return $this->dateCreation;
    }

    public function  setPrenom($prenom){
         $this->dateCreation = $dateCreation; 
    }

    public function  getEmail(): string
    {
        return $this->adresse;
    }

    public function  setEmail($email){
         $this->email = $email; 
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
        //array_push($this->$contrats,$contrat);
    }

    public function afficherEntreprise(){
        $result ="<h2>Entreprise de $this</h2>";
            foreach($this->contrats as $contrat){
                $result .= $contrat->getEmploye()." (".$contrat->getDateEmbauche()." en ".$contrat->getTypeContrat().")<br>";
            }

        return $result;

    }

  /* public function  getEntreprise()
   {
       return $this->entreprise;
   }

   public function  setEntreprise(Entreprise $entreprise){
    $this->entreprise = $entreprise; 
}

public function getInfos(){
    return  $this." travail dans l'entreprise ".$this->entreprise->getRaisonSociale();
}*/


    public function __toString(){
        return $this->prenom. " ".$this->nom." ";
    }


}