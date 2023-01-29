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
      <title>Services</title>
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
            <h1 class="services_taital">Reformat / Install OS / Reset</span></h1>
            <div class="services_section_2 layout_padding">
               <h1>Reformat / Install an OS</h1>
               <h2>Step 1: Create a window installation media</h2>
               <div><img src="images/ps1.png" width="500" height="500"></div>
               <p>If you order any window whether it is window 10 or the latest one that’s window 11. You will receive a window installation disc along with your brand new PC. If you don’t receive a DVD disc of window installation, then still you can install an Operating system on your PC. Let’s look at deep, how to create window installation media.</p>
               <h3>Requirement:</h3>
               <ul>
                  <li>- Minimum 8 GB of Pen Drive.</li>
                  <li>- A computer with an internet connection.</li>
               </ul>
               <p>You need to download windows of your choice whether it’s 10 or 11. You can download it from the official website of Microsoft. After you have successfully downloaded the .exe file, Please follow the steps below:</p>
               <h3>Steps to create installation media</h2>
               <ul>
                  <li>- Plugin a flash drive</li>
                  <li>- Download a tool MediaCreationTool.exe</li>
                  <li>- Run it, and click on accept</li>
                  <li>- Select installation media ( DVD/ISO, USB Drive) from another PC and click next</li>
                  <li>- Select your language, windows edition and PC architecture and click NEXT</li>
                  <li>- Now, you need to select the USB Pen drive and click NEXT</li>
               </ul><br><br>


               <h2>Step 2: Backup your files (optional)</h2>
               <div><img src="images/ps2.png" width="500" height="500"></div>
               <p>It’s an optional step to do, like in case you are updating your current operating system to the latest. You are required to take back up. You can back up your files to Google Drive, DropBox, One Drive, USB Flash Drive and other external hard drives. Otherwise, You can leave it as it is.
               <br><br>For a new installation, you don’t need to do anything with this option.</p><br><br>


               <h2>Step 3: Insert Window installation media to Computer</h2>
               <div><img src="images/ps3.png" width="500" height="500"></div>
               <p>Now, It’s time to insert a media installation (USB or DVD) into your computer. Make sure all the windows files have been copied to your flash drive.</p><br><br>

               <h2>Step 4: Boot the computer</h2>
               <div><img src="images/ps4.png" width="500" height="500"></div>
               <p>As you are ready click on the windows icon and choose the option “Shut down or sign out” and then “Restart“. as your pc reboot, you need to press F10, F11, F12, or ESC in order to enter the boot menu. Note: These keys might be different in your computer because every computer is manufactured differently.</p><br><br>

               <h2>Step 5: Select the USB Drive</h2>
               <div><img src="images/ps5.png" width="500" height="500"></div>
               <p>Select BIOS Features option</p>
               <p>In Boot Options Priorities, Select the Boot Option #1. Click it and select the flash drive option, then select exit and save changes.</p><br><br>

               <h2>Step 6: Install Now</h2>
               <div><img src="images/ps6.png" width="500" height="500"></div>
               <p>After you select the right USB option for window installation. You will see a screen appearing “Install now”. Click on “Install now” and continue to the next step.</p><br><br>

               <h2>Step 7: Enter your windows product key and click next</h2>
               <div><img src="images/ps7.png" width="500" height="500"></div>
               <p>You must have the windows product key. But it’s okay if you don’t have one right now, you can skip this step while choosing the option “I don’t have a product key“. But, at the end of the installation, it will ask you for the product key. You can find your product key in your email if you have bought it from Microsoft officially. or if you have bought it in DVD format, You can find the key in its envelope. Well, if you don’t have bought it till now you need to buy it for a seamless experience.</p><br><br>

               <h2>Step 8: Select the edition of window you want to install</h2>
               <div><img src="images/ps8.png" width="500" height="500"></div>
               <p>Windows operating system comes in two-bit options 32-bit and 64-bit. x86 denotes 32-bit and x64 denotes 64-bit.</p>
               <h3>Difference between 32-bit and 64-bit</h3>
               <ul>
                  <li>- “The 32 bit OS can store and handle lesser data than the 64 bit OS. it addresses a maximum of 4,294,967,296 bytes (4 GB) of RAM. The 64 bit OS, on the other hand, can handle more data than the 32 bit OS.”</li>
                  <li>- x86 or 32-bit operating system supports only 32-bit software programme.</li>
                  <li>- x64 or 64-bit operating system supports both 32-bit and 64-bit software programme.</li>
               </ul><br><br>

               <h2>Step 9: Select the edition of window you want to install</h2>
               <div><img src="images/ps9.png" width="500" height="500"></div>
               <p>Before proceeding further, you are required to accept the license terms and then click next to continue the installation.</p><br><br>

               <h2>Step 10: Choose: Custom install window only or Upgrade:</h2>
               <div><img src="images/ps10.png" width="500" height="500"></div>
               <p>Upgrade: This option is useful if you are installing the latest OS to your existing supporting versions of the operating system.</p>
               <p>Custom Installation: This option is useful if you are installing OS to your brand new or existing computer, which doesn’t have an OS.</p><br><br>

               <h2>Step 11: Select a drive or partition</h2>
               <div><img src="images/ps11.png" width="500" height="500"></div>
               <p>Choose the correct partition where you are going to install your operating system and then click on “Delete”.</p><br><br>

               <h2>Step 12: Select a drive with unallocated space and click “Next”</h2>
               <div><img src="images/ps12.png" width="500" height="500"></div>
               <p>Choose the drive with unallocated space and click “Next” to continue the installation of windows. This might take little time to copy data to your hard drive, as it’s done you can move on to the next step.</p><br><br>

               <h2>Step 13: Remove the USB flash drive and restart your computer.</h2>
               <div><img src="images/ps13.png" width="500" height="500"></div>
               <p>As you can see, you have successfully installed the operating system to your PC. Now, You can remove the USB flash drive and restart your computer.</p>
               <p>Let’s now talk about how to set up windows.</p><br><br>

               <h2>Step 14: Setting Up Windows</h2>
               <div><img src="images/ps14.png" width="500" height="500"></div>
               <p>For setting up windows, you required only a few steps as mentioned below:</p>
               <ul>
                  <li>- Verify your region and keyboard input</li>
                  <li>- Connect to your Wireless network.</li>
                  <li>- Select for Personal Use or Organizational use and click next</li>
               </ul><br><br>

               <h2>Step 15: Sign in to Windows</h2>
               <ul>
                  <li>- Click “Accept” to Set up Cortana</li>
                  <li>- Click “Yes” and follow instructions to set up the Windows timeline</li>
                  <li>- Choose your privacy settings and click “Accept“</li>
               </ul>
               <p>This will take a few more times to set up your windows. Now, you can sit relax and wait for the setting up. As it’s done, you can use your computer as you like.</p>
               <hr>
               <h1>Reset Operating System (Windows)</h1>
               <h2>Step 1: Recovery Settings</h2>
               <h3>Reset Windows 10</h2>
               <div><img src="images/rs1.png" width="500" height="500"></div>
               <p>In Windows 10, click the Start menu and select the gear icon in the lower left to open up the Settings window. You can also select the Settings app from the app list. Under Settings, click Update & Security > Recovery, then select Get started under Reset this PC.</p>
               <h3>Reset Windows 11</h2>
               <div><img src="images/rs1-1.png" width="500" height="500"></div>
               <p>In Windows 11, open Settings > System > Recovery (or Settings > Windows Updates > Advanced options > Recovery). Click Reset PC next to the Reset this PC option.</p><br><br>

               <h2>Step 2: Choose What to Erase</h2>
               <div><img src="images/rs2.png" width="500" height="500"></div>
               <p>On either OS, you can choose Keep my files to remove only downloaded apps and settings. This will preserve your personal files and is recommended if you are trying to roll back an issue.</p>
               <p>If your drive is beyond saving or you plan to get rid of the computer, select Remove everything, which wipes the drive clean by removing downloaded apps, settings, and personal files.</p><br><br>

               <h2>Step 3: Reinstall Options</h2>
               <div><img src="images/rs3.png" width="500" height="500"></div>
               <p>Before you can hit the reset button, you must determine how to reinstall Windows. Choose Local reinstall if you prefer the more hands-on approach of installing Windows from local storage.</p>
               <p>For an an easier route, click Cloud download to pull files directly from Microsoft's servers. This option requires over 4GB of available storage space, but it is meant to be a faster and more reliable alternative to booting from a flasdrive.</p><br><br>

               <h2>Step 4: Customize Additional Settings</h2>
               <div><img src="images/rs4.png" width="500" height="500"></div>
               <p>Once your selections have been made, there are a few extra settings you can customize, depending on what you picked. Click Change settings at the Additional settings screen to view your choices:</p>
               <ul>
                  <li>- If you chose Keep my files, apps and settings will default to what they were when the PC was brand new. You can change this by disabling Restore preinstalled apps.</li>
                  <li>- If you chose Remove everything, Windows will erase all your files. This is the quickest way to remove personal files, but it's less secure because those files can be recovered with the right software. If you plan to sell the machine, you'll want to enable Clean data to ensure your data is overwritten and not just removed. This will take longer, but it's worth the wait.</li>
               </ul>
               <div><img src="images/rs4-1.png" width="500" height="500"></div>
               <p>You already made the choice on how you wish to reinstall Windows, but you can change that answer from this menu. Enable or disable the Download Windows? option. By marking the choice as Yes, you will switch to a remote download of the operating system.</p>
               <p>If you have multiple drives installed, there will also be an option to control if they should be wiped as well. Another option for deleting workplace resources may be present if certain configurations have been set up through your place of work. Check with your company's IT department before changing this.</p><br><br>

               <h2>Step 5: Reset Your Computer</h2>
               <div><img src="images/rs5.png" width="500" height="500"></div>
               <p>Once you make all your decisions, click Next, and Windows will generate a screen that summarizes what will happen when you go through with the reset. If you selected Keep my files, you can look at a list of apps that will be removed with the reset. When you're ready to commit, click Reset. Your computer will restart and boot back up again after some time.</p>
               <p>If you are getting rid of the computer, your work is done. Otherwise, sign back into Windows and make sure what you opted to remove has been wiped from the machine. If you backed up your files using an online backup service or Recovery Drive, they can now be restored to the machine.</p>
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