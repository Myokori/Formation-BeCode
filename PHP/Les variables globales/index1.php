<?php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $userIp = $_SERVER['REMOTE_ADDR'];
    $serverName = $_SERVER['SERVER_NAME'];

    echo '<p class="useragent"> Votre navigateur est : '.$userAgent. '</p>';
    echo '<p class="userip"> Votre adress IP est : '.$userIp. '</p>';
    echo '<p class="serverName"> Le serveur sur lequel vous vous trouvez s\'appelle : '.$serverName. '</p>';
    ?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style1.css">
</head>
<body>
    
</body>
</html>