<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./style/style.css">
    <title>Récapitulative des produits</title>
</head>
<body>
<nav class="menu">
         <ul>
            <li class="element"><a href="index.php">Accueil</a></li>
        </ul>
    <?php 
    
    if(!isset($_SESSION['products']) ||  empty($_SESSION['products'])){
         echo "<p>Aucun produit en session... </p>";
    }
    else{
        echo " <table>",
                "<thead>",
                    "<tr>",
                        "<th>#</th>",
                        "<th>Nom</th>",
                        "<th>Prix</th>",
                        "<th>Quantité</th>",
                        "<th>Total</th>",
                        "<th>Supprimer</th>",

                    "</tr>",
                "</thead>",
                "<tbody>";
        $totalGeneral = 0;
        $qttTotal =0;
        foreach($_SESSION['products'] as $index => $product){
                echo "<tr>",
                       "<td>".$index."</td>",
                       "<td>".$product['name']."</td>",
                       "<td>".number_format($product['price'],2,",", "&nbsp;")."&nbsp;€</td>",
                       "<td>".$product['qtt']."</td>",
                       "<td>".number_format($product['total'],2,",", "&nbsp;")."&nbsp;€</td>",
                       "<td><button type='button' onclick='supression()' id='button'>Supprimer</button></td>",
                     "</tr>";
                     $totalGeneral += $product['total'];
                     $qttTotal += $product['qtt'];

        }
        echo "<tr>",
                "<td colspan =4>Total géneral : </td>",
                "<td><strong>".number_format($totalGeneral,2,",", "&nbsp;")."&nbsp;€</strong></td>",
                "<td colspan =4>Total quantité : </td>",
                "<td><strong>".$qttTotal."</strong></td>",
            "</tbody>",
            "</table>";
        
    }
    ?>
    <script>
function supression() {
 <?php 

    
    
    
    ?>
}
</script>
</body>
</html>