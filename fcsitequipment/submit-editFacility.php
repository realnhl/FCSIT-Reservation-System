<?php

include('inc/config.php');

$id = $_POST['id'];
$facilityID = $_POST['facilityID'];
$facilityName = $_POST['facilityName'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "UPDATE facility SET facilityID = '$facilityID',facilityName = '$facilityName' WHERE f_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        var_dump($sql);
        echo "Failed!";
    } else {
        header("Location: listOfFacility.php");
    }
}
