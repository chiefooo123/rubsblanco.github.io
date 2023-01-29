<?php 
session_start();

   include("connection.php");
   include("functions.php");
   include("function.php");

   $user_data = check_login($con);
?>
<!DOCTYPE php>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <div class="costum_header">
               <div class="logo">
               <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
            </div>
               <div class="contact_menu">
                  <ul>
                     <li><img src="images/call-icon.png" class="padding_right_10"><a href="#">Call: (+63) 9132456789</a></li>
                     <li><img src="images/mail-icon.png" class="padding_right_10"><a href="#">Email: demo@cvsu.edu.ph</a></li>
                     <li><img src="images/map-icon.png" class="padding_right_10"><a href="#">Location: CvSU-CCAT</a></li>
                  </ul>
               </div>
               <div class="menu_text">
                  <div id="myNav" class="overlay">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <div class="overlay-content">
                        <p style="color: white;">Hello, <span style="color: #cccccc;"><?php echo $user_data['user_name']; ?></span>!</p>
                        <a href="index.php">Home</a>
                        <a href="services.php">Assemble a PC</a>
                        <a href="providing.php">Reformat / Install OS / Reset</a>
                        <a href="choose.php">Troubleshooting</a>
                        <a href="contact.php">Contact Us</a>
                        <a href="forum.php">Forum</a>
                        <a href="logout.php" style="margin-top:10%">Logout</a>
                     </div>
                  </div>
                  <a href="index.php"><img src="images/logo.png"></a>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital">
                              <h1 class="banner_taital">Learn how to assemble a computer</h1>
                           </div>
                           <div class="btn_main">
                              <div class="quote_bt active"><a href="services.php">See more</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div><img src="images/banner-img1.png" class="banner_img"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital">
                              <h1 class="banner_taital">Reformat/ Reset a Computer</h1>
                           </div>
                           <div class="btn_main">
                              <div class="quote_bt active"><a href="providing.php">See more</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div><img src="images/banner-img2.png" class="banner_img"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital">
                              <h1 class="banner_taital" style="font-size: 65px">Basic Troubleshooting</h1>
                           </div>
                           <div class="btn_main">
                              <div class="quote_bt active"><a href="choose.php">See more</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div><img src="images/banner-img3.png" class="banner_img"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right" aria-hidden="true"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            
         </div>
      </div>
      <div class="footer_section layout_padding margin_top_90">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Contact Us</h2>
                  <div class="location_text"><img src="images/map-icon1.png"><a href="#"><span class="padding_left_15">Location: CvSU-CCAT</span></a></div>
                  <div class="location_text"><img src="images/call-icon1.png"><a href="#"><span class="padding_left_15">(+63) 9132456789</span></a></div>
                  <div class="location_text"><img src="images/mail-icon1.png"><a href="#"><span class="padding_left_15">demo@cvsu.edu.ph</span></a></div>
               </div>
            </div>
            <div class="social_icon">
               <div id="social">
                  <a class="facebookBtn smGlobalBtn" href="#"></a>
                  <a class="twitterBtn smGlobalBtn" href="#"></a>
                  <a class="instagramBtn smGlobalBtn" href="#"></a>
                  <a class="linkedinBtn smGlobalBtn" href="#"></a>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2022 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "25%";
         }
         
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>
   </body>
</html>