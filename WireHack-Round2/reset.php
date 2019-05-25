<?php require('assets/php/dbconnect.php');
$req = $db->query("SELECT * FROM user");
$display = $req->fetchAll();
    if(isset($_POST['reset'])){
        $password = $_POST['password'];
        $req = $db->exec("UPDATE user SET password='".$password."'");
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    <title>Drag&Pay</title>
</head>

<body>

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-4 offset-md-4 gradient">
    
        <div class="box">
                    <div class="one"><img src="assets/img/logo.png"></div>
                    <div class="two"><a href="reset.php"><i class="fas fa-user fa-2x"></a></i></div>
                </div>

                <div class="row profil">
                    <div class="col"><img class="profilImage" src="assets/img/profil.jpg">
                    </div>
                </div>

                <div class="row colorBoxName">
                    <div class="col">
                        <h1>John Doe</h1>
                        <p>BE93 49 39 49</p>
                    </div>
                </div>

        <div class="row colorBox">
            <div class="col">
                <h2>My datas</h2>

                <form method="POST">
                <div class="form-group" action="drag.php">

                <div class="form-group inputIcon">
                    <span class="fa fa-key form-control-feedback"></span>
                    <input name="password" type="text" class="form-control" placeholder=" password">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="button" name="reset" >RESET PASSWORD</button> 
                </div>
            </form>

            </div>
        </div>


</div>
    </div>
</div>

</body>

</html>