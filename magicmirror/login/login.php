<?php
  

require('../ting/connect_local.php');
include "../ting/header.php";
?>

<!DOCTYPE html>
<html>
  <head>
        <title>Log inn</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Roboto&display=swap" rel="stylesheet"> 
  </head>
  <body>
    <main id="login_page">
<?php

if ( !isset($_SESSION["username"]) )
{
?>
       
       <form id="login_skjema" action="login_check.php" method="post">
         <label id="loginn_tittel"><h2>Logg inn</h2></label>
        <label for="password">E-mail</label>
        <input type="email"
                 name="email" id="email"
                 placeholder="Mail">
          <label for="password" >Passord</label>
          <input type="password"
                 name="password" id="username"
                 placeholder="Passord">
          <input type="submit" value="Log in">
          <label id="ikke_registrert"><a href="../login/registrer.php">Ikke registrert?</a></label>
        </form>
<?php
} else {
  echo "<h1>Welcome " . $_SESSION["username"] . "!</h1>";
  echo "<a href=\"logout.php\">Log out</a>";
}
?>
</main>
  </body>
</html>