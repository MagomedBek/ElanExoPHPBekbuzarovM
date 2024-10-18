<h1>Exercice6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);
</p>

<h2>Resultat</h2>
<?php
$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($elements){
   $select = "<select name= 'choix'>";
    foreach($elements as $element){
      $select.="<option value='$element'>$element</option>";
}
    $select.="</select>";
    return $select;
}
echo alimenterListeDeroulante($elements);
//FINI
