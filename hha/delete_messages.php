<?php
$con = mysqli_connect("localhost", "root", "", "test");
$query = "TRUNCATE TABLE contact";
$truncateTable = mysqli_query($con, $query);
if ($truncateTable != false) {
    echo ("all rows deleted");
} else {
    echo ("delete failed");
}
