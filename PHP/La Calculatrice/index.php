<?php

// Méthode 01 (If...Else)

if(isset($_POST['calculer'])){
    $a = $_POST['méthode'];
    $x = $_POST['nombre1'];
    $y = $_POST['nombre2'];
    $z = $_POST['opérateur'];

if($a == "condition"){
    if($x == "" OR $y == ""){
        echo '<script language="javascript">';
        echo 'alert("Au moins l\'un champs de saisie sont vides ! Veuillez le(s) remplir")';
        echo '</script>';
    } else {
        if($z == "+"){
            $result = $x + $y;
            echo '<script language="javascript">';
            echo 'alert("Résultat : '.$result.'")';
            echo '</script>';
        }
        else if($z == "-"){
            $result = $x - $y;
            echo '<script language="javascript">';
            echo 'alert("Résultat : '.$result.'")';
            echo '</script>';
        }
        else if($z == "*"){
            $result = $x * $y;
            echo '<script language="javascript">';
            echo 'alert("Résultat : '.$result.'")';
            echo '</script>';
        }
        else if($z == "/"){
            if($y == 0){
                echo '<script language="javascript">';
                echo 'alert("On ne peut pas diviser par 0 !")';
                echo '</script>';
            }else{
                $result = $x / $y;
                echo '<script language="javascript">';
                echo 'alert("Résultat : '.$result.'")';
                echo '</script>';
            }
        }
        else if($z == "%"){
            $result = $x % $y;
            echo '<script language="javascript">';
            echo 'alert("Résultat : '.$result.'")';
            echo '</script>';
        }
    }
}
        // Méthode 02 (Switch)
        else if($a == "switch"){

        if($x == "" OR $y == ""){
            echo '<script language="javascript">';
            echo 'alert("Au moins l\'un champs de saisie sont vides ! Veuillez le(s) remplir")';
            echo '</script>';
        }else{
            if(isset($_POST['calculer'])){
                $x = $_POST['nombre1'];
                $y = $_POST['nombre2'];
                $z = $_POST['opérateur'];
    
            switch($z){
                case '+':
                $result = $x + $y;
                echo '<p> Résultat : '.$result.'</p>';
                break;
    
                case '-':
                $result = $x - $y;
                echo '<p> Résultat : '.$result.'</p>';
                break;
    
                case '*':
                $result = $x * $y;
                echo '<p> Résultat : '.$result.'</p>';
                break;
    
                case '/':
                if($y == 0){
                    echo '<script language="javascript">';
                    echo 'alert("On ne peut pas diviser par 0 !")';
                    echo '</script>';
                    break;
                }else{
                    $result = $x / $y;
                    echo '<p> Résultat : '.$result.'</p>';
                    break;
                }
    
                case'%':
                $result = fmod($x, $y);
                echo '<p> Résultat : '.$result.'</p>';
                break;
            }
            
        }
    }

}

        //Méthode 03 (function())
        else if($a == "fonction"){
            if($x == "" OR $y == ""){
                echo '<script language="javascript">';
                echo 'alert("Au moins l\'un champs de saisie sont vides ! Veuillez le(s) remplir")';
                echo '</script>';
            }else{
                if(isset($_POST['calculer'])){
                        $x = $_POST['nombre1'];
                        $y = $_POST['nombre2'];
                        $z = $_POST['opérateur'];
            
                if($z == "+"){
                    function add(){
                        $x = $_POST['nombre1'];
                        $y = $_POST['nombre2'];
                        $result = $x + $y;
                        echo '<p class="resultat"> Résultat : <input type="text" name="answer" readonly value="'.$result.'"/></p>';
                    }
                    add();
                }
                
                else if($z == "-"){
                    function sous(){
                        $x = $_POST['nombre1'];
                        $y = $_POST['nombre2'];
                                $result = $x - $y;
                        echo '<p> Résultat : <input type="text" name="answer" readonly value="'.$result.'"/></p>';
                    }
                    sous();
                }
                
                else if($z == "*"){
                    function multi(){
                        $x = $_POST['nombre1'];
                        $y = $_POST['nombre2'];
                        $result = $x * $y;
                        echo '<p> Résultat : <input type="text" name="answer" readonly value="'.$result.'"/></p>';
                    }
                    multi();
                }
                
                else if($z == "/"){
                    function div(){
                        $x = $_POST['nombre1'];
                        $y = $_POST['nombre2'];
                        if($y == 0){
                            echo '<script language="javascript">';
                            echo 'alert("On ne peut pas diviser par 0 !")';
                            echo '</script>';
                        }else{
                            $result = $x / $y;
                            echo '<p> Résultat : <input type="text" name="answer" readonly value="'.$result.'"/></p>';
                        }
                    }
                    div();
                }
                
                else if($z == "%"){
                    function modulo(){
                        $x = $_POST['nombre1'];
                        $y = $_POST['nombre2'];
                        $result = $x % $y;
                        echo '<p> Résultat : <input type="text" name="answer" readonly value="'.$result.'"/></p>';
                    }
                    modulo();
                }
            }
        }

    }


}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculatrice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <form name="champs" method="POST" action="index.php">
    Premier chiffre : <input type="number" name="nombre1">
    <p>Opérateur arithmétique : <select name="opérateur">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>
    </select>
    </p>
    <p>Deuxième chiffre : <input type="number" name="nombre2"></p>
    <p>Méthode de calcul : <select name="méthode">
    <option value="condition">Condition</option>
    <option value="switch">Switch</option>
    <option value="fonction">Fonction</option>
    </select>
    </p>
    <p>Nettoyer les champs : <button type="button" onclick="reset()">C</button></p>
    <input type="submit" name="calculer" value="Faire le calcul"/></p>
    </form>
</body>
</html>