<?php
    if(isset($_POST['ok'])){
       setcookie('username', $_POST['login'], false);
       setcookie ('password', $_POST['password'], false);
    }
?>







<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style3.css">
</head>
<body>
    <form name="login" method="POST" action="index3.php">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">
        <input type="submit" name="ok" value="Envoyer"/>
    </form>
</body>
</html>