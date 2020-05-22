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


$sql = "SELECT * from mmwidget_i_bruk WHERE person_id = $id";
$result = mysqli_query($conn,$sql);


if($result){
    $sql = "UPDATE mmwidget_i_bruk SET type = \"huskeliste\", box = $huskeliste_box, bruk = $check_huskeliste WHERE person_id = $id AND type = \"huskeliste\"";
    $result = mysqli_query($conn,$sql);

    $sql = "UPDATE mmwidget_i_bruk SET type = \"nyheter\", box = $nyheter_box, bruk = $check_nyheter WHERE person_id = $id AND type = \"nyheter\"";
    $result = mysqli_query($conn,$sql);

    $sql = "UPDATE mmwidget_i_bruk SET type = \"timeplan\", box = $timeplan_box, bruk = $check_timeplan WHERE person_id = $id AND type = \"timeplan\"";
    $result = mysqli_query($conn,$sql);

    $sql = "UPDATE mmwidget_i_bruk SET type = \"vær\", box = $vær_box, bruk = $check_vær WHERE person_id = $id AND type = \"vær\"";
    $result = mysqli_query($conn,$sql);
}

else{
    $sql = "INSERT INTO mmwidget_i_bruk (person_id, type, box, bruk)
            VALUES 
            ($id, \"huskeliste\", $huskeliste_box, $check_huskeliste),
            ($id, \"nyheter\", $nyheter_box, $check_nyheter),
            ($id, \"timeplan\", $timeplan_box, $check_timeplan),
            ($id, \"vær\", $vær_box, $check_vær)";

    $result = mysqli_query($conn,$sql);
}
?>
