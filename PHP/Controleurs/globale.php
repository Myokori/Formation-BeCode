<?php
    $items = array('Home', 'Lion', 'Crocodile', 'Impala', 'Elephant', 'Tigre');
    $link = 'http://localhost/PHP/Controleurs/index.php';
    function menu($array,$link){
        foreach($array as $value){
            echo '<a class="nav-item nav-link" href='.$link.'?page='.$value.'>'.$value.'</a>';
        }
    }
