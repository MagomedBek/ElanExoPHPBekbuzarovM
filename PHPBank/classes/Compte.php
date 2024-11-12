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
        return "Sur le compte".$this->GetLibelle()." il y a ".$this->getSoldeInitiale().
        "  ".$this->getDevise()." et il appartient à ".getClient()."<br>";
    }



  

    public function __toString(){
        return $this->GetLibelle()." a ".$this->getSoldeInitiale(). "  ".$this->getDevise()."<br>";
    }




}