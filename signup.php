<?php 
session_start();

  include("connection.php");
  include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($user_name) && !is_numeric($user_name) && !empty($username) && !empty($password))
    {

      //save to database
      $user_id = random_num(20);
     $query = "insert into hern_users (user_id,user_name,username,password) values ('$user_id','$user_name','$username','$password')";

      mysqli_query($con, $query);

      header("Location: login.php");
      die;
    }else
    {
      echo "Please enter some valid information!";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/login.css">
  <title>Sign Up</title>
</head>
<body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <a href="login.php"><h2 class="inactive underlineHover"> Sign In </h2></a>
    <h2 class="active">Sign Up </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <p class="logo" style="font-weight: 900;font-size: 30px; color: #0c426e;">H E R N</p>
    </div>

    <!-- Login Form -->
    <form method="post">
      <input type="text" id="user_name" class="fadeIn second" name="user_name" placeholder="Full Name">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Sign Up">
    </form>

    <!-- Remind Passowrd 
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
-->
  </div>
</div>
</body>
</html>

