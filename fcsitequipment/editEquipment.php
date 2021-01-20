<?php

include('inc/config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM equipment WHERE e_id = '$id' ";
$result = mysqli_query($conn, $sql);
$equipment = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM facility";
$result2 = mysqli_query($conn, $sql2);
$facilities = mysqli_fetch_all($result2, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Equipment</title>
</head>

<body>
    <h2>Edit Equipment</h2>

    <a href="listOfEquipment.php"><button>Back</button></a><br><br>

    <form action="submit-editEquipment.php" method="post">
        <input type="hidden" name="id" value="<?php echo $equipment['e_id']; ?>">
        Equipment ID : <input type="text" name="equipmentID" value="<?php echo $equipment['equipmentID']; ?>" required><br>
        Equipment Name : <input type="text" name="equipmentName" value="<?php echo $equipment['equipmentName']; ?>" required></br>
        Facility : <select name="facility" id="facility">
            <option disabled selected="selected">Select facility</option>
            <?php foreach ($facilities as $facility) : ?>
                <option value="<?php echo $facility['f_id']; ?>" <?php if ($equipment['facilityID'] == $facility['f_id']) echo 'selected="selected"'; ?>><?php echo $facility['facilityID']; ?>  <?php echo $facility['facilityName']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Submit">
    </form>

</body>

</html>