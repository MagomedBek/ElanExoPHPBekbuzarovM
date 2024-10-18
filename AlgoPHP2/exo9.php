<h1>Exercice9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);
</p>

<h2>Resultat</h2>
<?php
$nomsRadio = ["Monsieur","Madame","Mademoiselle"];

function afficherRadio($nomsRadio){
   $form = "<form name= 'choix'>";
    foreach($nomsRadio as $option){
      $form.="<input type='radio' id='$option' name='element' value='$option' />
             <label for='$option'>$option</label> <br>";
    }
    $form.="</form>";
    return $form;
}
echo afficherRadio($nomsRadio);
//FINI