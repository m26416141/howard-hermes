<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../public/css/admin.css" />
<div class="row" style="margin-bottom: 20px;">
    <div class="col-sm-12" style="padding: 0px; margin-bottom: 20px">
        <h4 style="font-weight: 700; font-size: 40px">Careers</h4>
    </div>
    <!-- <div class="col-sm-12 logo-border" style="padding: 0px; margin-top: 40px"></div> -->
</div>
<div class="row">
    <div class="col-sm-12" style="padding: 0px;">
        <div id="accordion">
            <script>
                $("#accordion").load("load_careers.php");
                // setInterval(function() {
                //     $("#messages-data").load("load_messages.php");
                // }, 1000);
            </script>
        </div>
    </div>
</div>
<div class="fab-add" id="fab">
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
<div> <?php include('add_careers.php'); ?> </div>