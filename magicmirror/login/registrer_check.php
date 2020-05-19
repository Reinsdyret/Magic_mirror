<?php
require('../ting/connect_local.php'); ?>
<?php
require('../ting/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
<main id="reg_ok">
<?php 

$navn = $_POST['navn'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM mmperson WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result){
       
        echo "<p id=\"registrer_fail\">Det eksisterer allerede en bruker med denne mailen!</p>";
        echo "<meta http-equiv = \"refresh\" content = \"2; url = ../login/registrer.php\" />";
      
  }
  else{
    $sql2 = "INSERT INTO mmperson (`id`, `navn`, `email`, `passord`) VALUES (NULL, '$navn', '$email', '$password')";
    $result = mysqli_query($conn, $sql2);
    if($result){
    echo "<p id=\"registrer_ok\">Ny bruker registrert!</p>";
    echo "<meta http-equiv = \"refresh\" content = \"2; url = ../index.php\" />";
  }
 
}

      ?>
</main>
</body>
</html>

