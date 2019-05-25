<?php
    function higher_lower($higher, $lower){
        if($higher > $lower){
            echo "Le premier nombre est plus grand";
        }

        else if($higher < $lower){
            echo "Le premier nombre est plus petit";
        }

        else if ($higher == $lower){
            echo "Les deux nombres sont identiques";
        }
    }

    higher_lower(12, 12);