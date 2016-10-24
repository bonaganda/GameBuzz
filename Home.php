<!-- Authors: Joni Pablo & Bonaliza Garcia -->
<!-- This file contains the home page of the GameBuzz website -->

<?php
session_start();
include './Database.php';
if(isset($_SESSION['username'])) {
    require './Includes/Favourites.php';
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
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php';
        ?>



        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
            window.onclick = function (e) {
                if (!e.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    for (var d = 0; d < dropdowns.length; d++) {
                        var openDropdown = dropdowns[d];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>

        <div id="banner"></div>

        <div id="wrapper">
            <div class="columns">
                <div id="news_area">

                    <!--Calls HomepageNews.php and displays in in the page-->
                    <?php include 'Includes/HomepageNews.php'; ?>

                    <img src="Images/Article Images/divider.png" alt="divider" width="700" height="5" border="0"><br><br>

                    <!--Article Section*-->
                    <div id="article_column">

                        <!--Article title-->
                        <a href=""><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ARTICLES</b><br><br></a>

                        <!--List of Game Articles-->

                        <!-- Adds filled border to each article -->
                        <div class = "border">

                            <!-- Image thumbnail of Game Article -->
                            <a href="Games/Warhammer.php"><img src="Images/Article Images/TotalWar.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>

                            <!-- Game Title -->
                            <font size ="3">
                            <a href="Games/Warhammer.php"><b><br>TOTAL WAR: WARHAMMER</b><br></a>
                            </font>

                            <!-- Game Excerpt -->
                            <p align="left">
                                Total War: Warhammer is a video game that is based on turns and real-time tactical battles between armies. The video game was developed by Creative Assembly and then later on published by Sega. The gameplay of the Total War series are featured along with the factions of Games Workshop’s Warhammer series. 
                                <a href="Games/Warhammer.php"><b>Read More..</b></a>
                            </p>
                        </div>
                        <br> 

                        <!-- Adds filled border to each article -->
                        <div class = "border">

                            <!-- Image thumbnail of Game Article -->
                            <a href="Games/QuadrilateralCowboy.php"><img src="Images/Article Images/Quadrilateral.png" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>

                            <!-- Game Title -->
                            <font size ="3">
                            <a href="Games/QuadrilateralCowboy.php"><b><br>QUADRILATERAL COWBOY</b><br></a>
                            </font>

                            <!-- Game Excerpt-->
                            <p align="left">
                                Quadrilateral Cowboy is a puzzle video game developed by Blendo Games. It was released in July 2016 for Microsoft Windows, with Mac OS X and Linux versions to come in September 2016.
                                <a href="Games/QuadrilateralCowboy.php"><b>Read More..</b></a>
                            </p>
                        </div>
                        <br>  

                        <!-- Adds filled border to each article -->
                        <div class = "border">

                            <!-- Image thumbnail of Game Article -->
                            <a href="Games/Doom.php"><img src="Images/Article Images/Doom.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>
                            <font size ="3">

                            <!-- Game Title -->
                            <a href="Games/Doom.php"><b><br>DOOM</b><br></a>
                            </font>

                            <!-- Game Excerpt -->
                            <p align="left">
                                This game was developed by ID sotware, which was the studio that had pioneered the genre of first-person shooting and developed a multiplayer deathmatch. DOOM returns as a fun but brutal and challenging modern-day shooter experience.
                                <a href="Games/Doom.php"><b>Read More..</b></a>
                            </p>
                        </div>
                        <br><br><br>

                        <!-- Page Links -->

                        <!-- Centers pagination -->
                        <div class="center">

                            <!-- Page numbers -->
                            <ul class="pagination">
                                <li><a href="#">«</a></li>
                                <li><a class="active" href="Home.php">1</a></li>
                                <li><a href="Home2.php">2</a></li>
                                <li><a href="Home3.php">3</a></li>
                                <li><a href="Home2.php">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sidebar" style="height: 1500px;">
                <center>    
                    <a href="Top10.php"><b><br>TOP 10 GAMES</b><br><br></a>
                    <a href="Games/Warhammer.php"><img src="Images/Sidebar/warhammer_banner.png" alt="warhammer" width="300" height="60" border="0"></a>
                    <a href="Games/QuadrilateralCowboy.php"><img src="Images/Sidebar/quad_banner.png" alt="quadrilateral" width="300" height="60" border="0"></a>
                    <a href="Games/Doom.php"><img src="Images/Sidebar/doom_banner.png" alt="doom" width="300" height="60" border="0"></a>
                    <a href="Games/DarkSouls3.php"><img src="Images/Sidebar/dsouls_banner.png" alt="darksouls" width="300" height="60" border="0"></a>
                    <a href="Games/Inside.php"><img src="Images/Sidebar/inside_banner.png" alt="inside" width="300" height="60" border="0"></a>
                    <a href="Games/Overwatch.php"><img src="Images/Sidebar/overwatch_banner.png" alt="overwatch" width="300" height="60" border="0"></a>
                    <a href="Games/HeartsOfIron4.php"><img src="Images/Sidebar/heartsofiron_banner.png" alt="heartsofironiv" width="300" height="60" border="0"></a>
                    <a href="Games/Uncharted4.php"><img src="Images/Sidebar/uncharted4_banner.png" alt="uncharted4" width="300" height="60" border="0"></a>
                    <a href="Games/Dota2.php"><img src="Images/Sidebar/dota2_banner.png" alt="dota2" width="300" height="60" border="0"></a>
                    <a href="Games/JustCause3.php"><img src="Images/Sidebar/justcause_banner.png" alt="justcause3" width="300" height="60" border="0"></a>               
                </center>
            </div>
        </div>
    </body>
</html>