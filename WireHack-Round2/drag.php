<?php require('assets/php/dbconnect.php');?>
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

                <div class="row sectionInfos">
                    <div class="col">
                        <h2>My balance : 1250€</h2>

                        <ul id="sortable">
                            <li>
                                <div class="box2">
                                    <div class="one">
                                        <p>VOO</p>
                                        <p>BE34434345</p>
                                        <p>Per month</p>
                                        <p>55€</p>
                                        <p>04/22/2019</p>
                                    </div>


                                    <div class="two">
                                        <p>DRAG</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="box2">
                                    <div class="one">
                                        <p>BELGACOM</p>
                                        <p>BE34434345</p>
                                        <p>Per month</p>
                                        <p>20€</p>
                                        <p>05/2/2019</p>
                                    </div>


                                    <div class="two">
                                        <p>DRAG</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="box2">
                                    <div class="one">
                                        <p>LOYER</p>
                                        <p>BE34434345</p>
                                        <p>Per month</p>
                                        <p>150€</p>
                                        <p>05/10/2019</p>
                                    </div>


                                    <div class="two">
                                        <p>DRAG</p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>