<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<h2>Resultat</h2>

<?php
    $age = 8;


        switch (true) {
            case $age>=12 :
                echo "L'enfant qui a $age ans appartient à la categorie 'Cadet' ";
                break;
             case $age >=10 :
                echo "L'enfant qui a $age ans appartient à la categorie 'Minime' ";
                break;
            case $age >=8:         
                echo "L'enfant qui a $age ans appartient à la categorie 'Puppille'";
                break;
            case  $age >= 6:
                echo "L'enfant qui a $age ans appartient à la categorie 'Poussan' ";
                break;
            default :
                 echo "L'enfant qui a $age ans n'appartient pas aux categories précisées ";
                 break;
        }
        


  //FINI