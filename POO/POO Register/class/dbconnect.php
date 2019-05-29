<?php
class DataBase
{
  private $db;

  public function __construct()
  {
    try {
      // On se connecte à MySQL
      $this->db = new PDO(
        'mysql:host=localhost;dbname=POO;charset=utf8',
        'root',
        'WnCNaKPrA3X2SiKP'
      );
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      // En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : ' . $e->getMessage());
    }
  }
  public function getDb()
  {
    if ($this->db instanceof PDO) {
      return $this->db;
    }
  }
}
