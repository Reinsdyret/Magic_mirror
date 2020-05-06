<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "magisk_speil";

$conn = mysqli_connect($server,$user,$pass,$db);
mysqli_set_charset($conn, "utf8");

if(!$conn){
    die("Connection failed");
}

?>