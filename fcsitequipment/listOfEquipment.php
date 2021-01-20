<?php

include('inc/config.php');

$sql = "SELECT equipment.e_id,equipment.equipmentID,equipment.equipmentName,facility.facilityName FROM equipment INNER JOIN facility ON equipment.facilityID = facility.f_id";
$result = mysqli_query($conn, $sql);
$equipments = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Equipments</title>
</head>

<body>
    <h2>List of equipments</h2>

    <a href="dashboard.php"><button>Back</button></a><br><br>

    <?php $runningNumber = 0; ?>
    <table>
        <tr>
            <th>No.</th>
            <th>Equipment Name</th>
            <th>Equipment ID</th>
            <th>Facility Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($equipments as $equipment) : ?>
            <tr>
                <?php $runningNumber++; ?>
                <td><?php echo $runningNumber; ?></td>
                <td><?php echo $equipment['equipmentName']; ?></td>
                <td><?php echo $equipment['equipmentID']; ?></td>
                <td><?php echo $equipment['facilityName']; ?></td>
                <td>
                    <a href="editEquipment.php?id=<?php echo $equipment['e_id']; ?>"><button>Edit</button></a>
                    <form action="deleteEquipment.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $equipment['e_id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>