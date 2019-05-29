<?php
    $tshirt = 785;
    $ristourne = 30;

    echo "Le t-shirt coute ".$tshirt." €, ", " le magasin me fait une ristourne de ".$ristourne ." %. ";
    
    $reduction = $tshirt * $ristourne /100;
    $prixfinal = $tshirt - $reduction;

    echo "La réduction sera de ".$reduction." €, ", " je paierais donc : ".$prixfinal." €. ";