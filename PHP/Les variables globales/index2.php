<?php
    session_start();
    $_SESSION['nom'] = "Cange";
    $_SESSION['prenom'] = "Jérémy";
    $_SESSION['age'] = "26";
    echo '<a href=index2-2.php> Cliquez ici </a> pour transférer les variables de votre session sur la seconde page et les afficher';