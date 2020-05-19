<?php 
session_start();

?>

<!DOCTYPE html>
<html>
  <body>
<header>
  <a href="../../magicmirror/index.php"><img id="logo" src="https://img.icons8.com/cotton/2x/mirror.png" alt="logo"></a> 
  <h1 id="logo_tekst">Magic Mirror </h1>
  <h1 id="refleksjon">Magic Mirror </h1>
  <?php
  if( isset($title)) {
    if (isset($_SESSION['mail'])) {
        echo"<ul class=\"loginn_knapper\">";
        echo"<li class=\"liste_element\" id=\"logout_knapp\"><a  href=\"../../magicmirror/login/logout.php\">Logg ut</a></li";
        echo"</ul>";
     }
     else{
     echo"<ul class=\"loginn_knapper\">";
     echo"<li class=\"liste_element\" id=\"register_knapp\"><a  href=\"login/registrer.php\">Registrer deg</a></li>";
     echo"<li class=\"liste_element\" id=\"loginn_knapp\"><a  href=\"login/login.php\">Logg inn</a></li>";
     
     echo"</ul>";
         }
 
        }
?>


</header>
  </body>
</html>