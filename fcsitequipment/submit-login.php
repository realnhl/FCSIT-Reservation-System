<?php
require('inc/config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $userPassword = mysqli_real_escape_string($conn, $_POST['userPassword']);

    $sql = "SELECT * FROM user WHERE userEmail = '$userEmail' and userPassword = '$userPassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $userEmail and $userPassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['userID'] = $row['userID'];
        header("location: dashboard.php");
    } else {
        echo "login failed!";
        sleep(2);
        header("location: login.php");
    }
}
