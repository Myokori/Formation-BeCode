<?php
    $age = 17;
    $genre = array('Homme', 'Femme');
    

    if($age >= 18 && $genre = $genre[0]){
        echo " Vous êtes un homme et vous êtes majeur";
    }

    else{
        echo " Vous êtes un homme et vous êtes mineur";
    }

    if($age >= 18 && $genre = $genre[1]){
        echo " Vous êtes une femme et vous êtes majeur";
    }

    else{
        echo " Vous êtes une femme et vous êtes mineur";
    }