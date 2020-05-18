<?php

require('../ting/connect_local.php');

include "../ting/header.php";


  if ( isset( $_POST["email"] ) && isset( $_POST["password"] ) )
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
          echo "Login OK";
          echo "<meta http-equiv = \"refresh\" content = \"2; url = ../index.php\" />";
        }  
        else {
          session_destroy();
          echo "Login failed";
        }
  }
  else {
        session_destroy();
        echo "Login failed";
  }
?>