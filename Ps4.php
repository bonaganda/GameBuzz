<!-- Author: Joni Pablo -->
<!-- This file contains the Ps4 game articles of the GameBuzz website -->

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
        <title>Ps4</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>

        <!-- Leaves a margin between the navbar and the website's body -->
        <div id="banner">
        </div>

        <!-- Adds the website's wrapper -->
        <div id="wrapper" style="height: 1780px;">

            <!-- Adds the sidebar section -->
            <div class="columns">

                <!-- Adds the article column section -->
                <div id="article_column">

                    <!-- Platform Title -->
                    <a href="Ps4.php"><h1>&nbsp;PS4</h1></a>

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
                    <br>

                    <!-- Adds filled border to each article -->
                    <div class = "border">
                        <!-- Image thumbnail of Game Article -->
                        <a href="Games/Inside.php"><img src="Images/Article Images/Dark Souls.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>
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
                        <a href="Games/Uncharted4.php"><img src="Images/Article Images/Uncharted4.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>
                        <font size ="3">

                        <!-- Game Title -->
                        <a href="Games/Uncharted4.php"><b><br>UNCHARTED 4</b><br></a>
                        </font>

                        <!-- Game Excerpt-->
                        <p align="left">
                            Uncharted 4 is an adventure-action packed game that is played from a third-person perspective, with platform game elements. The player undertakes control of Nathan Drake, who is physically adept and is able to sprint, climb, jump, swim, scale narrow ledges and wall-faces to get amongst points, swing with a rope, use a grappling hook and do other acrobatic actions.
                            <a href="Games/Uncharted4.php"><b>Read More..</b></a>
                        </p>
                    </div>
                    <br>

                    <!-- Adds filled border to each article -->
                    <div class = "border">

                        <!-- Image thumbnail of Game Article -->
                        <a href="Games/JustCause3.php"><img src="Images/Article Images/Just Cause.jpg" alt="warhammer" width="400" height="250" border="0" align="left" hspace = "20"></br></a>
                        <font size ="3">

                        <!-- Game Title -->
                        <a href="Games/JustCause3.php"><b><br>JUST CAUSE 3</b><br></a>
                        </font>

                        <!-- Game Excerpt-->
                        <p align="left">
                            Just Cause 3 is an open world adventure-action video game that is set on a fictional Mediterranean island known as Medici with Rico Rodriguez set as the main character. The map size is just like the setting of Just Cause 2 with 400sqm devoted to the new setting. 
                            <a href="Games/JustCause3.php"><b>Read More..</b></a>
                        </p>
                    </div>
                    <br><br>  
                </div>
            </div>

            <!-- Extends sidebar border's height -->
            <div id="sidebar" style="height: 1780px;">

                <!-- Sidebar Section -->
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
         <?php include 'footer.php'; ?> 
    </body>
</html>
