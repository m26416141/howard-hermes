<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Careers - Howard Hermes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../public/css/admin.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-sm-12" style="padding: 0px;">
                <h4 style="font-weight: 700; font-size: 20px">Careers</h4>
            </div>
            <div class="col-sm-12 logo-border" style="padding: 0px; margin-top: 40px"></div>
        </div>
        <div class="fab-add" id="fab" onclick="toogleAddCareers();">
            <!-- <span>+</span> -->
            <!-- <img src="../assets/img/instagram.png" alt="" style="height: 20px; filter: invert(100%); display: block; margin-left: auto; margin-right: auto" /> -->
            <i class='bx bx-plus' style="font-size: 40px; display: block; margin-left: auto; margin-right: auto; color: #793775;"></i>
            <!-- <a href="#" onclick="toogleAddCareers()">hai</a> -->
        </div>
        <div class="row-form-add row">
            <div class="col-sm-12">
                <div class="form-add-careers">
                    <h4 style="font-family: 'Noto Sans'; font-weight: 700; margin-bottom: 30px">Add Careers</h4>
                    <form method="POST">
                        <label for="inputName">Name</label>
                        <input class="form-input" type="text" name="name" id="inputName" placeholder="Career name">
                        <label for="inputEmail">Description</label>
                        <input class="form-input" type="text" name="email" id="inputEmail" placeholder="Career description">
                        <label for="inputSubject">Place</label>
                        <input class="form-input" type="text" name="subject" id="inputSubject" placeholder="Your subject">
                        <!-- <input type="submit" name="submit"> -->
                        <button type="submit" name="submit" class="btn-block button-submit" onclick="loadPage()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toogleAddCareers() {
            var rotated = false;
            var action = document.querySelector('.row-form-add');
            action.classList.toggle('fab-active');
            var action_fab = document.querySelector('.fab-add');
            action_fab.classList.toggle('fab2-active');
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>