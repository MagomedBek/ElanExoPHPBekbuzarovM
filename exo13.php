<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Resultat</h2>
<?php

$notes = [10,12,8,19,3,16,11,13,9];
$moyenne=  round(array_sum($notes)/count($notes),2) ;


function calculerMoyenne($tab)  {
    $nbNotes = count($tab);
    $sommeNotes = array_sum($tab);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}
//echo calculerMoyenne($notes);
echo   "Les notes obtenues par l'élève sont : ".implode(" ",$notes)." <br> ";
echo "Sa moyenne générale est donc de  : $moyenne";

//FINI