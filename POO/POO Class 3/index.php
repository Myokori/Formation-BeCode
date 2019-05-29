<?php
require("validator.php");

$validator = new Validator();
if(isset($_POST['envoyer'])){
    if(!empty($_POST['texte'])){
        echo $validator->String();
    }else{
        echo "Veuillez entrer du texte dans le premier champ";
    }
    if(!empty($_POST['entier'])){
        echo $validator->Entier();
    }else{
        echo "<p>Veuillez entrer un nombre entier dans le second champ</p>";
    }
    if(!empty($_POST['virgule'])){
        echo $validator->Decimal();
    }else{
        echo "<p>Veuillez entrer un nombre décimal dans le troisième champ</p>";
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <p><input type="text" name="texte"></p>
        <p><input type="number" name="entier"></p>
        <p><input type="number" name="virgule" step="any"></p>
        <button type="submit" name="envoyer">Envoyer</button>
    </form>
</body>

</html>