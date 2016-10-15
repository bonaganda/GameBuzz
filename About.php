<?php
session_start();
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
        <title>About</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>



        <div id="banner">
        </div>

        <div id="wrapper" style="height: 1020px;">
            <center>
                <br>
                <a style="color: red;"><h1>About Us</h1></a>
                <img src="Images/Kim/aboutus.png" style="width: 600px; height: 260px;">
                <br><br>
                <br>Gamebuzz is a universal gaming community with a solid focus on popular competitive games. <br>We have created this website to offer our users the latest news on newly released games <br>for different platforms and as well as game reviews, recommendations, tips and tricks.
                <br><br><br>
                <a style="color: red;"><h2>Meet the Creators!</h2></a>
                <br>
                <img src="Images/Kim/benjo1.png" width="100" height="120" align="left" hspace = "30">
                <br>
                <p align="left">Hi, my name is Benjo! I'm the Product Owner.</p>
                <br>
                <img src="Images/Kim/bona1.png" width="100" height="120" align="left" hspace = "30">
                <br>
                <p align="left">Hi, my name is Kim! I'm the Scrum Master.</p>
                <br>
                <img src="Images/Kim/kim1.png" width="100" height="120" align="left" hspace = "30">
                <br>
                <p align="left">Hi, my name is Joni! I'm the Website Designer.</p>
                <br>
                <img src="Images/Kim/joni1.png" width="100" height="120" align="left" hspace = "30">
                <br>
                <p align="left">Hi, my name is Bona! I'm the Team Coordinator.</p>

            </center>
        </div>
    </div>

</body>
</html>
