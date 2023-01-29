<?php  

session_start();

   include("connection.php");
   include("functions.php");

  $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>Forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/contact.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
       <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- fevicon -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
   <script type="text/javascript"> 
    function refreshPage(){
    window.location.reload();
    }    
</script>
</head>

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
<section id="contact" class="contact">
      <div class="container">
         <h1 class="services_taital">Forum</h1>
        <div class="section-header">
          <p></p>
        </div>
    </section><!-- End Contact Section -->

<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
            <div class="form-group">
              <label for="usr">Name: </label>
              <input type="text" class="form-control" name="Rname" value="<?php echo $user_data['user_name']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
             <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply" onclick="refreshPage()">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Community forum</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Name: </label>
	  <input type="text" class="form-control" name="name" value="<?php echo $user_data['user_name']; ?>" readonly>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send" onclick="refreshPage()" >
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>
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