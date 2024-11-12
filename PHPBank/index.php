<h1>POO BANQUE</h1>

<?php

//require "Entrepise.php";
//require "Employe.php";

spl_autoload_register(function ($class_name){
    require "classes/". $class_name.".php";
});

$client = new Client("BEKBUZAROV","Magomed","1993-02-18","Strasbourg");
 $compte =new Compte ("Compte individuele",1300,"€",$client);
 $comteA = new Compte ("Compte Livret A",150,"€",$client);





echo $client->getInfos()." ".$client->afficherCompte();
echo $compte->getInfos();