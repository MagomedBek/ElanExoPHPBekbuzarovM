<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>

<h2>Resultat</h2>

<?php
  $voitures = ["Peugeot","Renault","BMW","Mercedes"];

  echo "Il y a ".count($voitures)." marques  de voitures dans le taleau :<br>";
  echo "<ul>";
  foreach($voitures as $marque){
    echo "<li>$marque</li>";
  }
  echo "</ul>";
  //FINI