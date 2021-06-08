<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
$con = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM contact ORDER BY id DESC";
$query_run = mysqli_query($con, $query);
$check_messages = mysqli_num_rows($query_run) > 0;

if ($check_messages) {
    while ($row = mysqli_fetch_array($query_run)) {
        // echo $row['name'];
?>
        <div class="col-sm-12" style="width: 100%; padding: 0px; margin-bottom: 10px;">
            <div class="card" style="border-radius: 0px; border: 0px; border-bottom: 1px solid #dddddd; padding-bottom: 10px">
                <div class="card-body" style="padding: 0px;">
                    <div class="row messages-card" style="padding: 0px; margin: 0px">
                        <div class="col-sm-6" style="padding: 0px;">
                            <p class="card-title" style="display: inline-block; font-weight: 700; margin-bottom: 0px; color: #793775;">
                                <?php echo $row['name']; ?>
                            </p>
                        </div>
                        <div class="col-sm-6" style="padding: 0px;">
                            <p class="card-text d-inline-block text-truncate" style="display: inline-block; margin-bottom: 0px; width: calc(100% - 10px);">
                                <?php
                                $value = $row['subject'];
                                $text_bold = str_replace($row['subject'], "<b>$value</b>", $row['subject']);
                                $mssg_concat = $text_bold . " - " . $row['subject'];
                                // $mssg = substr($mssg_concat, 0, 70);
                                echo $mssg_concat;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "No messages found";
}
?>

<!-- <p class="card-text" style="display: inline-block; margin-bottom: 0px; font-weight: 700">
<?php
$sbjct = substr($row['subject'], 0, 20);
echo "$sbjct..";
?>
</p> -
<p class="card-text" style="display: inline-block; margin-bottom: 0px;">
    <?php
    $mssg = substr($row['subject'], 0, 20);
    echo "$mssg..";
    ?>
</p> -->