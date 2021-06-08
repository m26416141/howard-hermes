<?php
$con = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM contact ORDER BY id DESC";
$query_run = mysqli_query($con, $query);
$check_messages = mysqli_num_rows($query_run) > 0;

if ($check_messages) {
    while ($row = mysqli_fetch_array($query_run)) {
        // echo $row['name'];
?>
        <div class="col-sm-12" style="width: auto; padding: 0px; margin-bottom: 10px;">
            <div class="card" style="border-radius: 0px; border: 0px; border-bottom: 1px solid #dddddd; padding-bottom: 10px">
                <div class="card-body" style="padding: 0px;">
                    <div class="row messages-card">
                        <div class="col-sm" style="max-width: 40% !important;">
                            <p style="display: inline-block; color: #793775; margin-right: 10px; margin-bottom: 0px">From:</p>
                            <p class="card-title" style="display: inline-block; font-weight: 700; margin-bottom: 0px">
                                <?php echo $row['name']; ?>
                            </p>
                        </div>
                        <div class="col-sm">
                            <p class="card-text" style="display: inline-block; margin-bottom: 0px; font-weight: 700">
                                <?php echo $row['subject'] ?>
                            </p> -
                            <p class="card-text" style="display: inline-block; margin-bottom: 0px;">
                                <?php echo $row['subject'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "no messages found";
}
?>