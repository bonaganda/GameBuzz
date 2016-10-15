<?php
session_start();

require './Database.php';

if(isset($_POST['signup_btn'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    
    //Query the database for user
    try {
        $result = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
    } catch(mysqli_sql_exception $e) {
        die ('Failed to query DB');
    }
    
   //to check if username already exist
    if(mysqli_num_rows($result) > 0 ) {
        die('User already exist!');
    } else {
        //checks if password and confirmed password is the same
        if($password == $password2) {
            //create user
            $password = md5($password); //hash password for security
            $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            mysqli_query($con, $sql);
            $_SESSION['username'] = $username;
            //header("location: Home.php");
            echo'Signup Successful!';
        } else {
            //failed to create user
            $_SESSION['message'] = "Password does not match";
        }
    }
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <nav class="navigation">
            <ul id="nav">
                  <a href="Home.php"><img src="Images/Logo/GBLogosmall.png" width="232" height="50" id="logo" /></a> 
                <li><a href="Home.php">HOME</a></li>
                <li class="dropdown" style="position: relative; top:">
                    <div><a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">PLATFORM</a></div>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="#">PS4</a>
                        <a href="#">XONE</a>
                    </div>
                </li> 
                <li><a href="Reviews.php">REVIEWS</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Login.php#">LOGIN</a></li>
            </ul>
        </nav>
<!--        <div class="alert-messages " id="message-drawer" style="top: 46px;">
    <div class="message ">
  <div class="message-inside">
    <span class="message-text">The username and password you entered did not match our records. Please double-check and try again.</span>
      <a role="button" class="Icon Icon--close Icon--medium dismiss" href="#">
        <span class="visuallyhidden">Dismiss</span>
      </a>
  </div>
</div>
</div> -->
        
        <div id="banner">
        </div>
        
        <div id="login_wrapper" style="background-image: url(Images/mirana.jpg); background-size: cover;">
            <div class="loginbox">
                <div id="Sign-In" style="height: 255px;"> 
                    <fieldset style="width:100%; "><legend>Sign Up</legend> 
                        <form method="POST" action="SignUp.php">
                            <p>
                                <label>Username:</label><br>
                                <input type="text" name="username" size="30" >
                            </p>
                            <p>
                                <label>Email Address:</label><br>
                                <input type="email" name="email" size="30"><br>
                            </p>
                            <p>
                                <label>Password:</label><br>
                                <input type="password" name="password" size="30">
                            </p>
                            <p>
                                <label>Re-enter Password:</label><br>
                                <input type="password" name="password2" size="30">
                                <input id="button" type="submit" name="signup_btn" value="Sign Up"><br>
                            </p>
                        
                        </form> 
                    </fieldset> 
                </div>
            </div>
        </div>
        
    </body>
</html>
