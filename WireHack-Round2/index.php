<?php require('assets/php/dbconnect.php');
if (isset($_POST['login'])) {
    $req = $db->prepare("SELECT * FROM user WHERE Client=:post_client");
    $req->execute(array(
        ":post_client" => $_POST['client']
    ));
    $display = $req->fetchAll();
    var_dump($_POST['client']);
    var_dump($_POST['password']);
    foreach ($display as $component) {
        var_dump($component['Client']);
        var_dump($component['password']);
        //Vérification si la valeur entrée dans le premier Input est strictement égale à la valeur présente dans la DB
        if ((int)$_POST['client'] == (int)$component['Client']) {
            $_POST['client'] = true;
        }
        //Sinon retourne une erreur
        else {
            echo "<p>Your Client Number is incorrect</p>";
            $_POST['client'] = false;
        }
        var_dump($_POST['client']);
        var_dump($component);
        //Vérification si la valeur entrée dans le second Input est strictement égale à la valeur présente dans la DB
        if ($_POST['password'] === $component['password']) {
            var_dump($component['password']);
            $_POST['password'] = true;
        }
        //Sinon retourne une erreur
        else {
            echo "<p>Your password is incorrect</p>";
            $_POST['password'] = false;
        }
        //Vérification des deux inputs si ils retournent true update de la variable $logged envoyer l'user sur profile.php
        if ($_POST['client'] && $_POST['password'] === true) {
            header("Location:drag.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    <title>Drag&Pay</title>
</head>

<body>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 offset-md-4 gradient">

                <div class="row wrapper">
                    <div class="col">
                        <img src="assets/img/logo.png" />
                    </div>
                </div>


                <div class="row colorBox">
                    <div class="col">
                        <h2>CONNEXION</h2>

                        <form method="POST" action="index.php">
                            <!-- <div class="form-group" action="drag.php"></div> -->

                            <div class="form-group inputIcon">
                                <span class="fa fa-user form-control-feedback"></span>
                                <input name="client" type="text" class="form-control" placeholder="Your client number">
                                </div>

                                <div class="form-group inputIcon">
                                    <span class="fa fa-key form-control-feedback"></span>
                                    <input name="password" type="text" class="form-control" placeholder="Your password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="button" name="login">GO TO MY ACCOUNT</button>
                                </div>
                            </form>

                            <h2>DON'T HAVE A ACCOUNT?</h2>
                            <form method="POST" action="register.php">

                                <div class="form-group">
                                    <button type="submit" class="button">CREATE A ACCOUNT</button>
                                </div>

                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </body>

    </html>