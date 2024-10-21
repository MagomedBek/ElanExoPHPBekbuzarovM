<h1>Exercice13</h1>
<p>Comme nous l’avons vu à l’exercice précédent, les var_dump() vont nous servir à débugger. Mais 
l’affichage peut-être un peu chaotique. Afin de l’améliorer nous allons utiliser un outil bien 
pratique : Xdebug
</p>

<h2>Resultat</h2>
<?php
 $array = ["Text 1","Text 2","Text 3",1000,100.5,true,["Text 4","Text 5"]];
 var_dump($array);
 //FINI