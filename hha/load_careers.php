<?php
$con = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM careers ORDER BY id_careers DESC";
$query_run = mysqli_query($con, $query);
$check_careers = mysqli_num_rows($query_run) > 0;

if ($check_careers) {
    while ($row = mysqli_fetch_array($query_run)) {
        echo '
        <div class="card-header card-careers-header" id="heading' . $row['id_careers'] . '">
            <h5 class="mb-0">
            <div class="row" style="padding: 5px 0px">
                <div class="col-sm-6 collapsed" data-toggle="collapse" data-target="#collapse' . $row['id_careers'] . '" aria-expanded="false" aria-controls="collapse' . $row['id_careers'] . '">
                    <div style="padding: 5px 0px; display: inline-flex">
                        <p class="card-careers-title" style="color: black;">' . $row['name_careers'] . '</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div style="display: inline-block; float: right">
                        <button class="btn btn-careers-edit"><i class="bx bxs-edit-alt"></i></button>
                        <button class="btn btn-careers-delete"><i class="bx bxs-trash-alt" style="color: red"></i></button>
                    </div>
                </div>
            </div>
            </h5>
        </div>
        <div id="collapse' . $row['id_careers'] . '" class="collapse card-careers-content" aria-labelledby="heading' . $row['id_careers'] . '" data-parent="#accordion">
            <div class="card-body" style="margin-bottom: 20px">
            ' . $row['description_careers'] . ' <br>
            ' . $row['location_careers'] . '
            </div>
        </div>
        ';
    }
}
