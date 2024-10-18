<h1>Exercice10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit)</p>

<h2>Resultat</h2>
<?php
$nomsInput = ["Nom","Prénom","Ville","Mail"];
  $sexe= ["Homme","Femme"];
  $liste= ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

function listNoms($nomsInput){
    $result = "";
    foreach($nomsInput as $data){
        $result.= "<label for='$data'>$data:</label>
        <input type='text' id='$data' name='$data'><br>";         
    }
    return $result;
   
}

function listSexe($sexe){
    $result = "";
    foreach($sexe as $option){
        $result.="<div><input type='radio' id='$option' name='element' value='$option' />
            <label for='$option'>$option</label></div>  ";
            
   }
   return $result;
}

function listProf($liste){
    $result = "<select name= 'choix'>";
    foreach($liste as $element){
      $result.="<option value='$element'>$element</option>";
}
    $result.="</select><br>";
    return $result;
}

 
  function envoyerFormulaire($nomsInput,$sexe,$liste){
        $result =  "<fieldset> <legend>Veuillez remlir la formulaire</legend> <form action='/test.php'>";
        echo listNoms($nomsInput);
        echo listSexe($sexe);
        echo listProf($liste);
        $result.= " <input type='submit' value='ok'>";
        $result.="</form></fieldset>";
        return $result;
  }



  echo envoyerFormulaire($nomsInput,$sexe,$liste);


