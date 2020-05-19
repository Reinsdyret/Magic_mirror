<?php

require('../ting/connect_local.php');

include "../ting/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
<main id="login_ok">
<?php if ( isset( $_POST["email"] ) && isset( $_POST["password"] ) )
{
      $mail = $_POST["email"];
      $pass = $_POST["password"];
      
      mysqli_set_charset( $conn, "utf8" );
      if ( !$conn ) { die("Server down. Please try again later."); }
      $sql = "SELECT * FROM mmperson
              WHERE email = \"$mail\"
              AND   passord = \"$pass\"";
      $result = mysqli_query($conn, $sql);
      if ( mysqli_num_rows($result) == 1 ) {          
        $_SESSION["mail"] = $mail;
        $sql2 = "SELECT id FROM mmperson WHERE email = \"$mail\"";
        $result = mysqli_query($conn, $sql2);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $_SESSION["id"] = $id;
        echo "<p id=\"loginok\">Login OK</p>";
        echo "<meta http-equiv = \"refresh\" content = \"2; url = ../index.php\" />";
      }}  
      else {
        session_destroy();
        echo "<p id=\"loginfail\">Login NOT OK</p>";
        echo "<meta http-equiv = \"refresh\" content = \"2; url = ../login/login.php\" />";
      }
}
else {
      session_destroy();
      echo "<p id=\"loginfail\">Login NOT OK</p>";
      echo "<meta http-equiv = \"refresh\" content = \"2; url = ../login/login.php\" />";
}
?>

</body>
</html>
