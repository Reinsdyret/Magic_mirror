<?php 
session_start();

?>

<!DOCTYPE html>
<html>
  <body>

  <ul class="header">
    <a class ="centerText" href="index.php">
        <li>
        <p>Home</p>
        </li>
    </a>

    <a class ="centerText" href="login/registration.php">
        <li>
        <p>Registration</p>
        </li>
    </a>

    <?php
    
    if (isset($_SESSION['mail'])) {
        echo "<a class =\"centerText\" href=\"login/logout.php\">";
        echo "<li>";
        echo "<p>Logout</p>";
    }
    else{
        echo "<a class =\"centerText\" href=\"login/login.php\">";
        echo "<li>";
        echo "<p>Login</p>";
    }
    echo "</li>";
    echo "</a>";
?>


</ul>
  </body>
</html>