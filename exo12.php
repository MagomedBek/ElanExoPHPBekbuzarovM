<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG
</p>

<h2>Resultat</h2>
<?php
  $personnes = [
    "Michael" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
  ];
  
  saluer($personnes);
function saluer($tab){
    ksort($tab);
    foreach($tab as $personne => $langue){
        switch($langue){
            case "ENG":
                echo "Hello $personne <br>";
                break;
            case "ESP":
                echo "Hola $personne <br>";
                break;
            case "FRA":
                 echo "Salut $personne <br>";
                 break;
        }

    }
}

//FINI