<h1>Exercice1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<h2>Resultat</h2>
<?php
    $text = "Mon texte en rouge";

    function convertirMajRouge($text){
     mb_strtoupper($text);
    }
    echo convertirMajRouge($text);