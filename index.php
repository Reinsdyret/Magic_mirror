<!DOCTYPE html>
<?php
require "ting/connect_local.php";
include "ting/header.php";
echo "<footer class=\"footer\">";
include "ting/footer.html";
echo "</footer>";
?>
<html>
<head>
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <p class="info">
        HeiHei<br>
        Dis is our bewtiful miror!
    </p>
    <?php
    if(isset($_SESSION["mail"])){
        echo "<a href=\"admin.php\" class=\"preview\">";
    }
    else{
        echo "<a href=\"login/login.php\" class=\"preview\">";
    }
    ?>
    Admin</a>
    
    <img src="media/logo.png" class="logo" alt="LogoSpeil" height="400">

    <?php
    if (isset($_SESSION["mail"])){
        echo "<a href=\"user.php\" class=\"main\">";
    }
    ?>
    User</a>
</body>

</html>