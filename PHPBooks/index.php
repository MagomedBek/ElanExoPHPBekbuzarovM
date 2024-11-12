<h1>POO Livre</h1>

<?php

spl_autoload_register(function ($class_name){
    require "classes/". $class_name.".php";
});

$auteur = new Auteur("King","Stephen","1947-09-21");
$livre  = new Livre("Ca","1986",1138,20,$auteur);
$auteur->addLivre($livre);

echo $auteur->afficherLivre();