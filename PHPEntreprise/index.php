<h1>POO Entreprise</h1>

<?php

//require "Entrepise.php";
//require "Employe.php";

spl_autoload_register(function ($class_name){
    require "classes/". $class_name.".php";
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 Rue de Rhone", "67100", "STRASBOURG");
$tf1 = new Entreprise("TF1", "1970-01-01", "13 Rue de la Saine ", "7500", "PARIS");
$poleEmplois  = new Entreprise("Pole Emplois ", "2000-01-01", "1 Avenue  de la Gare ", "67000", "STRASBOURG");
$stephane = new Employe("SNAIL","STEPHANE","stephane@elan-formation.fr" );
$michael = new Employe("MURMANN","MICHAEL","michael@elan-formation.fr" );

$c1 = new Contrat($elanFormation,$stephane,"2020-01-01","CDI");
$c2 = new Contrat($elanFormation,$michael,"2010-01-01","CDD");
$c3 = new Contrat($tf1,$stephane,"2022-01-01","Interim");
$c3 = new Contrat($poleEmplois,$stephane,"2023-01-01","CDI");


//echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getDateCreation()->format("d-n-Y")." et se situe à l'adresse suivante ".$elanFormation->getAdresse()." ".$elanFormation->getCp()." ".$elanFormation->getVille();
//var_dump($elanFormation);
//echo $elanFormation;
//echo $elanFormation->getInfos();
//echo $stephane->getInfos();
//echo $stephane->setEntreprise($tf1);
//echo $stephane->getInfos();

//var_dump($elanFormation);
echo $elanFormation->afficherEmployes();
echo $tf1->afficherEmployes();
echo $poleEmplois->afficherEmployes();

echo $stephane->afficherEntreprise();
echo $michael->afficherEntreprise();

