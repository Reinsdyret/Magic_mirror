<!DOCTYPE html>
<?php
session_start();
include "ting/connect_local.php";
$id = $_SESSION["id"];


include "sql/user_sql.php";
$time = True;
$husk = True;
$klokke = True;

while($row = mysqli_fetch_assoc($result)){
    if($row["type"] == "timeplan" && $row["bruk"] && $time){
        $sql2 = "SELECT link FROM mmtimeplan WHERE person_id = $id";
        $result2 = mysqli_query($conn,$sql2);
        $rowt = mysqli_fetch_assoc($result2);
        $box = $row["box"];
        $time = False;
        $link = $rowt["link"];
        echo "<nav class=\"timeplan\">";
        echo "<iframe src=\"$link\" height=\"500px\"></iframe>";
        echo "</nav>";
          
      }
      if($row["type"] == "huskeliste" &&$row["bruk"] && $husk){
        include "sql/huskeliste.php";
        echo "<nav class=\"huskeliste\">";
        echo "<h2>Huskeliste</h2>";
        echo "<ul>";
        while($row_husk = mysqli_fetch_assoc($result_husk)){
          echo "<li>";
          echo  $row_husk["status"];
          echo "</li>";
        }
        echo "</ul>";
        echo "</nav>";
    }
    if($row["type"] == "klokke" && $row["bruk"] && $klokke){
      include "ting/klokke.html";
      $klokke = False;
    }
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Speil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"  href="style/user_style.css">
    <link rel="stylesheet" type="text/css" href="style/user.css.php" media="screen">
  </head>
  <body>
  </body>
</html>
