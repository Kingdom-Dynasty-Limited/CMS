<?php 

include('includes/RegisterUsers.php');
             
?>

<!DOCTYPE html>
<html lang="en" style="background-color: #FAFAFA">

<head>
  <title>Church Management System</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Church Management System" />
     <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager,Chat, Dialy Devotions" />
     <meta name="author" content="Series Korankye" />
  <!-- favicon -->
    <link rel="icon" href="cmsImg/fevicon.png">
    <link rel="stylesheet" href="cmsCss/index.css"/>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"/>
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
    
    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css"/>
    <!-- timepicker -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <style>
    .b-dark{background-color: #FAFAFA;}
    .nav-link{color:#383c49}
    .nav-link:hover{color:#000}
    .nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#383c49}
    .footer{margin-bottom:10px;background-color:#010101;border-radius: 10px;}
    .img{width: 200px;height: 200px;}
    .details_container{display: grid;grid-template-columns: auto auto; color: #FAFAFA;}
  </style>
</head>

<!-- main page-->
<body class="b-dark">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xs-5 col-md-7 mt-4 mb-4 px-2 pt-3 bg-light">

             

                <div class="p-3 form-group">

             <!-- begining of form-->
                    <form class="form-group" id="booking_form" action="" method= "POST" enctype = "multipart/form-data" style=" margin-top:-10%; background-color: #FAFAFA; box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3); margin: 10px; border-radius: 10px; padding: 10px; color:#0d0d0d;">
                   <h6 class="display-6 text-center">Register Here</h6>

                       <div class="form-group">
                            <label for="fullname">Enter Church ID</label>
                            <input type="text" id="a-clientele" name="chID" class="form-control" autofocus required>
                        </div>
                            
                        <div class="form-group">
                            <label for="fullname">Enter First Name</label>
                            <input type="text" id="a-clientele" name="fusername" class="form-control"  required>
                        </div>

                        <div class="form-group">
                            <label for="fullname">Enter Last Name</label>
                            <input type="text" id="a-clientele" name="lusername" class="form-control"  required>
                        </div>

                        <div class="form-group">
                            <label for="fullname">Date of Birth</label>
                            <input type="date" id="a-clientele" name="dateofB" class="form-control"  required>
                        </div>

                        <div class="form-group">
                            <label for="event_type">Please select Gender</label>
                            <select class="form-control" id="a-event_type" name="gender" required>
                                <option value="0">Choose</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fullname">Occupation</label>
                            <input type="text" id="a-clientele" name="occupation" class="form-control"  required>
                        </div>

                        <div class="form-group">
                            <label for="fullname">Contact Numb:</label>
                            <input type="number" id="a-clientele" name="contactN" class="form-control"  required>
                        </div>

                           <p class="text-center" style="margin-top: 5px;"> Next of Kin Details</p>

                        <div class="form-group">
                            <label for="fullname">Next of Kin Name</label>
                            <input type="text" id="a-clientele" name="NKname" class="form-control"  required>
                        </div>

                        <div class="form-group">
                            <label for="fullname">Next of Kin Contact</label>
                            <input type="number" id="a-clientele" name="NKcontact" class="form-control"  required>
                        </div>

                         <div class="form-group">
                            <label for="fullname">Next of Kin Address</label>
                            <input type="text" id="a-clientele" name="NKaddress" class="form-control"  required>
                        </div>

                        <p class="text-center" style="margin-top: 5px;">Parents Info</p>

                        <div class="form-group">
                            <label for="fullname">Father's name</label>
                            <input type="text" id="a-clientele" name="FatherName" class="form-control"  required>
                        </div>

                        <div class="form-group">
                            <label for="fullname">Mother's name</label>
                            <input type="text" id="a-clientele" name="MotherName" class="form-control"  required>
                        </div>

                           <p class="text-center" style="margin-top: 5px;">Login Details</p>

                        <div class="form-group">
                            <label for="houseaddress">Email Address</label>
                            <input type="Email" id="a-venue" name="e_mail" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="phonenumber">Password</label>
                            <input type="Password" id="a-phone_number" name="pass" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="emailaddress">Confirm Password</label>
                            <input type="Password" id="a-e_address" name="c_pass" class="form-control" required>
                        </div>

                        <div class="form-group my-3">
                            <button class="btn btn-dark btn_next" type="submit" id="a-btn_book" name="register_member"> Register </button>
                        </div>

                                                
                            <div class="form-group my-3">
                           <h6 style="color: #0d0d0d">Already have Account ?? <a href ="Login.php">Login here</a></h6>
                           </div>
                       

                    </form>
                    <!-- form has ended-->

                </div>

                <hr>

             

            </div>

        </div>

    </div>

    <!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script>
<!-- timepicker -->
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<!-- javascript script -->
<script src="js_script.js"></script>

</body>

</html>