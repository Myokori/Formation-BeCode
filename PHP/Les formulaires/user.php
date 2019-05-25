<?php
    // Méthode GET
    if(isset($_GET['valider'])){
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        echo $nom." ".$prenom;
    }

    // Méthode Post
    if(isset($_POST['valider'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        echo $nom." ".$prenom;
    }
    ?>