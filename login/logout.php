<?php

  session_start();


  session_unset();

  session_destroy();


  echo "You are now logged out";
  header('index.php');

?>

<!DOCTYPE html>

<html>

  <head>

        <title>Log out</title>

        <meta charset="utf-8">

        

  </head>

  <body>
<?php
  echo "You are now logged out";
  echo"<meta http-equiv=\"refresh\" content=\"2; url='../index.php'\">"

?>
  </body>

</html>