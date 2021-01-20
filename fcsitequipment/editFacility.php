<?php

include('inc/config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM facility WHERE f_id = '$id' ";
$result = mysqli_query($conn, $sql);
$facility = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Facility</title>
</head>

<body>
    <h2>Edit Facility</h2>

    <a href="listOfFacility.php"><button>Back</button></a><br><br>

    <form action="submit-editFacility.php" method="post">
        <input type="hidden" name="id" value="<?php echo $facility['f_id']; ?>">
        Facility ID : <input type="text" name="facilityID" value="<?php echo $facility['facilityID']; ?>" required><br>
        Facility Name : <input type="text" name="facilityName" value="<?php echo $facility['facilityName']; ?>" required></br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>