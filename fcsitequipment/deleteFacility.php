<?php

include('inc/config.php');

$id = $_POST['id'];

$sql = "DELETE FROM facility WHERE f_id = '$id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    var_dump($sql);
    echo "Failed!";
} else {
    header("Location: listOfFacility.php");
}
