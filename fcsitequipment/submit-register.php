<?php

include('inc/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['userName'];
    $userID = $_POST['userID'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];

    $sql = "INSERT INTO user(userName,userID,userEmail,userPassword) VALUES('$userName','$userID','$userEmail','$userPassword')";

    $res = mysqli_query($conn, $sql);

    if (!$res) {
        var_dump($sql);
        echo "Failed!";
    } else {
        header("Location: login.php");
    }
}
