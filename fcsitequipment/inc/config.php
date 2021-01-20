<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fcsit";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    echo "Connection Failed!";
}
