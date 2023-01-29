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
      <title>Assemble Computer</title>
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
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Step-by-Step on assembling a Computer</span></h1>
            <div class="services_section_2 layout_padding">
               <h2>Step 1: Gather What You Need to Build a PC</h2>
               <div><img src="images/s1.png" width="500" height="500"></div>
               <p>Required Parts/Accessories, Screwdriver/s, Suitable Surface, Equipments</p><br>
               <h2>Step 2: Open Case and Prepare for Installation</h2>
               <div><img src="images/s2.png" width="500" height="500"></div>
               <p>Go ahead and remove both side panels, or the main side panel at least (usually the left side of the case). Many modern cases use thumbscrews to hold the side panels in place, meaning you can just use your hands to undo them, but sometimes you'll still need to use a screwdriver to initially loosen them up enough to the point where you can then use your hands.</p>
                <h2>Step 3:  Mount Additional Case Fans </h2>
               <div><img src="images/s3.png" width="500" height="500"></div>
               <p>The majority of cases will come with 1-2 fans already pre-installed inside, so there's nothing to do for these stock-standard fans besides plug them into the motherboard when the time comes.</p><br>
               <h2>Step 4:  Prepare Motherboard for Out-of-Case Installation </h2>
               <div><img src="images/s4.png" width="500" height="500"></div>
               <p>Now we've prepared the case, there are two different approaches you can take from here when learning how to build a PC from scratch for the first time. You can either plug PC parts outside case or inside the case.</p><br>
               <h2>Step 5:  Insert Processor Onto Motherboard</h2>
               <div><img src="images/s5.png" width="500" height="500"></div>
               <p>It's time to install the new brains of your battlestation onto your motherboard, which deserves its own separate page to explain all the steps as well as answers to common questions about CPU installs.</p><br>
               <h2>Step 6: Mount Heatsink and Fan On Motherboard</h2>
               <div><img src="images/s6.png" width="500" height="500"></div>
               <p>Now it's time to attach the CPU cooler (technically called a HSF: Heatsink and Fan) which will sit on top of your CPU to keep it cool.</p><br>
               <h2>Step 7:  Insert Processor Onto Motherboard</h2>
               <div><img src="images/s7.png" width="500" height="500"></div>
               <p>Fitting your memory modules is one of the easiest, quickest parts to install when assembling a computer, but there are some things to know including which specific memory slots on the motherboard to install them in (technically called DIMM slots, short for Dual In-Line Memory Module).</p><br>
               <h2>Step 8:  Insert M.2 SSD Onto Motherboard (Optional)</h2>
               <div><img src="images/s8.png" width="500" height="500"></div>
               <p>If you have an M.2 SSD to install, you'll also want to do that now (or even before the CPU if you want) while your motherboard is chilling outside the case because as mentioned you have all the space in the world to easily work within your motherboard.</p><br>
               <h2>Step 9:  Quickly Test Core Components (Optional)</h2>
               <div><img src="images/s9.png" width="500" height="500"></div>
               <p>This is another technically optional step when learning how to build a PC from scratch, but it is considered good practice and can be worth it in the event you get unlucky and end up having a component that's faulty or DOA (Dead on Arrival).</p><br>
               <h2>Step 10:   Mount Motherboard Into Case</h2>
               <div><img src="images/s10.png" width="500" height="500"></div>
               <p>This first requires you to fit the motherboard backplate and install the case standoffs (screws that create a gap between the case and motherboard). Then it's a matter of carefully lowering the board in to first match up with the backplate, and then onto the standoffs. Lastly, you screw in the board to secure it.</p><br>
               <h2>Step 11:  Mount GPU and Other PCIe Cards(Optional)</h2>
               <div><img src="images/s11.png" width="500" height="500"></div>
               <p>Technically speaking, this is yet another optional step when learning how to build a PC as some of you are going to be building an APU gaming PC without a graphics card (in other words, using the CPU's integrated graphics.</p><br>
               <h2>Step 12:  Mount SSD/HDD In Case (Optional)</h2>
               <div><img src="images/s12.png" width="500" height="500"></div>
               <p>Earlier we went over installing M.2 SSDs that live snugly on your motherboard, but for all other regular-sized SSDs and HDDs (2.5 and 3.5 inches respectively) you'll need to fit them within your case somewhere. Exactly where they go will depend on your specific case, but they'll typically be slotted into a drive bay.</p><br>
               <h2>Step 13:  Mount Optical Drive in Case (Optional)</h2>
               <div><img src="images/s13.png" width="500" height="500"></div>
               <p>Once an essential part of assembling a computer, optical drives (DVD, CD, and/or Blu-ray drives) are becoming increasingly less important and less used as the digital age continues and physical media dies its inevitable slow death.</p><br>
               <h2>Step 14:  Connect Case Front-Panel Cables</h2>
               <div><img src="images/s14.png" width="500" height="500"></div>
               <p>Your case has a range of features on the front such as USB ports, power on button, reset button, headphone jack, mic jack, etc.</p><br>
               <h2>Step 15:  Mount Power Supply In Case</h2>
               <div><img src="images/s15.png" width="500" height="500"></div>
               <p>Physically fitting the PSU into your computer case is another quick and easy part of learning how to build a PC, but as with most PC assembly steps there's always a few little things to know and potential questions you might have as a first-timer. For example, you might wonder which way the power supply fan should face.</p><br>
               <h2>Step 16:  Connect Power Supply to Components</h2>
               <div><img src="images/s16.png" width="500" height="500"></div>
               <p>After you've physically mounted the PSU, all that's left is connecting the cables to various parts of your system and doing a little basic management of your cables to keep things nice and neat.</p><br>
               <h2>Step 17:   Last Checks and Booting Your PC</h2>
               <div><img src="images/s17.png" width="500" height="500"></div>
               <p>We're done covering all the physical installation steps of how to assemble a PC.</p><br>
               <h2>Step 18:   Setup BIOS, Install OS, Update Drivers</h2>
               <div><img src="images/s18.png" width="500" height="500"></div>
               <p>Once your new computer is finally fully operational, there's still a few more things to do including entering the BIOS and checking/changing a couple things, and installing software like your operating system and other programs.<br><br> <a href="providing.php">Click here</a> to learn how to install an OS</p><br>
            </div>
         </div>
      </div>
      <!-- services section end -->
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