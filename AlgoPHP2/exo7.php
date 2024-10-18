<h1>Exercice7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<h2>Resultat</h2>

<?php
$elements = ["Monsieur" => "checked",
             "Madame"  => "",
             "Mademoiselle"  => ""
];

function genererCheckbox($elements){
    $checkBox = "<fieldset> <legend>Veuillez cosher la case</legend>";
   
    foreach($elements as $element => $status){
      $checkBox.="<div> 
                    <input type='checkbox' id='$element' name='element' value='$element' $status />
                    <label for='$element'>$element</label>
                </div>";
}
    $checkBox.="</fieldset>";
    return $checkBox;
}
echo genererCheckbox($elements);
//FINI