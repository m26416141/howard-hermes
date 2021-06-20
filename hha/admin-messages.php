<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Messages - Howard Hermes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/admin.css" />
    <!-- <link rel="stylesheet" href="/hha/" /> -->
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-sm-6" style="padding: 0px;">
                <h4 style="font-weight: 700; font-size: 20px">Messages</h4>
            </div>
            <div class="col-sm-6" style="padding: 0px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="float: right">Clear All</button>
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
                                <button type="submit" name="submit" id="btn-del" class="btn-block btn-submit">Submit</button>
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
                    // $("#messages-data").load("load_messages.php");
                    setInterval(function() {
                        $("#messages-data").load("load_messages.php");
                    }, 1000);
                </script>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
</body>

</html>