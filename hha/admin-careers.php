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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-sm-12" style="padding: 0px;">
                <h4 style="font-weight: 700; font-size: 20px">Careers</h4>
            </div>
            <div class="col-sm-12 logo-border" style="padding: 0px; margin-top: 40px"></div>
        </div>
        <div class="row" style="padding: 0px; margin: 40px 0px 70px;">
            <div class="col-sm-4" style="max-width: 400px; padding: 0px;">
                <div class="card">
                    <div class="card-body">
                        <div class="card-media">
                            <img src="../assets/img/M-35.jpg" alt="" style="width: 100%; object-fit: cover; margin-bottom: 20px">
                        </div>
                        <h4 class="card-title services-card-title" style=" font-weight: 700; margin-bottom: 40px;">Associate Intern</h4>
                        <div class="card-desc d-inline-block text-truncate" style="margin-bottom: 40px; width: calc(100% - 10px);">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut odio temporibus voluptas error distinctio hic quae corrupti vero doloribus optio! Inventore ex quaerat modi blanditiis soluta maiores illum, ab velit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut odio temporibus voluptas error distinctio hic quae corrupti vero doloribus optio! Inventore ex quaerat modi blanditiis soluta maiores illum, ab velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div style="margin-bottom: 70px;">
                            <a class="about-us-link" href="#">Apply for this job &rarr;</a>
                        </div>
                        <div class="row" style="position: absolute; bottom: 0; width: 100%; margin-bottom: 10px;">
                            <div class="col-sm-6">
                                <img src="../assets/img/location.png" height="20px" alt="">
                                <p style="display: inline-block; margin-left: 7px;">Surabaya</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="../assets/img/clock-simple.png" height="20px" alt="">
                                <p style="display: inline-block; margin-left: 7px;">14-04-45</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fab-add" id="fab">
            <!-- <span>+</span> -->
            <!-- <img src=" ../assets/img/instagram.png" alt="" style="height: 20px; filter: invert(100%); display: block; margin-left: auto; margin-right: auto" /> -->
            <i class='bx bx-plus' style="font-size: 40px; display: block; margin-left: auto; margin-right: auto; color: #793775; cursor: pointer;"></i>
            <!-- <a href="#" onclick="toogleAddCareers()">hai</a> -->
            <script>
                document.getElementById("fab").addEventListener("click", function() {
                    console.log("button clicked");
                    var rotated = false;
                    var action = document.querySelector('.row-form-add');
                    action.classList.toggle('fab-active');
                    var action_fab = document.querySelector('.fab-add');
                    action_fab.classList.toggle('fab2-active');
                });
            </script>
        </div>
        <div class="row-form-add row">
            <div class="col-sm-12">
                <div class="form-add-careers">
                    <h4 style="font-family: 'Noto Sans'; font-weight: 700; margin-bottom: 30px">Add Careers</h4>
                    <form method="POST" id="form-careers">
                        <label for="inputName">Name</label>
                        <input class="form-input" type="text" name="name" id="inputName" placeholder="Career name...">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-text-area form-control" name="description" id="inputDescription" rows="3" style="outline: none;" placeholder="Career description..."></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <!-- <input class="form-input" type="text" name="subject" id="inputSubject" placeholder="Your subject"> -->
                                <label for="inputState">Place</label>
                                <select class="custom-select my-1 mr-sm-2 form-place" id="inputPlace" style="margin-top: 0px !important; margin-bottom: 0px !important; height: auto; padding-bottom: 12px;">
                                    <option selected>Choose...</option>
                                    <option value="1">Surabaya</option>
                                    <option value="2">Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="inputSubject">Date ended</label>
                                <input class="form-input" type="date" name="date" id="inputDate" style="padding-bottom: 10px;">
                            </div>
                        </div>
                        <!-- <input type="submit" name="submit"> -->
                        <button type="submit" name="submit" class="btn-block button-submit" id="btnSubmit">Submit</button>
                        <script>
                            $(function() {
                                $("#form-careers").submit(function(e) {
                                    // console.log("button pressed");
                                    e.preventDefault();
                                    $.ajax({
                                        url: 'add_careers.php',
                                        method: 'POST',
                                        data: $('form').serialize(),
                                        success: function() {
                                            alert("form submitted");
                                        },
                                        error: function() {
                                            alert("error add");
                                        }
                                    });
                                });
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div> <?php include('add_careers.php'); ?> </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>