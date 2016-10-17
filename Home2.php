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
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>

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
                    <?php include 'Includes/HomepageNews.php';?>

                    <img src="Images/Article Images/divider.png" alt="divider" width="700" height="5"><br><br>

                    <!--Article Section*-->

                    <div id="article_column">

                        <!--Article title-->
                        <a href=""><b>&nbsp;&nbsp;&nbsp;&nbsp;ARTICLES</b><br><br></a>
                        <!--List of game articles-->
                        
                        <!-- Adds filled border to each article -->
                        <div class = "border">
                            <!-- Image thumbnail of Game Article -->
                            <a href="Games/Inside.php"><img src="Images/Article Images/Inside.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>
                            <font size ="3">

                            <!-- Game Title -->
                            <a href="Games/Inside.php"><b><br>INSIDE</b><br></a>
                            </font>

                            <!-- Game Excerpt-->
                            <p align="left">
                                Inside is a puzzle platformer in which the player is a young boy who wears a red shirt and explores a surreal setting presented as a predominantly monochromatic 2.5D platform game using colour only to highlight parts of the setting. The game itself is very dark in nature and regularly silent, with only intermittent musical cues. 
                                <a href="Games/Inside.php"><b>Read More..</b></a>
                            </p>
                        </div>
                        <br> 

                        <!-- Adds filled border to each article -->
                        <div class = "border">

                            <!-- Image thumbnail of Game Article -->
                            <a href="Games/Overwatch.php"><img src="Images/Article Images/Overwatch.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>
                            <font size ="3">

                            <!-- Game Title -->
                            <a href="Games/Overwatch.php"><b><br>OVERWATCH</b><br></a>
                            </font>

                            <!-- Game Excerpt-->
                            <p align="left">
                                Overwatch is a team based shooter from renowned games studio, Blizzard. What sets this shooter apart from the rest is that there is a wide range of heroes for the player to fight with. Each hero has their own set of abilities that the player can master. 
                                <a href="Games/Overwatch.php"><b>Read More..</b></a>
                            </p>
                        </div>
                        <br>

                        <!-- Adds filled border to each article -->
                        <div class = "border">

                            <!-- Image thumbnail of Game Article -->
                            <a href="Games/HeartsOfIron4.php"><img src="Images/Article Images/HOI.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>
                            <font size ="3">

                            <!-- Game Title -->
                            <a href="Games/HeartsOfIron4.php"><b><br>HEARTS OF IRON IV</b><br></a>
                            </font>

                            <!-- Game Excerpt-->
                            <p align="left">
                                Hearts of Iron IV is a strategy game where the player is able to take command of any nation in World War II which is the most engaging conflict in world history and 
                                the player can lead the nation with their chosen ultimate weapon. 
                                <a href="Games/HeartsOfIron4.php"><b>Read More..</b></a>
                            </p>
                        </div>
                        <br><br><br>                     

                        <!-- Page Links -->

                        <!-- Centers pagination -->
                        <div class="center">

                            <!-- Page numbers -->
                            <ul class="pagination">
                                <li><a href="Home.php">«</a></li>
                                <li><a href="Home.php">1</a></li>
                                <li><a class="active" href="Home2.php">2</a></li>
                                <li><a href="Home3.php">3</a></li>
                                <li><a href="Home3.php">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Section - Top 10 Games -->
            <div id="sidebar" style="height: 1500px;">
                <a href="Top10.php"><b><br>TOP 10 GAMES</b><br><br></a>
                <center>
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
