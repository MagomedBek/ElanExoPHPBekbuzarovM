<h1>Exercice1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<h2>Resultat</h2>
<style>
    .red{
        color:red;
    }
</style>
<?php
    $text = "Mon texte en rouge";
   
    function convertirMajRouge($text){
     $trouge = "<p class = 'red' >".mb_strtoupper($text)."</p>";
     return $trouge;
    }
    function convertirMajColor($text,$color){
        $trouge = "<p style = 'color:$color' >".mb_strtoupper($text)."</p>";
        return $trouge;
       }
    echo convertirMajRouge($text);
    echo convertirMajColor($text,"blue");
    //FINI