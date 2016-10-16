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
        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>

        <!-- Leaves a margin between the navbar and the website's body -->
        <div id="banner"></div>

        <!-- Adds the website's wrapper -->
        <div id="wrapper" style="height: 950px;">

            <div class="columns_about">


                <!-- This section contains information about our website and about us -->
                <a style="color: red;"><h1>About Us</h1></a>
                <!-- <img src="Images/Kim/aboutus.png" style="width: 600px; height: 260px;"> -->
                <br>
                <p align = "left">Gamebuzz is a universal gaming community with a solid focus on popular competitive games. We have created this website to offer our users the latest news on newly released games for different platforms and as well as game reviews, recommendations, tips and tricks.
                </p>
                <br>
                <a style="color: red;"><h2>Meet the Creators!</h2></a>
                <br>
                <img src="Images/Kim/benjo1.png" width="100" height="120" align="left" hspace = "30">
                <br><br>
                <p align="left">Hi, my name is Benjo! I'm the Product Owner.</p>
                <br><br><br><br>
                <img src="Images/Kim/bona1.png" width="100" height="120" align="left" hspace = "30">
                <br><br>
                <p align="left">Hi, my name is Kim! I'm the Scrum Master.</p>
                <br><br><br><br>
                <img src="Images/Kim/kim1.png" width="100" height="120" align="left" hspace = "30">
                <br><br>
                <p align="left">Hi, my name is Joni! I'm the Website Designer.</p>
                <br><br><br><br>
                <img src="Images/Kim/joni1.png" width="100" height="120" align="left" hspace = "30">
                <br><br>
                <p align="left">Hi, my name is Bona! I'm the Team Coordinator.</p>
            </div>
        </div>
    </body>
</html>
