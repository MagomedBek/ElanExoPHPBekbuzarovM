<?php
class Livre {
    private string $titre;
    private DateTime $dateEdition;
    private int $pages;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre,string $dateEdition,string $pages, string $prix,Auteur $auteur){
        $this->titre = $titre;
        $this->dateEdition = new DateTime($dateEdition);
        $this->pages = $pages;
        $this->prix = $prix;
        $this->auteur = $auteur;
      //$this->auteur->addLivre($this);
        
    }

    public function  getTitre()
    {
        return $this->titre;
    }

    public function  setTitre($titre){
         $this->titre = $titre; 
    }
    

    public function  getDateEdition()
    {
        return $this->dateateEdition;
    }

    public function  setPrenom($prenom){
         $this->dateEdition = $dateEdition; 
    }

    public function  getPages()
    {
        return $this->pages;
    }

    public function  setPages($pages){
         $this->pages = $pages; 
    }

    public function  getPrix()
    {
        return $this->prix;
    }

    public function  setPrix($prix){
         $this->prix = $prix; 
    }

    public function  getAuteur()
    {
        return $this->auteur;
    }
 
    public function  setAuteur(Auteur $auteur){
     $this->auteur = $auteur; 
 }


 public function getInfos(){
    return  $this." est ecrit par ".$this->auteur->getPrenom()." ".$this->auteur->getNom();
}
 

    public function __toString(){
        return $this->titre. " (".$this->dateEdition->format("Y")."): ".$this->pages." pages /".round($this->prix)." €";
    }


}