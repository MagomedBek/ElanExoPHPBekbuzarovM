<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./style/style.css">
    
    <title>Ajout produit</title>
</head>
<body>
   <main>
   <nav class="menu">
         <ul>
            <li class="element"><a href="recap.php">Panier</a></li>
        </ul>
</nav>
    <h1>Ajouter un produit</h1>
    <form action = "traitement.php?action=add" method = "post" id = "form"  onsubmit="myFunction()" >
        <p>
            <label>
                Nom de produit :
                <input type = "text" name = "name">
            </label>
        </p>
        <p>
            <label>
                Prix de produit :
                <input type = "number" step ="any" name = "price">
            </label>
        </p>
        <p>
            <label>
                Quantité désirée :
                <input type = "number" name = "qtt" value = "1">
            </label>
        </p>
        <p>
                <input type = "submit" name = "submit" value = "Ajouter le produit" id="submit">
        </p>
    </form>
</main> 
<script>
    function myFunction(){
      let status =  "<?php echo  $_GET['status'] ?>"; 
      alert("status = "+ status );
   if( status == 'success'){
        alert("Le produit est ajouté");
    }else{
         alert("Le produit est refusé ");
    } 
    }
   
</script>
</body>
</html>