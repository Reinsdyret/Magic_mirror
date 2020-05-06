<?php
  session_start();
?>
<?php
require('connect.php')
?>
<!DOCTYPE html>
<html>
  <head>
        <title>Front page</title>
        <meta charset="utf-8">
  </head>
  <body>
<?php
if ( !isset($_SESSION["username"]) )
{
?>
        <form action="login_check.php" method="post">
          <input type="text"
                 name="username" id="username"
                 placeholder="Username">
          <input type="password"
                 name="password" id="username"
                 placeholder="Password">
          <input type="submit" value="Log in">
        </form>
<?php
} else {
  echo "<h1>Welcome " . $_SESSION["username"] . "!</h1>";
  echo "<a href=\"logout.php\">Log out</a>";
}
?>
  </body>
</html>