<?php

include('inc/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $equipmentID = $_POST['equipmentID'];
    $equipmentName = $_POST['equipmentName'];
    $facility = $_POST['facility'];


    $sql = "INSERT INTO equipment(equipmentID,equipmentName,facilityID) VALUES('$equipmentID','$equipmentName','$facility')";

    $res = mysqli_query($conn, $sql);

    if (!$res) {
        var_dump($sql);
        echo "Failed!";
    } else {
        header("Location: dashboard.php");
    }
}
