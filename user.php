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
      $box = $row["box"];
        echo "<iframe src=\"http://www.novasoftware.se/ImgGen/schedulegenerator.aspx?format=pdf&schoolid=60810/nb-no&type=3&id=%7bA304EE19-A471-452E-8437-EA99F2F6B757%7d&period=&week=21&mode=0&printer=1&colors=2&head=1&clock=1&foot=1&day=0&width=1240&height=1753&count=1&decrypt=0\"></iframe>";
    }
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Speil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="ting/user_style.css">
  </head>
  <body>
  </body>
</html>