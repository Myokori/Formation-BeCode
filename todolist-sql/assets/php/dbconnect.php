<?php

try {
	// On se connecte à MySQL
	$db = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', 'WnCNaKPrA3X2SiKP');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : ' . $e->getMessage());
}
