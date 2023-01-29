<?php 

session_start();

  include("connection.php");
  include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {

      //read from database
      $query = "select * from hern_users where username = '$username' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {

          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] === $password)
          {

            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: index.php");
            die;
          }
        }
      }
      
      echo "Wrong Username or Password!";
    }else
    {
      echo "Wrong username or Password!";
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/login.css">
  <title>Login</title>
</head>
<body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <a href="signup.php"><h2 class="inactive underlineHover">Sign Up </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <p class="logo" style="font-weight: 900;font-size: 30px; color: #0c426e;">H E R N</p>
    </div>

    <!-- Login Form -->
    <form method="post">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
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

