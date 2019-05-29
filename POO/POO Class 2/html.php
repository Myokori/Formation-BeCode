<?php
class Htm
{
    public function CSS()
    {
        echo '<link rel="stylesheet" href="style.css">';
    }
    public function Meta()
    {
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
    }
    public function Img()
    {
        echo "<p><img src='img/01.png'alt='random image'/></p>";
    }
    public function Link()
    {
        echo '<a href="https://google.fr" alt="google">Google</a>';
    }
    public function JS()
    {
        echo '<script src="main.js"></script>';
    }
}
