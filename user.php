<!DOCTYPE html>
<?php
session_start();
include "ting/connect_local.php";

$id = $_SESSION["id"];

$box_row = [0,1,2,3,4];
$box_column = [0,1,2,3,4];

include "sql/user_sql.php";

while($row = mysqli_fetch_assoc($result)){
    if($row["type"] == "timeplan" && $row["bruk"]){
      $sql2 = "SELECT link FROM mmtimeplan WHERE person_id = $id";
      $result2 = mysqli_query($conn,$sql2);
      $rowt = mysqli_fetch_assoc($result2);
      $box = $row["box"];
      echo "<iframe src=$rowt[\"link\"]></iframe>";
    }
}


?>
<html>
  <head>
    <title>Speil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="style/user_style.css">
    <link rel="stylesheet" type="text/css" href="style/user.css.php">
  </head>
  <body>
  </body>
</html>
