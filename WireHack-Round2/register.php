<?php require('assets/php/dbconnect.php');
$req = $db->query("SELECT * FROM user");
$display = $req->fetchAll();
$options = array(
    'lastname' => FILTER_SANITIZE_STRING,
    'firstname' => FILTER_SANITIZE_STRING,
    'client' => FILTER_SANITIZE_NUMBER_INT, FILTER_VALIDATE_INT,
    'card' => FILTER_SANITIZE_NUMBER_INT, FILTER_VALIDATE_INT,
    'password' => FILTER_SANITIZE_STRING
);
/* $result = filter_input_array(INPUT_POST, $options); */

if (isset($_POST['envoi'])) {
    //déclaration des variables
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $client = $_POST['client'];
    $card = $_POST['card'];
    $password = $_POST['password'];
    //insertion dans la bdd
    $req = $db->exec("INSERT INTO `user`(`lastname`, `firstname`, `account`, `client`, `password`) VALUES ('".$lastname."','".$firstname."','".(int)$card."','".(int)$client."','".$password."')");
    header("Location:index.php");
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
                        <h2>INSCRIPTION</h2>

                        <form method="POST">

                            <div class="form-group inputIcon">
                                <span class="fa fa-user form-control-feedback"></span>
                                <input name="lastname" type="text" class="form-control" placeholder="Lastname">
                            </div>

                            <div class="form-group inputIcon">
                                <span class="fa fa-user form-control-feedback"></span>
                                <input name="firstname" type="text" class="form-control" placeholder="Firstname">
                            </div>

                            <div class="form-group inputIcon">
                                <span class="fa fa-user form-control-feedback"></span>
                                <input name="card" type="int" class="form-control" placeholder="Your card number">
                            </div>

                            <div class="form-group inputIcon">
                                <span class="fa fa-user form-control-feedback"></span>
                                <input name="client" type="int" class="form-control" placeholder="Your client number">
                            </div>

                            <div class="form-group inputIcon">
                                <span class="fa fa-key form-control-feedback"></span>
                                <input name="password" type="password" class="form-control" placeholder="Your password">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="envoi" class="button">CREATE A ACCOUNT</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>