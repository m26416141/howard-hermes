<?php
$con = mysqli_connect("localhost", "root", "", "test");
if (mysqli_connect_errno()) {
    echo "failed to connect!";
    exit();
} else {
    echo "connection success";
}
if (isset($_POST["submit"])) {
    $careersName = $_POST["name"];
    $careersDescription = $_POST["description"];
    $careersDate = $_POST["date"];

    $sql = "INSERT into careers (name_careers, description_careers, location_careers, date_careers) VALUES ('$careersName', '$careersDescription', 'surabaya', '$careersDate')";

    try {
        // mysqli_query($con, $sql);
        if ($con->query($sql) == true) {
            echo " added";
        } else {
            echo " Failed";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$con->close();
