<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Facility</title>
</head>

<body>
    <h2>New Facility</h2>

    <a href="dashboard.php"><button>Back</button></a><br><br>

    <form action="submit-newFacility.php" method="post">
        Facility ID : <input type="text" name="facilityID" id="facilityID" required><br>
        Facility Name : <input type="text" name="facilityName" id="facilityName" required><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>