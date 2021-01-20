<?php

include('inc/config.php');

$sql = "SELECT DISTINCT * FROM facility";
$result = mysqli_query($conn, $sql);
$facilities = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Facility</title>
</head>

<body>
    <h2>List of facilities</h2>

    <a href="dashboard.php"><button>Back</button></a><br><br>

    <?php $runningNumber = 0; ?>
    <table>
        <tr>
            <th>No.</th>
            <th>Facility Name</th>
            <th>Facility ID</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($facilities as $facility) : ?>
            <tr>
                <?php $runningNumber++; ?>
                <td><?php echo $runningNumber; ?></td>
                <td><?php echo $facility['facilityName']; ?></td>
                <td><?php echo $facility['facilityID']; ?></td>
                <td>
                    <a href="makeReservation.php?id=<?php echo $facility['f_id']; ?>"><button>Make Reservation</button></a>
                    <a href="viewFacility.php?id=<?php echo $facility['f_id']; ?>"><button>View</button></a>
                    <a href="editFacility.php?id=<?php echo $facility['f_id']; ?>"><button>Edit</button></a>
                    <form action="deleteFacility.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $facility['f_id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>