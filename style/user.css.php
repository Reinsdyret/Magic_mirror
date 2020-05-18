<?php
    header("Content-type: text/css; charset: UTF-8");
    session_start();
?>
<?php
include "../ting/connect_local.php";

$id = $_SESSION["id"];
$sql = "SELECT * FROM mmwidget_i_bruk WHERE person_id  = $id";
$result = mysqli_query($conn,$sql);

$grid_row = ["0","1/2","2/3","3/4"];
$grid_column = ["0","1/2","2/3","3/4"];

while($row = mysqli_fetch_assoc($result)){
    if($row["type"] == "timeplan" && $row["bruk"]){
        $timeplan_box = $row["box"];
    }
    if($row["type"] == "huskeliste" && $row["bruk"]){
        $huskeliste_box = $row["box"];
    }
    if($row["type"] == "klokke" && $row["bruk"]){
        $klokke_box = $row["box"];
    }
}
?>
.timeplan{
    grid-area:<?php if(isset($timeplan_box)){echo "g".$timeplan_box;} ?>;
    width:100%;
}

.huskeliste{
    grid-area:<?php if(isset($huskeliste_box)){echo "g".$huskeliste_box;}?>;
}

.klokke{
    grid-area:<?php if(isset($klokke_box)){echo "g".$klokke_box;}?>;
    font-size: 40px;
    justify-self: center;
}