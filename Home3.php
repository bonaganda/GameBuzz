<!-- Author: Joni Pablo -->
<!-- This file contains the home page (page 3) of the GameBuzz website -->
    
<?php
session_start();
include './Database.php';
if(isset($_SESSION['username'])) {
    require './Includes/Favourites.php';
}
?>
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
        
        <div id="wrapper" style="height: 1200px">
            <div class="columns">
                <div id="news_area">
                    
                    <!--Calls HomepageNews.php and displays in in the page-->
                    <?php include 'Includes/HomepageNews.php';?>


                    <img src="Images/Article Images/divider.png" alt="divider" width="700" height="5" border="0"><br><br>

                    <!--Article Section*-->

                    <div id="article_column">
                        <a href=""><b>&nbsp;&nbsp;&nbsp;&nbsp;ARTICLES</b><br><br></a>

                        <!--List of game articles-->

                        <!-- Adds filled border to each article -->
                        <div class = "border">

                            <!-- Image thumbnail of Game Article -->
                            <a href="Games/DarkSouls3.php"><img src="Images/Article Images/Dark Souls.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>
                            <font size ="3">

                            <!-- Game Title -->
                            <a href="Games/Inside.php"><b><br>DARK SOULS III</b><br></a>
                            </font>

                            <!-- Game Excerpt-->
                            <p align="left">
                                Dark Souls III is an role-playing action packed game which is played from a third-person perspective and similar to the other games in the series. Based from the series creator and lead director Miyazaki, the gameplay design is followed closely from Dark Souls II.
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
                            <a href="Games/Overwatch.php"><b><br>UNCHARTED 4</b><br></a>
                            </font>

                            <!-- Game Excerpt-->
                            <p align="left">
                                Uncharted 4 is an adventure-action packed game that is played from a third-person perspective, with platform game elements. The player undertakes control of Nathan Drake, who is physically adept and is able to sprint, climb, jump, swim, scale narrow ledges and wall-faces to get amongst points, swing with a rope, use a grappling hook and do other acrobatic actions.
                                <a href="Games/Overwatch.php"><b>Read More..</b></a>
                            </p>
                        </div>
                        <br><br><br>

                        <!-- Page Links -->

                        <!-- Centers pagination -->
                        <div class="center">

                            <!-- Page numbers -->
                            <ul class="pagination">
                                <li><a href="Home2.php">«</a></li>
                                <li><a href="Home.php">1</a></li>
                                <li><a href="Home2.php">2</a></li>
                                <li><a class="active" href="Home3.php">3</a></li>
                                <li><a href="">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Section - Top 10 Games -->
            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 1200px;">
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
