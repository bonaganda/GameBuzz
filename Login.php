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
                <li><a href="Home.php">HOME</a></li>
                <li><a href="Platform.php">PLATFORM</a></li>
                <li><a href="Reviews.php">REVIEWS</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Login.php#">LOGIN</a></li>
            </ul>
        </nav>
       
        
        
        <div id="banner">
        </div>
        
        <div id="login_wrapper">
            <div class="loginbox">
                <div id="Sign-In"> <fieldset style="width:100%"><legend>MEMBER LOGIN</legend> 
                        <form method="POST" action="connectivity.php"> Username <br><input type="text" name="user" size="30">
                            <br> Password <br><input type="password" name="pass" size="30">
                            <br> <input id="button" type="submit" name="submit" value="Login" > 
                        </form> 
                    </fieldset> 
                </div>

                
                
            </div>
            
            
            
        </div>
        
    </body>
</html>
