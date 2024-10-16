<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<h2>Resultat</h2>

<?php
   $phrase = "Notre formation DL commence aujourd’hui";

   If(str_contains($phrase,"aujourd’hui")){
    $newphrase = str_replace("aujourd’hui", "demain", $phrase);
   }

   echo "$newphrase <br> $phrase";

   //FINI