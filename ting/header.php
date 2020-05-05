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
    echo "<a class =\"centerText\" href=\"index.php\">";
    echo "<li>";
    if (isset($_SESSION['login'])) {
        echo "<p>Logout</p>";
    }
    else{
        echo "<p>Login</p>";
    }
    echo "</li>";
    echo "</a>";
?>


</ul>
  </body>
</html>