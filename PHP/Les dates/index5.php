<?php
    $now = date('d-m-Y');
    $prevDate = strtotime("16-05-2016");
    $diff = $now - $prevDate;

    echo round($diff / (60 * 60 * 24));
