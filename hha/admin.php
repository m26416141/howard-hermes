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
                    <li class="list-group-item" id="messages">
                        <a id="text-messages" href="#" data-target="admin-messages" onclick="loadMessages()">
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
            </div>
            <div class="col-sm content" id="content">
            </div>
        </div>
    </div>
    <!-- <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function loadMessages() {
            document.getElementById("messages").style.backgroundColor = "#793775";
            document.getElementById("text-messages").style.color = "white";
            document.getElementById("careers").style.backgroundColor = "#f2f2f2";
            document.getElementById("text-careers").style.color = "black";
        }

        function loadCareers() {
            document.getElementById("careers").style.backgroundColor = "#793775";
            document.getElementById("text-careers").style.color = "white";
            document.getElementById("messages").style.backgroundColor = "#f2f2f2";
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
                console.log(target);

                // setInterval(function() {
                //     $("#content").load(target + '.php');
                // }, 1000);

                $("#content").load(target + '.php');

                return false;
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>