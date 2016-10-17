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
        echo "<script language=javascript>alert('User already exist.')</script>";
    } else {
        //checks if password and confirmed password is the same
        if($password == $password2) {
            //create user
            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";            
            mysqli_query($con, $sql);
            $_SESSION['username'] = $username;
            echo "<script language=javascript>alert('Signup Successful.')</script>";
            header("location: Home.php");
        } else {
            //failed to create user
            echo "<script language=javascript>alert('Password do not match.')</script>";
        }
    }
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <?php include './Includes/Navbar.php'; ?>
        
        <div id="banner"></div>
        
        <div id="login_wrapper" style="background-image: url(Images/mirana.jpg); background-size: cover;">
            <div class="loginbox">
                <div id="Sign-In" style="height: 280px; "> 
                    <fieldset style="width:100%;  "><legend>Sign Up</legend> 
                        <form method="POST" action="SignUp.php">
                            <p>
                                <label>Username:</label><br>
                                <input type="text" name="username" size="25" >
                            </p>
                            <p>
                                <label>Email Address:</label><br>
                                <input type="email" name="email" size="25"><br>
                            </p>
                            <p>
                                <label>Password:</label><br>
                                <input type="password" name="password" size="25">
                            </p>
                            <p>
                                <label>Re-enter Password:</label><br>
                                <input type="password" name="password2" size="25">
                                <input id="button" type="submit" name="signup_btn" value="Sign Up"><br>
                            </p>
                        </form> 
                    </fieldset> 
                </div>
            </div>
        </div>
    </body>
</html>
