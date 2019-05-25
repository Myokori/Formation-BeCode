<?php
class User
{
  public function Display()
  {
    echo '<form method="POST"><button type="submit" name="login">Log In</button>';
    echo '<button type="submit" name="register">Register</button></form>';
    if (isset($_POST['login'])) {
      header("Location:class/login.php");
    }
    if (isset($_POST['register'])) {
      header("Location:class/register.php");
    }
  }
}
