<?php
$contact_name = filter_input(INPUT_POST, 'contact_name');
$contact_email = filter_input(INPUT_POST, 'contact_email');
if (!empty($contact_name)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test";

    //create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO contact(name, email) values ('$contact_name', '$contact_email')";
        if ($conn->query($sql)) {
            echo "new record succesfull";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
} else {
    echo "please fill in all the blank";
    die();
}
