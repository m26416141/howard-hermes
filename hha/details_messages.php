<?php
$con = mysqli_connect("localhost", "root", "", "test");
$message_id = $_POST["id"];
$query = "SELECT * FROM contact where id = '" . $message_id . "'";
$query_run = mysqli_query($con, $query);
if ($query_run) {
    while ($row = mysqli_fetch_row($query_run)) {
        $return = [
            "nama" => $row[1],
            "subject" => $row[3]
        ];
        echo json_encode($return);
    }
} else {
    echo "loading failed";
}
