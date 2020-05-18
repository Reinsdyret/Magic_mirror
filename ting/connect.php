<?php
$server = "mysql.elev.stolav.it";
$user = "stolav19_haular";
$pass = "";
$db = "stolav19_haular";

$conn = mysqli_connect($server,$user,$pass,$db);
mysqli_set_charset($conn, "utf8");

if(!$conn){
    die("Connection failed");
}
?>