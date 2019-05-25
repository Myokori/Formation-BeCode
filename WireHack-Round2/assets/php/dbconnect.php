<?php
try {
    $db = new PDO('mysql:host=localhost; dbname=drag; charset=utf8', 'root', 'WnCNaKPrA3X2SiKP');
} catch (Exception $e) {
    die("Erreur" . $e->getmessage());
}
?>