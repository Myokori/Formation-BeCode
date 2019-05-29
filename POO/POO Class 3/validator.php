<?php
    class Validator{
        public function String(){
            $pattern = "/[a-zA-Z]/";
            $string = $_POST['texte'];
            if(preg_match($pattern, $string)){
                echo "<p>L'input text est OK</p>";
            }else{
                echo "<p>L'input text n'est pas bon</p>";
            }
        }
        public function Entier(){
            $pattern = "/[0-9]+/";
            $entier = $_POST['entier'];
            if(preg_match($pattern, $entier)){
                echo "<p>L'input nombre entier est OK</p>";
            }else{
                echo "<p>L'input nombre entier n'est pas bon</p>";
            }
        }
        public function Decimal(){
            $pattern = "/([0-9]+\.[0-9]+)/";
            $decimal = $_POST['virgule'];
            if(preg_match($pattern, $decimal)){
                echo "<p>L'input nombre decimal est OK</p>";
            }else{
                echo "<p>L'input nombre decimal n'est pas bon</p>";
            }
        }
    }