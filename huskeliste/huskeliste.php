<?php 
include "../ting/header.php"?>
<?php
 $sysinfo = "";

 $server   = "localhost";
 $username = "root";
 $password = "";
 $database = "magisk_speil";

 $conn = mysqli_connect( $server, $username, $password, $database );
 mysqli_set_charset( $conn, "utf8" );

 if ( !$conn ) { die(); }

 if ( isset( $_POST["do"] ) ) {
    if ( $_POST["do"] == "insert" ) {
        $content = $_POST["content"];
        $u_id = $_SESSION["id"];

        $sql = "INSERT INTO hl_task (content,u_id) VALUES (\"$content\",$u_id)";
        $sysinfo = $sysinfo . $sql;
        $result = mysqli_query( $conn, $sql );

        if ($result) {
            $id = mysqli_insert_id( $conn );
            $sysinfo = $sysinfo . "Insert OK with id = " . $id . ".";
        }
    }
    else if ( $_POST["do"] == "update" ) {
        $id     = $_POST["id"];
        $status = $_POST["status"];

        $sql = "UPDATE hl_task SET status = $status WHERE id = $id";
        $result = mysqli_query( $conn, $sql );
    }
 }
 /*
 if ( isset( $_GET["do"] ) ) {
    if ( $_GET["do"] == "delete" && isset( $_GET["id"] ) ) {
        $id = $_GET["id"];

        $sql = "DELETE FROM task WHERE id = $id";
        $sysinfo = $sysinfo . $sql;
        $result = mysqli_query( $conn, $sql );
    }
 }*/
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Huskeliste</title>
  <meta charset="utf-8">
 </head>
 <body>
  <header><h1>To-do</h1></header>
  <main>
   <ul>
   <?php
    $sql = "SELECT id, content, status FROM hl_task WHERE status <> 2";
    $result = mysqli_query( $conn, $sql);

    if ( mysqli_num_rows($result) > 0) {
        while ( $row = mysqli_fetch_assoc($result) ) {
            echo "<li>";
            echo $row["content"];  
            $id = $row["id"];
            $status = $row["status"];

            $sql2 = "SELECT id, description FROM hl_status";
            $result2 = mysqli_query( $conn, $sql2 );
        
            echo "<form action=\"huskeliste.php\" method=\"post\">";
            echo "<input type=\"hidden\" name=\"do\" value=\"update\">";
            echo "<input type=\"hidden\" name=\"id\" value=\"$id\">";
            echo "<select name=\"status\">";
        
            while ( $row2 = mysqli_fetch_assoc($result2) ) {
                $status_id   = $row2["id"];
                $status_desc = $row2["description"]; 
                echo "<option value=\"$status_id\"";
                if ( $status == $status_id )
                {
                    echo " selected";
                }
                echo ">$status_desc</option>";
            }
        
            echo "</select>";
            echo "<input type=\"submit\" value=\"Endre status\">";
            echo "</form>";
  
            echo "</li>";
        }
    }
   ?>
   </ul>
   <form action="huskeliste.php" method="post">
    <input type="hidden" name="do" value="insert">
    <input type="text" name="content">
    <input type="submit" value="Legg til">
   </form>
  </main>
  <footer><?php echo $sysinfo; ?></footer>
 </body>
</html>