<?php

include('inc/config.php');

$sql = "SELECT reservation.r_id,facility.facilityName,equipment.equipmentName,reservation.fromDate,reservation.untilDate,user.userName FROM reservation LEFT JOIN facility ON reservation.facilityID = facility.f_id LEFT JOIN equipment ON reservation.equipmentID = equipment.e_id LEFT JOIN user ON reservation.userID = user.userID";
$result = mysqli_query($conn, $sql);
$reservations = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Reservations</title>
</head>

<body>

    <h2>List of Reservations</h2>

    <a href="dashboard.php"><button>Back</button></a><br><br>

    <?php $runningNumber = 0; ?>

    <table>

        <tr>
            <th>No.</th>
            <th>Facility Name</th>
            <th>Equipment Name</th>
            <th>From</th>
            <th>Until</th>
            <th>Booked By</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($reservations as $reservation) : ?>
            <?php $runningNumber++; ?>
            <tr>
                <td><?php echo $runningNumber; ?></td>
                <td><?php echo $reservation['facilityName']; ?></td>
                <td><?php echo $reservation['equipmentName']; ?></td>
                <td><?php echo $reservation['fromDate']; ?></td>
                <td><?php echo $reservation['untilDate']; ?></td>
                <td><?php echo $reservation['userName']; ?></td>
                <td>
                    <a href="viewReservation.php?id=<?php echo $reservation['r_id']; ?>"><button>View</button></a>
                    <form action="deleteReservation.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $reservation['r_id']; ?>">
                        <input type="submit" value="Delete">
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>

    </table>


</body>

</html>