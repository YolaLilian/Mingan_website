<?php

include_once "include/db_connection.php";

if (!empty($_GET["id"])) {
    $id = mysqli_escape_string($conn, $_GET["id"]);
    $sql = ("DELETE FROM appointments WHERE id ='$id'");
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header ("Location: overview_appointments.php");
}
?>

