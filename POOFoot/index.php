<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>
<body>


<h1>POO Football</h1>

<?php



spl_autoload_register(function ($class_name){
    require "classes/". $class_name.".php";
});



$france = new Pays("France");
$espagne = new Pays("Espagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");
$portugal = new Pays("Portugale");
$argentine = new Pays("Argentine");
$bresil = new Pays("Bresil");

$psg = new Equipe("PSG","1970",$france);
$rcs = new Equipe("Racing Club Stras","1906",$france);
$fcb = new Equipe("FC Barcelone","1899",$espagne);
$juventus = new Equipe("Juventus","1897",$italie);
$mu = new Equipe("Manchester United","1878",$angleterre);
$rm = new Equipe("Real Madrid","1902",$espagne);



$mbappe = new Joueur("Mbappe","Killian","1998",$france);
$ronaldo = new Joueur("Ronaldo","Crisiano","1985",$portugal);
$lionel=  new Joueur("Messi","Lionel","1988",$argentine);
$junior =new Joueur("Junior","Naymar","1990",$bresil);


$contrat1 = new Contrat ($psg,$mbappe,"01/01/2017");
$contrat2 = new Contrat ($rm,$ronaldo,"01/01/2009");
$contrat3 = new Contrat ($juventus,$ronaldo,"01/01/2018");
$contrat4 = new Contrat ($mu,$ronaldo,"01/01/2021");
$contrat5 = new Contrat ($fcb,$lionel,"01/01/2004");
$contrat6 = new Contrat ($psg,$lionel,"01/01/2021");
$contrat7 = new Contrat ($fcb,$junior,"01/01/2013");
$contrat8 = new Contrat ($psg,$junior,"01/01/2017");

//var_dump($contrat);
echo "<main>";
echo"<article id='pays'>
        <div class='pays'>".$france->afficherEquipes()."</div>
        <div class='pays'>".$espagne->afficherEquipes()."</div>
        <div class='pays'>".$angleterre->afficherEquipes()."</div>
        <div class='pays'>".$italie->afficherEquipes()."</div>
    </article>";

    echo"<article id='clubs'>
        <div class='club'>".$psg->afficherJoueurs()."</div>
        <div class='club'>".$rcs->afficherJoueurs()."</div>
        <div class='club'>".$fcb->afficherJoueurs()."</div>
        <div class='club'>".$juventus->afficherJoueurs()."</div>
        <div class='club'>".$mu->afficherJoueurs()."</div>
        <div class='club'>".$rm->afficherJoueurs()."</div>
        
    </article>";

    echo"<article id='joueurs'>
    <div class='joueur'>".$mbappe->afficherEquipes()."</div>
    <div class='joueur'>".$ronaldo->afficherEquipes()."</div>
    <div class='joueur'>".$lionel->afficherEquipes()."</div>
    <div class='joueur'>".$junior->afficherEquipes()."</div>
    
    
</article>";


echo "<main>";


 

?>
    
</body>
</html>

