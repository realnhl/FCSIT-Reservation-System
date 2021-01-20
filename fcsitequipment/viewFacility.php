<?php

include('inc/config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM facility WHERE f_id = '$id' ";
$result = mysqli_query($conn, $sql);
$facility = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM equipment WHERE facilityID = '$id'";
$result2 = mysqli_query($conn, $sql2);
$equipments = mysqli_fetch_all($result2, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Facility</title>
</head>

<body>
    <h2>View Facility</h2>

    <a href="listOfFacility.php"><button>Back</button></a><br><br>

    Facility ID : <input type="text" readonly value="<?php echo $facility['facilityID']; ?>"><br>
    Facility Name : <input type="text" readonly value="<?php echo $facility['facilityName']; ?>"></br>
    Equipments : <ul>
        <?php foreach ($equipments as $equipment) : ?>
            <li><?php echo $equipment['equipmentName']; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>