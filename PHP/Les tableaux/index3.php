<?php
    $département['01'] = 'Ain';
    $département['03'] = 'Allier';
    $département['07'] = 'Ardèche';
    $département['15'] = 'Cantal';
    $département['26'] = 'Drôme';
    $département['38'] = 'Isère';
    $département['42'] = 'Loire';
    $département['43'] = 'Haute-Loire';
    $département['63'] = 'Puy-de-Dôme';
    $département['69'] = 'Rhône';
    $département['73'] = 'Savoie';
    $département['74'] = 'Haute-Savoie';

    echo "<p>".$département['69']." "."</p>";

    $département['57'] = 'Moselle';

    asort($département);
    foreach($département as $key => $value){
        echo "<p>"."Le département ".$value." a le numéro ".$key." "."</p>";
    }