<?php
class Entreprise {

    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $cp;
    private string $ville;
    private array $contrats;
    //private array $employes;

    public function __construct(string $raisonSociale,string $dateCreation,string $adresse,string $cp,string $ville){
        $this->raisonSociale =$raisonSociale;
        $this->dateCreation = new DateTime($dateCreation);
        $this->adresse =$adresse;
        $this->cp =$cp;
        $this->ville =$ville;
        $this->contrats = [];
       // $this->employes = [];
        
    }

    public function  getRaisonSociale(): string
    {
        return $this->raisonSociale;
    }

    public function  setRaisonSociale($raisonSociale){
         $this->raisonSociale = $raisonSociale; 
    }
    

    public function  getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    public function  setDateCreation($dateCreation){
         $this->dateCreation = $dateCreation; 
    }

    public function  getAdresse(): string
    {
        return $this->adresse;
    }

    public function  setAdresse($raisonSociale){
         $this->raisonSociale = $raisonSociale; 
    }

    public function  getCp(): string
    {
        return $this->cp;
    }

    public function  setCp($cp){
         $this->cp = $cp; 
    }

    public function  getVille():string
    {
        return $this->ville;
    }

    public function  setville($ville){
         $this->ville = $villi; 
    }

    public function getAdresseComlete(){
        return $this->adresse." ".$this->cp." ".$this->ville;

    }

    public function getInfos(){
        return  $this->getRaisonSociale()." a été crée le ".$this->getDateCreation()->format("d-n-Y").
        " et se situe à l'adresse suivante ".$this->getAdresseComlete()."<br>";
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

    public function afficherEmployes(){
        $result ="<h2>Employés de $this</h2>";
            foreach($this->contrats as $contrat){
                $result .= $contrat->getEmploye()." (".$contrat->getDateEmbauche()." en ".$contrat->getTypeContrat().")<br>";
            }

        return $result;

    }

    /*public function  getEmployes():string
    {
        return $this->employes;
    }

    public function  setEmployes($employes){
         $this->employes = $employes; 
    }

    public function addEmploye(Employe $employe){
        $this->employes [] = $employe;
        //array_push($this->$employes,$employe);
    }

    public function afficherEmployes(){
        $result ="<h2>Employés de $this</h2><ul>";
            foreach($this->employes as $employe){
                $result .= "<li>$employe</li>";
            }

            $result.="</ul>";

        return $result;

    }*/

    public function __toString(){
        return $this->raisonSociale. " (".$this->dateCreation->format("Y")." )";
    }




}