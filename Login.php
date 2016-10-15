<<<<<<< HEAD
<?php 
session_start();
require './Database.php';

if(isset($_POST['login_btn'])){
    //to prevent sql injection
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    //Query the database for user
    try {
        $result = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        $row = mysqli_fetch_array($result); 
    } catch(mysqli_sql_exception $e) {
        die ('Failed to query DB');
    }
    //Check if user exist
    if($username == $row['username'] && $password == $row['password']){
        die('login success');
    } else {
        die('login failed!');
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
        <title>Login</title>
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
       
        
        
        <div id="banner">
        </div>
        
        <div id="login_wrapper">
            <div class="loginbox">
                <div id="Sign-In"> 
                    <fieldset style="width:100%; "><legend>MEMBER LOGIN</legend> 
                        <form method="POST" action="Login.php" style="color: red;">
                            <p>
                                <label>Username:</label><br>
                                <input type="text" name="username" size="30" >
                            </p>
                            <p>
                                <label>Password:</label><br>
                                <input type="password" name="password" size="30">
                                <input id="button" type="submit" name="login_btn" value="Login"><br>  
                            </p>
                            <a href="SignUp.php">Not a member? Sign up now!</a>
                        </form> 
                    </fieldset> 
                </div>

                
                
            </div>
            
            
            
        </div>
        
    </body>
</html>
=======
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
       
        
        
        <div id="banner">
        </div>
        
        <div id="login_wrapper">
            <div class="loginbox">
                <div id="Sign-In"> 
                    <fieldset style="width:100%; "><legend>MEMBER LOGIN</legend> 
                        <form method="POST" action="connectivity.php" style="color: red;">
                            <p>
                                <label>Username:</label><br>
                                <input type="text" name="username" size="30" >
                            </p>
                            <p>
                                <label>Password:</label><br>
                                <input type="password" name="password" size="30">
                                <input id="button" type="submit" name="login_btn" value="Login"><br>  
                            </p>
                            <a href="SignUp.php">Not a member? Sign up now!</a>
                        </form> 
                    </fieldset> 
                </div>

                
                
            </div>
            
            
            
        </div>
        
    </body>
</html>
>>>>>>> 5b9de739529ceb6cc56830821677c555d9e71d50
