<?php 
session_start();

   include("connection.php");
   include("functions.php");

   $user_data = check_login($con);

?>
<!DOCTYPE html>
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
      <title>Troubleshoot</title>
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
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Basic <span style="color: #0c426e">Troubleshooting</span></h1>
            <div class="choose_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">1</h4>
                           <h4 class="trusted_text">Quantify asset performance and understand how to use the results</h4>
                        </div>
                        <p class="dummy_text">Exceptional troubleshooting isn’t just about knowing the normal sounds, speeds, or odours of a particular machine. Instead, it’s about knowing how to analyze asset performance at a deeper level, which is where advanced reporting factors in.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">2</h4>
                           <h4 class="trusted_text">Create in-depth asset histories</h4>
                        </div>
                        <p class="dummy_text">A detailed asset history can give you an edge in maintenance troubleshooting in a variety of ways. It offers a simple method for cross-referencing symptoms of the current issue with elements of past problems.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">3</h4>
                           <h4 class="trusted_text">Use root cause analysis and failure codes</h4>
                        </div>
                        <p class="dummy_text">Effective maintenance troubleshooting starts with eliminating ambiguity and short-term solutions. Finding the root of an issue quickly, solving it effectively and ensuring it stays solved is a winning formula. Root cause analysis and failure codes are a couple of tools that will help you achieve this goal. </p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">4</h4>
                           <h4 class="trusted_text">Build detailed task lists</h4>
                        </div>
                        <p class="dummy_text">Exceptional maintenance troubleshooting requires solid planning and foresight. Clear processes provide a blueprint for technicians so they can quickly identify problems and implement more effective solutions. Creating detailed task lists is one way to bolster your planning and avoid headaches down the road. This could also be incorporated into routine maintenance.</p>
                     </div>
                    </div>
                     <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">5</h4>
                           <h4 class="trusted_text">Make additional information accessible</h4>
                        </div>
                        <p class="dummy_text">If that information is difficult to access, you will lose any advantage it provides. That is why it is crucial for your operation to not only create a large resource center, but to also make it highly accessible. This will elevate your maintenance troubleshooting abilities and get your assets back online faster when unplanned downtime occurs.</p>
                     </div>
                  </div>
                   <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">6</h4>
                           <h4 class="trusted_text">Using CMMS software for maintenance troubleshooting</h4>
                        </div>
                        <p class="dummy_text">If it sounds like a lot of work to gather, organize, analyze and circulate all the information needed to be successful at maintenance troubleshooting, you’re not wrong. Without the proper tools, this process can be a heavy lift for overwhelmed maintenance teams.</p>
                     </div>
                  </div><!--end col md 4-->
            </div>
         </div>
      </div>
      <!-- choose section end -->
      <!-- footer section start -->
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