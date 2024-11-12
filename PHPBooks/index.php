<h1>POO Livre</h1>

<?php

spl_autoload_register(function ($class_name){
    require "classes/". $class_name.".php";
});

$auteur = new Auteur("King","Stephen","1947-09-21");
//$livre  = new Livre("Ca","1986-02-03",1138,20,$auteur);
$livres =  [
   new Livre ("Ca","1986",1138,20,$auteur),
   new Livre("Simitierre","1983",374,15,$auteur),
   new Livre("Le Fleaau","1978",823,14,$auteur),
   new Livre("Shining","1977",477,16,$auteur)

];



echo $auteur->afficherLivre();