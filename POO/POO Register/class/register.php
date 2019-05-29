<?php
require_once 'dbconnect.php';
class Register
{
  public function SignUp()
  {
    //Variable permettant de bloquer l'envoi de donnée et de ne pas retourner sur les boutons login / register si elle est set sur FALSE;
    $isSuccess = false;
    //On affiche le formulaire
    echo '<form method="POST">';
    echo '<p>Nom d\'utilisateur : <input type="text" name="user"/></p>';
    // echo '<p>'.$errorUser.'</p>';
    echo '<p>Adresse e-mail : <input type="text" name="mail"/></p>';
    // echo '<p>'.$errorMail.'</p>';
    echo '<p>Mot de passe : <input type="text" name="pass"/></p>';
    // echo '<p>'.$errorPass.'</p>';
    echo '<button type="submit" name="signup">Sign Up</button>';
    echo '</form>';
    //Conditions pour afficher l'erreur et récupérer les données
    if (isset($_POST['signup'])) {
      //On récupère le contenu des inputs présents ci-dessus(register)
      $username = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
      $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
      $password = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
      if (!empty($_POST['user'] && $_POST['mail'] && $_POST['pass'])) {
        $isSuccess = true;
        //On se connecte à la DB en faisant appel à la PDO depuis dbconnect.php
        $db = new DataBase();
        $bdd = $db->getDb();
        $req = $bdd->prepare('SELECT * FROM User WHERE username=:post_user');
        $req->execute(array(":post_user" => $_POST['user']));
        $display = $req->fetchAll();
        foreach($display as $component){
            if($username === $component['username']){
                $isSuccess = false;
                $userCheck = false;
                echo "<p>Ce nom d'utilisateur existe déjà !</p>";
            }else{
                $userCheck = true;
            }
            if($mail == $component['email']){
                $isSuccess = false;
                $mailCheck = false;
                echo "<p>Cet email existe déjà !</p>";
            }else{
                $mailCheck = true;
            }
            if($userCheck && $mailCheck === true){
                $isSuccess = true;
            }
        }
        //On ajoute une condition liée à la variable $isSuccess -> si elle est strictement égale à true on envoie les données sinon on retourne une erreur
        if ($isSuccess === true) {
          //On execute un ajout des données récupérées depuis les inputs dans les colonnes correspondantes de la DB
          $bdd->exec(
            'INSERT INTO User(username, email, password) VALUES ("' .
              $username .
              '","' .
              $mail .
              '","' .
              $password .
              '")'
          );
          echo "<p>Votre compte a été créer. Vous pouvez désormais vous connecter à l'aide du bouton ci-dessous</p>";
          echo "<button><a href='login.php'>Log In</a></button>";
        }
      } else {
        echo "Au moins l'un des champs de saisie est vide. Veuillez le(s) remplir";
      }
    }
    $bdd = null;
  }
}

$signUp = new Register();
echo $signUp->SignUp();
