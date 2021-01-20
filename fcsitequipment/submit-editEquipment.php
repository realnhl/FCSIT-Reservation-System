<?php

include('inc/config.php');

$id = $_POST['id'];
$equipmentID = $_POST['equipmentID'];
$equipmentName = $_POST['equipmentName'];
$facility = $_POST['facility'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "UPDATE equipment SET equipmentID = '$equipmentID',equipmentName = '$equipmentName', facilityID = '$facility' WHERE e_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        var_dump($sql);
        echo "Failed!";
    } else {
        header("Location: listOfEquipment.php");
    }
}
