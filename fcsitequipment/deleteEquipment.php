<?php

include('inc/config.php');

$id = $_POST['id'];

$sql = "DELETE FROM equipment WHERE e_id = '$id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    var_dump($sql);
    echo "Failed!";
} else {
    header("Location: listOfEquipment.php");
}
