<?php
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $civil = $_GET['civilité'];
    if(empty($nom) || empty($prenom)){
        '<form name="test" id="form" method="GET" action="index6.php" style="display:block;">
        <select name="civilité" size="1">
        <option>Monsieur
        <option>Madame
        <input type="text" name="nom"/>
        <input type="text" name="prenom"/>
        <input type="submit" name="valider" value="Valider"/>
    </form>';
}else{
        echo $civil." ".$nom." ".$prenom;
        echo '<form name="test" id="form" method="GET" action="index6.php" style="display:none;">';
    }

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercice 6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <form name="test" id="form" method="GET" action="index6.php">
        <select name="civilité" size="1">
        <option>Monsieur
        <option>Madame
        <input type="text" name="nom"/>
        <input type="text" name="prenom"/>
        <input type="submit" name="valider" value="Valider"/>
    </form>
        
    </body>
    </html>
