<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register New User</title>
</head>

<body>

    <h2>Register New User</h2>

    <a href="index.php"><button>Back</button></a><br><br>

    <form action="submit-register.php" method="post">
        Name : <input type="text" name="userName" id="userName" required><br>
        Staff/Student ID : <input type="text" name="userID" id="userID" required><br>
        Email : <input type="email" name="userEmail" id="userEmail" required><br>
        Password : <input type="password" name="userPassword" id="userPassword" required><br>
        <input type="submit" value="Register">
    </form>

</body>

</html>