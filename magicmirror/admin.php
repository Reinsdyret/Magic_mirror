<!DOCTYPE html>
<?php
require "ting/connect_local.php";
include "ting/header.php";
include "ting/nav.php";
include "ting/footer.html";



$sql = "SELECT * FROM mmwidget_i_bruk WHERE type = \"huskeliste\" AND bruk";
$result = mysqli_query($conn, $sql);
if ($result){$huskeliste = True;}
else{$huskeliste = False;}

$sql = "SELECT * FROM mmwidget_i_bruk WHERE type = \"nyheter\" AND bruk";
$result = mysqli_query($conn, $sql);
if ($result){$nyheter = True;}
else{$nyheter = False;}

$sql = "SELECT * FROM mmwidget_i_bruk WHERE type = \"timeplan\" AND bruk";
$result = mysqli_query($conn, $sql);
if ($result){$timeplan = True;}
else{$timeplan = False;}

$sql = "SELECT * FROM mmwidget_i_bruk WHERE type = \"vær\" AND bruk";
$result = mysqli_query($conn, $sql);
if ($result){$vær = True;}
else{$vær = False;}



?>
<html>
<head>
    <title>AdminPage</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/admin_style.css">
</head>
<body>
    <form action="admin.php" method="post" class="main">
        <legend>SETTINGS</legend>
        <input type="checkbox" name="huskeliste" id="huskeliste" value="huskeliste" class="huskeliste"
        <?php
            if($huskeliste){
                echo "checked";
            }
        ?>>
        <label for="huskeliste" class="huskeliste">Huskeliste</label>
        <select id="cars" name="huskeliste_box">
        <?php
        $i = 1;
        while ($i <= 9){
            echo "<option value\"$i\">$i</option>";
            $i++;
        }
        ?>
        </select>
        <label for="huskeliste_box">box</label>
            <br>   
        
        <input type="checkbox" name="nyheter" id="nyheter" value="nyheter" class="nyheter"
        <?php
            if($nyheter){
                echo "checked";
            }
        ?>>
        <label for="nyheter" class="nyheter">Nyheter</label>
        <select id="cars" name="nyheter_box">
        <?php
        $i = 1;
        while ($i <= 9){
            echo "<option value\"$i\">$i</option>";
            $i++;
        }
        ?>
        </select>
        <label for="nyheter_box">box</label>
            <br>

        
        <input type="checkbox" name="timeplan" id="timeplan" value="timeplan" class="timeplan"
        <?php
            if($timeplan){
                echo "checked";
            }
        ?>>
        <label for="timeplan" class="timeplan">Timeplan</label>
        <select id="cars" name="timeplan_box">
        <?php
        $i = 1;
        while ($i <= 9){
            echo "<option value\"$i\">$i</option>";
            $i++;
        }
        ?>
        </select>
        <label for="timeplan_box">box</label>
            <br>
        

        <input type="checkbox" name="vær" id="vær" value="vær" class="vær"
        <?php
            if($vær){
                echo "checked";
            }
        ?>>
        <label for="vær" class="vær">Vær</label>
        <select id="cars" name="vær_box">
        <?php
        $i = 1;
        while ($i <= 9){
            echo "<option value\"$i\">$i</option>";
            $i++;
        }
        ?>
        </select>
        <label for="vær_box">box</label>
            <br>
        <input type="submit">
    </form>
    <?php
    include "sql/admin_sql.php";
    include "ting/admin_table.html";
    ?>
</body>
</html>