<h1>Exercice12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : 
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Resultat</h2>
<?php
  $tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
  $dump = var_dump($tableauValeurs);
  $export = var_export($tableauValeurs);
  $string = "";
echo "<br>";
  foreach($tableauValeurs as $variable){
        if( gettype($variable)=== "array"){
            echo gettype($variable)." ".count($variable)." {";
            foreach($variable as $var){
                echo "[".key($variable)."] =>".gettype($var)." $var";
            }
        }else{
           echo  gettype($variable)." (". strlen($variable).") ($variable) <br>";
        }


  }

  foreach($tableauValeurs as $cle => $value){
    $tab[$cle] = is_array($value) ? implode(",", $value) : $value;
  }
  print_r($tab);
  //FINI
  