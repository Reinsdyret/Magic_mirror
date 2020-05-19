<?php
$sql_husk = "SELECT content status FROM hl_task WHERE status <> 2 AND u_id = $id";
    $result_husk = mysqli_query( $conn, $sql_husk);
?>