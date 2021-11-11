<?php 
session_start();
include('js/#svt.php'); 
?>
<!DOCTYPE html>
<html lang="en" style="display:<?php  echo $option ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="This is s Church Management Sytem built by Richard Korankye">
    <meta name="author" content="Series Korankye">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>CMS</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="cmsImg/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Kora</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="cmsImg/fevicon.png" alt="alternative"></a> 

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="article.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="faqs.php">FAQS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Terms</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          
                            <a class="dropdown-item page-scroll" href="terms.php">Terms Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.php">Privacy Policy</a>
                        </div>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm page-scroll" href="Register.php">Join Church</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h1 class="h1-large">Join Church Here</h1>
                        <p class="p-large">Performing all your duties as a Church Member manually is sometimes horribles. <br>So, CMS is now the room for all you church duties like Payment of tithes and Offerings, Sending Prayer Requests, Viewing upcoming Events and more...</p>
                        <a class="btn-solid-lg" href="Register.php">Sign up for free</a>
                        <a class="btn-outline-lg page-scroll" href="Login.php">Login in Here</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="cmsImg/born.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


  
   
    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
          <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Contact Us</h2>
                    <p class="p-heading">You can contact our online support team for assistance and enquiries.<br>We will be happy to assist you.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
           <form class="form-group" id="booking_form" action="includes/contact.php" method="POST" enctype = "multipart/form-data" style="background-color: #FAFAFA; box-shadow: 0 20px 50px 0 rgba(0,0,0,0.3); margin: 10px; border-radius: 10px; padding: 10px; color:#0d0d0d;">
            

                      <div class="form-group">
                            <label for="fullname">Your Name</label>
                            <input type="email" id="a-clientele" name="user_name" class="form-control" autofocus required placeholder="enter email here...">
                        </div>

                         <div class="form-group">
                            <label for="fullname">Your Number</label>
                            <input type="Number" id="a-clientele" name="user_numb" class="form-control" autofocus required placeholder="enter email here...">
                        </div>

                        <div class="form-group">
                            <label for="fullname">Request Title</label>
                            <input type="text" id="a-clientele" name="request_title" class="form-control" autofocus required placeholder="enter title here...">
                        </div>


                        <div class="form-group">
                            <label for="houseaddress">Main Message</label>
                            <textarea type="text" id="a-venue" class="form-control" rows="9" name="description" class="form-control" required placeholder="enter Message here..."></textarea>
                        </div>

                       

                        <div class="form-group my-3">
                            <button class="btn btn-dark btn_next" style="background-color: #0d0d0d; margin-left: 20%; width: 40%; color:#FAFAFA;" type="submit" id="a-btn_book" method="post"> Submit </button>
                        </div>

                    </form>
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->




    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About CMS</h6>
                        <p class="p-small">CMS is an Online church Management system that helps both Church Management and their Members run the church online. We provide all services the church can operate with and that of the Members.We provide Payement Sessions, Checking and Marking of Attendance, Publishing and Viewing upcoming events and many more...<br>#IT'S FREE</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Contact Details</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="terms.html">Call/WhatsApp: +233(0)59 538 5778</a>
                            <li><a href="#">kingdomdynasty19@gmail.com</a>
                            <li><a class="page-scroll" href="#header">Kingdom Dynasty Limited, Lucy Memorial Hospital Ofankor Barrier, Accra Ghana</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p>We would love to hear from you always ,So follow us and let's catch up.</p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small"><strong>Copyright &copy; 2014-<?php echo date('Y') ?> <a href="https://askmeghana.com">Kintech</a>.</strong>
    All rights reserved.</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>