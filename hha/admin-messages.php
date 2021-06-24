<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-6" style="padding: 0px;">
            <h4 style="font-weight: 700; font-size: 20px">Messages</h4>
        </div>
        <div class="col-sm-6" style="padding: 0px;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="float: right">Delete All</button>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: transparent;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="border-radius: 0px; border: none;">
                        <div class="modal-header" style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                            <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 700;">Delete all messages</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-shadow: none; background-color: transparent">
                                <i class='bx bxs-x-circle'></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span>Are you sure you want to <b>delete all messages?</b></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-cancel btn-block" data-dismiss="modal">Cancel</button>
                            <!-- <button type="submit" name="submit" class="btn-submit btn-block">Delete</button> -->
                            <button type="submit" name="submit" id="btn-del" class="btn-block btn-submit">Delete</button>
                            <script>
                                $(function() {
                                    $("#btn-del").on("click", function(e) {
                                        e.preventDefault();
                                        $.ajax({
                                            url: "delete_messages.php",
                                            success: function() {
                                                alert("messages deleted");
                                            },
                                            error: function() {
                                                alert("delete failed");
                                            }
                                        })
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 logo-border" style="padding: 0px; margin-top: 40px"></div>
    </div>
    <div class="row" id="messages-data">
        <div class="col-sm-12">
            <script>
                $("#messages-data").load("load_messages.php");
                // setInterval(function() {
                //     $("#messages-data").load("load_messages.php");
                // }, 1000);
            </script>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#messages-data").on("click", "#card-details", function(e) {
            var messagesId = $(this).data("id");
            e.preventDefault();
            $.ajax({
                url: "details_messages.php",
                method: "POST",
                data: {
                    id: messagesId
                },
                success: function(data) {
                    console.log("load success");
                    // console.log(' . $row['
                    //     id '] . ');
                    data_json = JSON.parse(data);
                    console.log(data_json["nama"]);
                    $("#name").html(data_json["nama"]);
                    // $("#email-modal").html(data_json["email"]);
                    $("#email-modal").html("[".concat(data_json["email"], "]"));
                    $("#subject").html(data_json["subject"]);
                    $("#messages-modal").html(data_json["messages"]);
                    $("#date-modal").html(data_json["date"]);
                    $("#modal-details").modal("show");
                },
                error: function() {
                    alert("load failed");
                }
            })
        })
    })
</script>