<?php

include('inc/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $facilityID = $_POST['facilityID'];
    $facilityName = $_POST['facilityName'];


    $sql = "INSERT INTO facility(facilityID,facilityName) VALUES('$facilityID','$facilityName')";

    $res = mysqli_query($conn, $sql);

    if (!$res) {
        var_dump($sql);
        echo "Failed!";
    } else {
        header("Location: dashboard.php");
    }
}
