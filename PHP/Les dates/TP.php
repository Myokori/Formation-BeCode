<?php
    setlocale (LC_TIME, 'fr_FR.utf8', 'fra');
    $month = $_POST['mois'];
    $year = $_POST['années'];
    if(isset($_POST['send'])){
        $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        echo "{$number}";
    }
    
?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendrier PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
    <form name="cal" method="POST" action="TP.php">
    <select name="mois" size="1">
        <option value="1">Janvier</option>
        <option value="2">Février</option>
        <option value="3">Mars</option>
        <option value="4">Avril</option>
        <option value="5">Mai</option>
        <option value="6">Juin</option>
        <option value="7">Juillet</option>
        <option value="8">Août</option>
        <option value="9">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">Décembre</option>
    </select>

    <select name ="années" size="1">
        <option>2009</option>
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
    </form>
    <input type="submit" name="send" value="Envoyer" />
</body>
</html>