<?php
require('connect.php'); ?>
<?php
require('ting/header.php'); ?>

<?php 
$user = $_POST['username'];
$navn = $_POST['navn'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO `user` (`id`, `navn`, `email`, `password`, `username`) VALUES (NULL, '$navn', '$email', '$password', '$user')";
header('index.php');
if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
    header('index.php');
  }
  
?>