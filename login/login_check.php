<?php
require('connect.php')
?>
<?php include "ting/header.php";
?>
<?php
  session_start();
  if ( isset( $_POST["username"] ) && isset( $_POST["password"] ) )
  {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        
        mysqli_set_charset( $conn, "utf8" );
        if ( !$conn ) { die("Server down. Please try again later."); }
        $sql = "SELECT * FROM user
                WHERE username = \"$user\"
                AND   password = \"$pass\"";
        $result = mysqli_query($conn, $sql);
        if ( mysqli_num_rows($result) == 1 ) {          
          $_SESSION["username"] = $user;
          echo "Login OK";
          header('index.php');
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