<h1>Exercice5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);</p>

<h2>Resultat</h2>


    

<?php

$nomsInput = ["Nom","Prénom","Ville"];
function afficherInput($nomsInput){
   
        echo "<form action='exo5.php'>";
    
        foreach($nomsInput as $data){
        echo "<label for='$data'>$data:</label>
        <input type='text' id='$data' name='$data'><br><br>";
            
    }
    echo " <input type='submit' value='ok'> </form>";
    
}

echo afficherInput($nomsInput); 