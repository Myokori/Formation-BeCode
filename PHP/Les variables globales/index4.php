<?php
if(isset($_POST['get'])){
    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        echo "Votre login est : ".$_COOKIE['username']." ";
        echo "Votre password est : ".$_COOKIE['password'];
    }
}
?>







<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercice 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style4.css">
</head>
<body>
<form name="login" method="POST" action="index4.php">
        <input type="submit" name="get" value="Récupérer les infos"/>
    </form>
</body>
</html>