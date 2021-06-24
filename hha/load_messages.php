<?php
$con = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM contact ORDER BY id DESC";
$query_run = mysqli_query($con, $query);
$check_messages = mysqli_num_rows($query_run) > 0;

if ($check_messages) {
    while ($row = mysqli_fetch_array($query_run)) {
        $value = $row['subject'];
        $text_bold = str_replace($row['subject'], "<b>$value</b>", $row['subject']);
        $mssg_concat = $text_bold . " - " . $row['messages'];
        // echo ($row['subject']);
        echo '
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <div class="col-sm-12" style="width: 100%; padding: 0px; margin-bottom: 10px; cursor: pointer;">
            <div class="card" id="card-details" data-id=' . $row['id'] . ' style="border-radius: 0px; border: 0px; border-bottom: 1px solid #dddddd; padding-bottom: 10px">
                <div class="card-body" style="padding: 0px;">
                    <div class="row messages-card" style="padding: 0px; margin: 0px">
                        <div class="col-sm-3" style="padding: 0px;">
                            <p class="card-text" style="display: inline-block; font-weight: 700; margin-bottom: 0px; color: #793775;">
                                ' . $row['name'] . '
                            </p>
                        </div>
                        <div class="col-sm-6" style="padding: 0px;">
                            <p class="card-text d-inline-block text-truncate" style="display: inline-block; margin-bottom: 0px; width: calc(100% - 10px);">
                                ' . $mssg_concat . '
                            </p>
                        </div>
                        <div class="col-sm-3" style="padding: 0px;">
                            <p class="card-text d-inline-block text-truncate" style="display: inline-block; font-weight: 700; margin-bottom: 0px; color: #793775; width: calc(100% - 10px); text-align: right;">
                                ' . $row['mssg_date'] . '
                            </p>
                        </div>
                        <!-- <div class="col-sm-4">
                            <button type="submit" name="submit" id="btn-details" class="btn-block btn-details" data-id=' . $row['id'] . '>Details &rarr;</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        ';
    }
} else {
    echo "No messages found";
}
