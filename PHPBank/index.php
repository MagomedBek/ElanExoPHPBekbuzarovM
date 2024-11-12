<h1>POO BANQUE</h1>

<?php



spl_autoload_register(function ($class_name){
    require "classes/". $class_name.".php";
});

$client = new Client("BEKBUZAROV","Magomed","1993-02-18","Strasbourg");
 $compte =new Compte ("Compte individuele",1300,"€",$client);
 $comteA = new Compte ("Compte Livret A",350,"€",$client);





echo $client->getInfos()." ".$client->afficherCompte();
echo $compte->getInfos();

echo $compte->crediter(500);
echo $compte->debiter(1500);
echo $compte->getInfos();

 $comteA->virement($compte,350);
echo $compte->getInfos();