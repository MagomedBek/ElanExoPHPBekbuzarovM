<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €
</p>

<h2>Resultat</h2>

<?php
  $mPayer = 152;
  $mVerser = 200;
  $reste = $mVerser - $mPayer;
  $monnaye =10;
  echo "Montant à payer : $mPayer<br>";
  echo "Montant versé : $mVerser<br>";
  echo "Reste à payer : $reste<br>";
  echo "***********************************************<br>";
  echo "Rendue de monnaie :<br>";

  if($reste>0){
    while($reste<>0){
        if($monnaye<5){
            echo intdiv($reste,$monnaye)." pièces de $monnaye €   " ;
        }else{
            echo intdiv($reste,$monnaye)." billets de $monnaye €   " ;
        }
        
        $reste -= (intdiv($reste,$monnaye)*$monnaye);
        $monnaye = intdiv($monnaye,2);
      }

  }else{
    echo "Rien à rendre";
  }

  //FINI
  

