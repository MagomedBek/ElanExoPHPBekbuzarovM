<?php
class Compte {

    private string $libelle;
    private float $soldeInitiale;
    private string $devise;
    private Client $client;
    

    public function __construct(string $libelle,float $soldeInitiale,string $devise,Client $client){
        $this->libelle =$libelle;
        $this->soldeInitiale =$soldeInitiale;
        $this->devise =$devise;
        $this->client =$client;
        $this->client->addCompte($this);
        
        
    }

    public function  getlibelle(): string
    {
        return $this->libelle;
    }

    public function  setlibelle($libelle){
         $this->libelle = $libelle; 
    }
    

    public function  getSoldeInitiale()
    {
        return $this->soldeInitiale;
    }

    public function  setSoldeInitiale($soldeInitiale){
         $this->soldeInitiale = $soldeInitiale; 
    }

    public function  getDevise()
    {
        return $this->devise;
    }

    public function  setDevise($devise){
         $this->devise = $devise; 
    }

    public function  getClient()
    {
        return $this->client;
    }
 
    public function  setClient(Client $client){
     $this->client = $client; 
 }


    
    public function getInfos(){
        return "Sur le compte ".$this->GetLibelle()." de ". $this->getClient()->getNom()." ".$this->getClient()->getPrenom()." il y a ".$this->getSoldeInitiale().
        "  ".$this->getDevise()."<br>";
    }

    public function crediter(float $somme ){
        $this->soldeInitiale +=  $somme;

    }

    public function debiter(float $somme ){
        $this->soldeInitiale -=  $somme;
    } 



    public function virement(Compte $compteB,float $somme){
        $this->debiter($somme);
        $compteB->crediter($somme);
        echo $this->getlibelle()." a effectué le virment à la somme de $somme ".$this->getDevise()."vers le $compteB <br>";

    }

  

    public function __toString(){
        return $this->GetLibelle()." a ".$this->getSoldeInitiale(). "  ".$this->getDevise()."<br>";
    }




}