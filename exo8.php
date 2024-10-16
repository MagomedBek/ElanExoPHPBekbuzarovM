<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :
</p>

<h2>Resultat</h2>

<?php
   $nb=8;
   $multiplicateur = 1;
   
   echo "Table de $nb<br>";
   for ($i=1;$i<11;$i++){
        echo "$nb x $i =".($nb * $i)."<br>";
   }
   
   while($multiplicateur<11)
   {
        echo "$nb x $multiplicateur =".($nb * $multiplicateur)."<br>";
        $multiplicateur++;
   }

//FINI

