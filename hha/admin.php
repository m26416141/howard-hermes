<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin - Howard Hermes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../public/css/admin.css" />
</head>

<body style="height: 100%;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <div class="container-fluid" style="height: 100%;">
        <div class="row" style="height: 100%;">
            <div class="w-25 sidebar" id="sidebar" style="max-height: 100%;">
                <div class="row logo-content">
                    <div class="col-sm-10 logo">
                        <p class="logo-name" style="font-weight: 700;">Howard Hermes</p>
                    </div>
                    <div class="col-sm-2">
                        <i class='bx bx-menu'></i>
                    </div>
                </div>
                <div class="logo-border" style="margin-top: 20px;"></div>
                <ul class="list-group">
                    <li class="list-group-item" id="messages" style="background-image: linear-gradient(145deg, #380139 90%, #b17abd);">
                        <a id="text-messages" href="#" data-target="admin-messages" onclick="loadMessages()" style="color: white;">
                            <!-- <box-icon name='chat' type='solid'></box-icon> -->
                            <i class='bx bxs-message-error'></i>
                            <span class="links-name">Messages</span>
                        </a>
                    </li>
                    <li class="list-group-item" id="careers">
                        <a id="text-careers" href="#" data-target="admin-careers" onclick="loadCareers()">
                            <!-- <box-icon type='solid' name='group'></box-icon> -->
                            <i class='bx bxs-group'></i>
                            <span class="links-name">Careers</span>
                        </a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-sm-12 hh-copyright">
                        <p style="font-size: 10px; text-align: center;"><b>&#169; 2021</b> Howard Hermes Consulting</p>
                    </div>
                </div>
            </div>
            <div class="col-sm content" id="content" style="width: calc(70% - 200px);">
                <?php include('admin-messages.php'); ?>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-details-content" style="border-radius: 0px; border: none;">
                <div class="modal-header" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom: 2px solid #f4f4f4;">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 20px;">
                            <h5 class="modal-title" id="subject" style="font-weight: 700;">Modal title</h5>
                        </div>
                        <!-- <div class="col-sm-6" style="float: right;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-shadow: none; background-color: transparent; float: right;">
                                <i class='bx bxs-x-circle'></i>
                            </button>
                        </div> -->
                        <div class="col-sm-9">
                            <div style="display: flex; flex-direction: row; align-items:center; width: max-content">
                                <p id="name" style="margin-bottom: 0px; font-weight: 700; font-size: 13px"></p>
                                <p id="email-modal" style="margin-bottom: 0px; font-size: 13px; margin-left: 10px">
                                </p>
                            </div>
                            <p id="date-modal" style="margin-bottom: 0px; margin-top: 20px; font-size: 13px"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="padding-top: 20px">
                    <div id="subject"></div>
                    <div id="messages-modal"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script> -->
    <script>
        function loadMessages() {
            document.getElementById("messages").style.backgroundImage = "linear-gradient(145deg, #380139 90%, #b17abd)";
            document.getElementById("text-messages").style.color = "white";
            document.getElementById("careers").style.backgroundImage = "linear-gradient(145deg, #f2f2f2 90%, #f2f2f2)";
            document.getElementById("text-careers").style.color = "black";
        }

        function loadCareers() {
            document.getElementById("careers").style.backgroundImage = "linear-gradient(145deg, #380139 90%, #b17abd)";
            document.getElementById("text-careers").style.color = "white";
            document.getElementById("messages").style.backgroundImage = "linear-gradient(145deg, #f2f2f2 90%, #f2f2f2)";
            document.getElementById("text-messages").style.color = "black";
        }
    </script>
    <script>
        $(document).ready(function() {
            var trigger = $('#sidebar ul li a'),
                container = $('#content');

            trigger.on('click', function() {
                var $this = $(this),
                    target = $(this).data('target');

                $("#content").load(target + '.php');

                return false;
            });
        });
    </script>
</body>

</html>