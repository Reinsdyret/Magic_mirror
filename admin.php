<!DOCTYPE html>
<?php
require "ting/connect_local.php";
echo "<header class=\"header\">";
include "ting/header.php";
echo "</header>";
echo "<footer class=\"footer\">";
include "ting/footer.html";
echo "</footer>";
$_SESSION["email"] = "lars.haukland@gmail.com";
$email = $_SESSION["email"];
$sql = "SELECT id FROM mmperson WHERE email = \"$email\"";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)){
    $id = $row["id"];
}

$widgets = ["","","",""];


$sql = "SELECT * FROM mmwidget_i_bruk WHERE type = \"huskeliste\"";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){$huskeliste = True;}
else{$huskeliste = False;}

$sql = "SELECT * FROM mmwidget_i_bruk WHERE type = \"nyheter\"";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){$nyheter = True;}
else{$nyheter = False;}

$sql = "SELECT * FROM mmwidget_i_bruk WHERE type = \"timeplan\"";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){$timeplan = True;}
else{$timeplan = False;}

$sql = "SELECT * FROM mmwidget_i_bruk WHERE type = \"vær\"";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){$vær = True;}
else{$vær = False;}



?>
<html>
<head>
    <title>AdminPage</title>
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
        <input type="text" name="huskeliste_x_start">
        <label for="x_start">X start</label>
        <input type="text" name="huskeliste_x_end">
        <label for="x_start">X end</label>
        <input type="text" name="huskeliste_y_start">
        <label for="x_start">Y start</label>
        <input type="text" name="huskeliste_y_end">
        <label for="x_start">Y end</label>
            <br>   
        
        <input type="checkbox" name="nyheter" id="nyheter" value="nyheter" class="nyheter"
        <?php
            if($nyheter){
                echo "checked";
            }
        ?>>
        <label for="nyheter" class="nyheter">Nyheter</label>
        <input type="text" name="nyheter_x_start">
        <label for="x_start">X start</label>
        <input type="text" name="nyheter_x_end">
        <label for="x_start">X end</label>
        <input type="text" name="nyheter_y_start">
        <label for="x_start">Y start</label>
        <input type="text" name="nyheter_y_end">
        <label for="x_start">Y end</label>
            <br>

        
        <input type="checkbox" name="timeplan" id="timeplan" value="timeplan" class="timeplan"
        <?php
            if($timeplan){
                echo "checked";
            }
        ?>>
        <label for="timeplan" class="timeplan">Timeplan</label>
        <input type="text" name="timeplan_x_start">
        <label for="x_start">X start</label>
        <input type="text" name="timeplan_x_end">
        <label for="x_start">X end</label>
        <input type="text" name="timeplan_y_start">
        <label for="x_start">Y start</label>
        <input type="text" name="timeplan_y_end">
        <label for="x_start">Y end</label>
            <br>
        

        <input type="checkbox" name="vær" id="vær" value="vær" class="vær"
        <?php
            if($vær){
                echo "checked";
            }
        ?>>
        <label for="vær" class="vær">Vær</label>
        <input type="text" name="vær_x_start">
        <label for="x_start">X start</label>
        <input type="text" name="vær_x_end">
        <label for="x_start">X end</label>
        <input type="text" name="vær_y_start">
        <label for="x_start">Y start</label>
        <input type="text" name="vær_y_end">
        <label for="x_start">Y end</label>
            <br>
        <input type="submit">
    </form>
</body>
</html>