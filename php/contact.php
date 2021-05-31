<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "test";

//create connection
$con = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "failed to connect!";
    exit();
} else {
    echo "connection success";
}
