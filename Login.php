<?php 
include('includes/LoginUsers.php');     
?>
<!DOCTYPE html>
<html lang="en">

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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"/>
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
   
    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css"/>
    <!-- timepicker -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<?php 
 //  $sql = "UPDATE users SET session ='LogOut' WHERE id=1";

 //        if (mysqli_query($conn, $sql)) {
          
 //        } else {
 //           header("Location: Login.php");
 //        }
 // mysqli_close($conn);


?>
    <style>
    
    .nav-link{color:#383c49}
    .nav-link:hover{color:#000}
    .nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#383c49}
    .footer{margin-bottom:10px;background-color:#010101;border-radius: 10px;}
    .img{width: 200px;height: 200px;}
    .details_container{display: grid;grid-template-columns: auto auto; color: #FAFAFA;}

/* BASIC */

html {
  background-color: #56baed;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=email],input[type=password] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;

  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=email]:focus, input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=email]:placeholder, input[type=password]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}

  </style>
</head>

<!-- main page-->
<body class="b-dark">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="cmsImg/born.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form class="form-group" id="booking_form" action="" method= "post">
      <input type="email" id="login" class="fadeIn second" name="L_e_mail" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="L_pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="login_btn">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
       <h6 style="color: #0d0d0d">Do not have Account ?? <a href ="Register.php">Register here</a></h6>
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