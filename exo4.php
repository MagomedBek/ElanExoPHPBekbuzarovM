<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Resultat</h2>
<?php
$phrase= "Engage le jeu que je le gagne";
$remplacement = strtolower(str_replace(" ","",$phrase));
$polyndrome= strrev($remplacement);
If($remplacement == $polyndrome  ){
    echo "La phrase « $phrase » est palindrome";
}else{
     echo "La phrase « $phrase » n'est pas palindrome";
}

//FINI