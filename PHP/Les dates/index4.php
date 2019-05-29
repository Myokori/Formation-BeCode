<?php
    echo '<p>'.time().'</p>';
    $date = date_create();
    date_date_set($date, 2016, 8, 2);
    echo date_format($date, 'd-m-Y ');
    $timestamp = strtotime('02-08-2016');
    echo $timestamp;
?> 
