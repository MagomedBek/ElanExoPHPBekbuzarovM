<h1>Exercice2</h1>
<p>Soit le tableau suivant :
$capitales = 
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Resultat</h2>


<?php

$capitals =[
    "France"=> "Paris",
    "Allmagne" => "Berlin",
    "USA"=> "Washingtom",
    "Italie"=>"rome" 
];

function genererTab ($capitals){
    
    $tab = "<table border =1>
             <thead>
             <tr>
                <th>Pays</td>
                <th>Capital</td>
            </tr>
            </thead>
            <tbody>";
                foreach($capitals as $pays=>$capitale){
                    $tab.=
                      "<tr>
                     <td>".ucfirst($pays)."</td>
                    <td>".ucfirst($capitale)."</td>
                    </tr>";
                }
                
           $tab.=" </tbody>    
        </table>";
        return $tab;
}
echo genererTab($capitals);
//FINI