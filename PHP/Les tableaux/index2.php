<?php
        $mois = ['Janvier', 'Février,', 'Mars', 'Avri', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        echo $mois[2];
        echo $mois[4];
        array_splice($mois, 7, 7, "Août");
