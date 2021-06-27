<?php
$con = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM careers ORDER BY id_careers DESC";
$query_run = mysqli_query($con, $query);
$check_careers = mysqli_num_rows($query_run) > 0;

if ($check_careers) {
    while ($row = mysqli_fetch_array($query_run)) {
        echo '
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ' . $row['name_careers'] . '
            </button>
            </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            ' . $row['description_careers'] . '
            </div>
        </div>
        ';
    }
}
