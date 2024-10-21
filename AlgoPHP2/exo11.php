<h1>Exercice11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
</p>

<h2>Resultat</h2>
<?php
setlocale(LC_TIME, "fr_FR");
$date =  new DateTime("2018-02-23");

 function formaterDateFr($date){
 //$dateT = $date->format(' l j F  Y,');
 $fmt = datefmt_create(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);

$dateT=  datefmt_format($fmt, $date);
 
 return $dateT;
 }

 echo  formaterDateFr($date); 
 //FINI