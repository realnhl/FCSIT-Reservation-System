<?php

include('inc/config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM reservation WHERE r_id = '$id' ";
$result = mysqli_query($conn, $sql);
$reservation = mysqli_fetch_assoc($result);

$equipmentID = $reservation['equipmentID'];
$facilityID = $reservation['facilityID'];
$userID = $reservation['userID'];

$sql2 = "SELECT * FROM equipment WHERE e_id = '$equipmentID'";
$result2 = mysqli_query($conn, $sql2);
$equipment = mysqli_fetch_assoc($result2);

$sql3 = "SELECT * FROM facility WHERE f_id = '$facilityID'";
$result3 = mysqli_query($conn, $sql3);
$facility = mysqli_fetch_assoc($result3);

$sql4 = "SELECT * FROM user WHERE userID = '$userID'";
$result4 = mysqli_query($conn, $sql4);
$user = mysqli_fetch_assoc($result4);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Reservation</title>
</head>

<body>
    <h2>View Reservation</h2>

    <a href="listOfReservation.php"><button>Back</button></a><br><br>

    Reservation ID : <input type="text" readonly value="<?php echo $reservation['r_id']; ?>"><br>
    Facility ID : <input type="text" readonly value="<?php echo $facility['facilityID']; ?>"><br>
    Facility Name : <input type="text" readonly value="<?php echo $facility['facilityName']; ?>"></br>
    Equipments ID : <input type="text" readonly value="<?php echo $equipment['equipmentID']; ?>"></br>
    Equipments Name : <input type="text" readonly value="<?php echo $equipment['equipmentName']; ?>"></br>
    Booked By : <input type="text" readonly value="<?php echo $user['userName']; ?>"></br>
    Booked From : <input type="text" readonly value="<?php echo $reservation['fromDate']; ?>"></br>
    Booked Until : <input type="text" readonly value="<?php echo $reservation['untilDate']; ?>"></br>
    Booked On : <input type="text" readonly value="<?php echo $reservation['dateCreated']; ?>"></br>

</body>

</html>