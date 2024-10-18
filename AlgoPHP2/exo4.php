<h1>Exercice4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];</p>

<h2>Resultat</h2>

<?php

$capitals =[
    "France"=>"Paris",
    "Allmagne" => "Berlin",
    "USA"=> "Washingtom",
    "Italie"=>"Rome",
    "Espagne" => "Madrid" 
];

function genererTab ($capitals){
    
    $tab = "<table border =1>
             <thead>
                <td>Pays</td>
                <td>Capital</td>
            </thead>
            <tbody>";
                foreach($capitals as $pays=>$capitale){
                    $tab.=
                      "<tr>
                     <td>$pays</td>
                    <td>$capitale</td>
                    <td><a href = https://fr.wikipedia.org/wiki/$capitale target= '_blanc'> Wkipedia<a></td>
                    </tr>";
                }
                
           $tab.=" </tbody>    
        </table>";
        return $tab;
}
echo genererTab($capitals);