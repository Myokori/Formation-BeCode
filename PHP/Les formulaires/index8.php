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

    $_FILES['test']['name'];
    $_FILES['test']['type'];
    $_FILES['test']['tmp_name'];
    $_FILES['test']['size'];
    
    if ($_FILES['test']['error']){
        switch ($_FILES['test']['error']){
            case 1:
            echo "Le fichier dépasse la limite autorisée par le serveur";
            break;
            case 2:
            echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
            break;
            case 3:
            echo "L'envoi du fichier a été interrompu pendant le transfert !";
            break;
            case 4:
            echo "Le fichier que vous avez envoyé a une taille nulle !";
            break;
        }
    }else{

    }

    

    if (is_uploaded_file($_FILES['test']['tmp_name'])) {
        $name = $_FILES['test']['tmp_name'];
        $nomdestination = 'var/www/uploads';
        $PDF = file_get_contents($_FILES['test']['tmp_name']);
        $PDF = substr($PDF,0,4);
        if($PDF == '%PDF'){
            $valid = true;
            echo "Le fichier est un PDF ";
        }else{
            $valid = false;
            echo "Le fichier n'est pas un PDF ";
        }
            
        move_uploaded_file($name, $nomdestination);
        echo "Nom du fichier : ". $_FILES['test']['name'];}

        ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercice 8</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <form name="test" id="form" method="GET" action="index8.php">
        <select name="civilité" size="1">
        <option>Monsieur
        <option>Madame
        <input type="text" name="nom"/>
        <input type="text" name="prenom"/>
        <input type="submit" name="valider" value="Valider"/>
    </form>

    <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
<form enctype="multipart/form-data" action="index8.php" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <input name="test" type="file" />
  <input type="submit" value="Envoyer le fichier" />
</form>
        
    </body>
    </html>
