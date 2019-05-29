<?php
    function age_genre($age, $genre){
        $homme = "Homme";
        $femme = "Femme";

        if ($age >= 18 && $genre === $homme){
            echo "Vous êtes un homme et vous êtes majeur";
        }

        else if($age < 18 && $genre === $homme){
            echo "Vous êtes un homme et vous êtes mineur";
        }

        if ($age >= 18 && $genre === $femme){
            echo "Vous êtes une femme et vous êtes majeur";
        }

        else if($age < 18 && $genre === $femme){
            echo "Vous êtes une femme et vous êtes mineur";
        }

    }

    age_genre(17, "Femme");
