<?php
require_once 'dbconnect.php';
session_start();
class LogIn
{
  public function SignIn()
  {
    echo '<form method="POST">';
    echo '<p>Nom d\'utilisateur : <input type="text" name="user"/></p>';
    echo '<p>Mot de passe : <input type="text" name="pass"/></p>';
    echo '<button type="submit" name="signin">Sign In</button>';
    echo '</form>';
    if (isset($_POST['signin'])) {
      $username = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
      //On récupère la connexion à la DB
      $db = new DataBase();
      $bdd = $db->getDb();
      //On récupère le contenu de la DB
      $req = $bdd->prepare('SELECT * FROM User WHERE username=:post_user');
      $req->execute(array(":post_user" => $_POST['user']));
      $display = $req->fetchAll();
      //On créer une boucle pour parcourir les résultats de la DB
      foreach ($display as $component) {
        if ($_POST['user'] === $component['username']) {
          $user = true;
          $mail = $component['email'];
        } else {
          $user = false;
        }
        if ($_POST['pass'] === $component['password']) {
          $pass = true;
        } else {
          $pass = false;
        }
      }
      if ($user && $pass === true) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $mail;
        header("Location:profile.php");
      } else {
        echo "<p>Nom d'utilisateur incorrect</p>";
        echo "<p>Mot de passe incorrect</p>";
      }
    }
  }
}

$signIn = new LogIn();
echo $signIn->SignIn();
