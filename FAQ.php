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
        <div id="wrapper" style="height: 1250px;">

            <div class="columns_about">

                <!-- This section contains information about our website and about us -->
                <center>
                    <a style="color: red;"><h1>About Us</h1></a>
                    <img src="Images/Kim/aboutus.png" style="width: 600px; height: 260px;"> 
                    </br></br>
                    Gamebuzz is a universal gaming community with a solid focus on popular competitive games. We have created this website to offer our users the latest news on newly released games for different platforms and as well as game reviews, recommendations, tips and tricks.
                    </br></br></br>
                    <a style="color: red;"><h2>Meet the Creators!</h2></a>
                    </br>
                    <img src="Images/Kim/benjo1.png" width="100" height="120" align="left" hspace = "30">
                    </br></br>
                    <p align="left">Hi, my name is Benjo! (Product Owner)</br> I'm responsible for defining Stories and prioritizing the Team Backlog so as to streamline the execution of program priorities.</p>
                    </br></br></br></br>
                    <img src="Images/Kim/bona1.png" width="100" height="120" align="left" hspace = "30">
                    </br></br>
                    <p align="left">Hi, my name is Kim! (Scrum Master)</br> I'm the Scrum Master for this project and I make sure that the team adheres to Scrum's principles.</p>
                    </br></br></br></br>
                    <img src="Images/Kim/kim1.png" width="100" height="120" align="left" hspace = "30">
                    </br></br>
                    <p align="left">Hi, my name is Joni! (Website Designer) </br> I'm in charge of the design part for our website.</p>
                    </br></br></br></br>
                    <img src="Images/Kim/joni1.png" width="100" height="120" align="left" hspace = "30">
                    </br></br>
                    <p align="left">Hi, my name is Bona! (Team Coordinator) </br> I'm in charge of overseeing the processes and details of how our team reaches our goals.</p>
                </center>
            </div>
        </div>
    </body>
</html>