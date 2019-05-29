<?php
require('cars.php');
$abarth = new Voiture("BE24572", "08/07/2017", 96000, "124 Spider 1.4L", "Abarth", "Blanche", 1060, "img/abarth-124-spider_3560_1.jpg", "free");
$abarth->rouler();
$peugeot = new Voiture("FR27521", "02/01/1999", 5000, "206 CC+", "Peugeot", "Grise", 1430, "img/peugeot-206-cc_1974_1.jpg", "free");
$bmw = new Voiture("DE18004", "24/04/2019", 350, "X5 M50d", "BMW", "Gris", 2165, "img/bmw-x5_3156_1.jpg", "free");
$audi = new Voiture("DE845213", "14/12/2016", 125000, "A3 Cabriolet 1.4", "Audi", "Rouge", 1370, "img/audi-a3-cabriolet_3715_1.jpg", "free");
$audi->rouler();
$dodge = new Voiture("BE345871", "13/02/2007", 237000, "Viper SRT10", "Dodge", "Rouge", 1565, "img/dodge-viper_606_1.jpg", "free");
$mitsubishi = new Voiture("FR347985", "04/07/2006", 235000, "Lancer Evolution VIII", "Mitsubishi", "Rouge", 1445, "img/mitsubishi-lancer-evolution_3909_1.jpg", "free");
$mini = new Voiture("BE245630", "30/01/2019", 54000, "Countryman", "Mini", "Bleu", 1340, "img/mini-countryman_3626_1.jpg", "free");
$nissan = new Voiture("BE147390", "03/04/2019", 800, "GT-R Prestige", "Nissan", "Gris métalisé", 1752, "img/nissan-gt-r_3925_10.jpg", "free");
$mclaren = new Voiture("DE654872", "21/02/2019", 1985, "650s Spider", "McLaren", "Orange", 1370, "img/mclaren-650-spider_3681_1.jpg", "free");
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>POO Parking</title>
</head>

<body>
    <?php echo $abarth->Display(); ?>
    <?php echo $peugeot->Display(); ?>
    <?php echo $bmw->Display(); ?>
    <?php echo $audi->Display(); ?>
    <?php echo $dodge->Display(); ?>
    <?php echo $mitsubishi->Display(); ?>
    <?php echo $mini->Display(); ?>
    <?php echo $nissan->Display(); ?>
    <?php echo $mclaren->Display(); ?>
</body>

</html>
