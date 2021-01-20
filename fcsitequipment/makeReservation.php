<?php

include('inc/config.php');
session_start();

$id = $_GET['id'];

$sql = "SELECT * FROM facility WHERE f_id = '$id'";
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
    <title>Make a new reservation</title>
</head>

<body>

    <h2>Make a new reservation</h2>

    <a href="listOfFacility.php"><button>Back</button></a><br><br>

    <form action="submit-newReservation.php" method="post">

        <input type="hidden" name="userID" value="<?php echo $_SESSION['userID']; ?>">
        <input type="hidden" name="facilityID" value="<?php echo $facility['f_id']; ?>">

        Facility to book : <input type="text" disabled name="facilityName" value="<?php echo $facility['facilityName']; ?>">
        <br>
        Other equipment : <select name="equipment" id="equipment">
            <option disabled selected="selected">Select equipment</option>
            <?php foreach ($equipments as $equipment) : ?>
                <option value="<?php echo $equipment['e_id']; ?>"><?php echo $equipment['equipmentID']; ?> - <?php echo $equipment['equipmentName']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>

        From : <input type="date" name="fromDate" id="fromDate" required><br>
        Until : <input type="date" name="untilDate" id="untilDate" required><br>

        <input type="submit" value="Submit">

    </form>

</body>

</html>