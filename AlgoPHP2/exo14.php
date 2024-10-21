<h1>Exercice14</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.</p>

<h2>Resultat</h2>

<?php

$mail1 = "elan@elan-formation.fr";
$mail2 = "contact@elan";

if (filter_var($mail2, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$mail1' est considérée comme valide.<br>";
}else {
    echo "L'adresse email '$mail1' est considérée comme invalide.<br>";
}


if (filter_var($mail2, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$mail2' est considérée comme valide.<br>";
} else {
    echo "L'adresse email '$mail2' est considérée comme invalide.<br>";
}