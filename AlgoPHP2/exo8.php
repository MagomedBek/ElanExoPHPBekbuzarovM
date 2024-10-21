<h1>Exercice8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Resultat</h2>

<?php

$img = 'http://my.mobirise.com/data/userpic/764.jpg';
 function imgrepeter($img){
   $block= "<div>";
   for ($i=0;$i<4;$i++){
      $block.= "<img  src=$img />";
   }
   $block.="</div>";
   return $block;
 }
 echo imgrepeter($img);
 
//FINI

