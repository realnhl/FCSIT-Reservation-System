<?php

include('inc/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userID'];
    $facility = $_POST['facilityID'];
    $equipment = $_POST['equipment'];
    $fromDate = $_POST['fromDate'];
    $untilDate = $_POST['untilDate'];

    $query = "SELECT * FROM `reservation` WHERE '$fromDate' BETWEEN fromDate AND untilDate OR '$untilDate' BETWEEN fromDate AND untilDate AND facilityID = 'facility'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Refresh:5; url=listOfFacility.php");
        echo "The facility has been reserved by another user. Please select other facility or other date. You will be redirected to list of facility page. Thank you. ";
    } else {
        $sql = "INSERT INTO reservation(userID,facilityID,equipmentID,fromDate,untilDate) VALUES('$userID','$facility','$equipment','$fromDate','$untilDate')";

        $res = mysqli_query($conn, $sql);

        if (!$res) {
            var_dump($sql);
            echo "Failed!";
        } else {
            header("Location: listOfReservation.php");
        }
    }
}
