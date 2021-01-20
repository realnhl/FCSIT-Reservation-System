<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

    <h2>Login first to use the system</h2>

    <a href="index.php"><button>Back</button></a><br><br>

    <form action="submit-login.php" method="post">
        Email : <input type="text" name="userEmail" id="userEmail" required><br>
        Password : <input type="password" name="userPassword" id="userPassword" required><br>

        <input type="submit" value="Login">

    </form>

</body>

</html>