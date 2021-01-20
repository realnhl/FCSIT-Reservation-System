<?php

include('inc/config.php');

$sql = "SELECT * FROM facility";
$result = mysqli_query($conn, $sql);
$facilities = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Equipment</title>
</head>

<body>
    <h2>New Equipment</h2>

    <a href="dashboard.php"><button>Back</button></a><br><br>

    <form action="submit-newEquipment.php" method="post">
        Equipment ID : <input type="text" name="equipmentID" id="equipmentID" required><br>
        Equipment Name : <input type="text" name="equipmentName" id="equipmentName" required><br>
        Facility : <select name="facility" id="facility">
            <option disabled selected="selected">Select facility</option>
            <?php foreach ($facilities as $facility) : ?>
                <option value="<?php echo $facility['f_id']; ?>"><?php echo $facility['facilityID']; ?>  <?php echo $facility['facilityName']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>