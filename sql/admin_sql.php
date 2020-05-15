<?php

$mail = $_SESSION["mail"];

if (isset($_POST["huskeliste"])){
    $check_huskeliste = 1;
}
else{
    $check_huskeliste = 0;
}
$huskeliste_box = $_POST["huskeliste_box"];

if (isset($_POST["nyheter"])){
    $check_nyheter = 1;
}
else{
    $check_nyheter = 0;
}
$nyheter_box = $_POST["nyheter_box"];

if (isset($_POST["timeplan"])){
    $check_timeplan = 1;
}
else{
    $check_timeplan = 0;
}
$timeplan_box = $_POST["timeplan_box"];

if (isset($_POST["vær"])){
    $check_vær = 1;
}
else{
    $check_vær = 0;
}
$vær_box = $_POST["vær_box"];

$id = $_SESSION["id"];


$sql = "INSERT INTO mmwidget_i_bruk (person_id, type, box, bruk)
    VALUES 
        ($id, \"huskeliste\", $huskeliste_box, $check_huskeliste),
        ($id, \"nyheter\", $nyheter_box, $check_nyheter),
        ($id, \"timeplan\", $timeplan_box, $check_timeplan),
        ($id, \"vær\", $vær_box, $check_vær)";

$result = mysqli_query($conn,$sql);
if($result){
    echo "INSERT SUCESSFULL";
}
?>