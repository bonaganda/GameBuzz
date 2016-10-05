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
        
        <div id="banner">
        </div>
        
        <div id="login_wrapper" style="background-image: url(Images/mirana.jpg); background-size: cover;">
            <div class="loginbox">
                <div id="Sign-In" style="height: 210px;"> <fieldset style="width:100%; color: white;"><legend>MEMBER LOGIN</legend> 
                        <!--<form method="POST" action="connectivity.php">-->
                        
                        <p style="color: red;">Email Address:<br><input type="email" name="email" size="30"><br>
                            <br>Username:<br><input type="text" name="user" size="30"><br>
                            <br>Password:<br><input type="password" name="pass" size="30">
                            <input id="button" type="submit" name="submit" value="Sign Up"><br> </p>
                        <!--</form>--> 
                    </fieldset> 
                </div>
            </div>
        </div>
        
    </body>
</html>
