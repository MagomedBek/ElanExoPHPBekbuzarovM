<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>Resultat</h2>

<?php
  $prix = 9.99;
  $qte = 5;
  $tauxTVA = 0.2;
  $result = $qte * $prix * (1+ $tauxTVA);

  echo "Prix unitaire de larticle : $prix <br>";
  echo "Quantité : $qte <br>";
  echo "Taux de TVA : $tauxTVA<br>";
  echo "Le montant de la facture à régler est de : $result";

  //FINI