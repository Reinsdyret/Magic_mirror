<?php
$email = $_SESSION["mail"];
$sql = "SELECT id FROM mmperson WHERE email = \"$email\"";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)){
    $id = $row["id"];
    $_SESSION["id"] = $id;
}
?>