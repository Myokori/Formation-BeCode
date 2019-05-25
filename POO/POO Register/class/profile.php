<?php
require_once "dbconnect.php";
session_start();
class Profile
{
  public function UserProfile()
  {
    //On initialise la session pour récupérer ses infos
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    //On récupère la connexion à la DB
    $db = new DataBase();
    $bdd = $db->getDb();
    //On récupère le contenu de la table en fonction du nom d'utilisateur stocké dans la session.
    $req = $bdd->prepare(
      "SELECT * FROM User WHERE username='" . $username . "'"
    );
    $req->execute();
    $display = $req->fetchAll();
    //On affiche les données du profil utilisateur
    foreach ($display as $component) {
      echo "<p>Username : " . $component['username'] . "</p>";
      echo "<p>Mail : " . $component['email'] . "</p>";
    }
    $bdd = null;
  }
  public function Reset()
  {
    echo '<form method="POST">';
    echo '<p>New Username : <input type="text" name="newuser"/></p>';
    echo '<p>New Mail : <input type="text" name="newmail"/></p>';
    echo "<p><button name='reset' type='submit'>Mettre à jour les données</button></p>";
    echo '<button name="disconnect" type="submit">Disconnect</button>';
    echo '</form>';
    if (isset($_POST['reset'])) {
      //On récupère la connexion à la DB
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      $db = new DataBase();
      $bdd = $db->getDb();
      $newUsername = filter_var($_POST['newuser'], FILTER_SANITIZE_STRING);
      $newMail = filter_var($_POST['newmail'], FILTER_SANITIZE_STRING);
      if (!empty($newUsername && $newMail)) {
        $req = $bdd->prepare(
          "UPDATE User SET username='" .
            $newUsername .
            "', email='" .
            $newMail .
            "' WHERE username='" .
            $username .
            "'"
        );
        $req->execute();
        $_SESSION['username'] = $newUsername;
        $_SESSION['mail'] = $newMail;
        header("Refresh:0");
      } else {
        echo "<p>Nom d'utilisateur incorrect</p>";
        echo "<p>Mot de passe incorrect</p>";
      }
    }
    if (isset($_POST['disconnect'])) {
      session_destroy();
      header("Location:../index.php");
    }
    if(empty($_SESSION)){
        header("Location:../index.php");
    }
  }
}

$profil = new Profile();
echo $profil->UserProfile();
echo $profil->Reset();
