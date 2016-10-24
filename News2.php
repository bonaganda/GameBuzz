<!-- Author: John Rafael Baroro -->
<!-- This file contains the news page (news 2) of the GameBuzz website -->

<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>News</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>

        <div id="banner"></div>

        <div id="wrapper" style="height: 900px">
            <div class="columns" style="border-radius: 10px; padding: 5px; background-color: #5F5E5E;">
                <div id="review_col1">
                    <h1>Battle.net is no more</h1>
                    <img src="Images/News2.jpg" style="width: 675px; height: 400px;  ">
                    <h2> Battle.net has stopped all their games and services after 10 years due to selling their best game Overwatch to Steam </h2>
                    <p>Genji and Winston can be seen relatively often in pro play, but the pair can be used together to accentuate each other's strengths. Genji and Winston both have insane vertical mobility, making them prime candidates as divers—hence the name "Dive Bros."
                        In order to properly explain why Genji and Winston function so well as a pair, let's take a look at the math. Winston does 50 damage upon landing, alongside a decent 60 damage per second using his Tesla Cannon. Genji, on the other hand, can deal an immediate 50 damage with his Swift Strike, and can follow up with rapid right clicks (24 damage per shuriken). Of course, this game isn't only about math; the numbers coincide perfectly with Swift Strike's passive, which grants Genji a dash reset for each elimination he participates in. 
                        You can likely see where the math leads. Once the pair of divers can pick up a single kill, Genji can finally do his fair share by continually reseting his dash, slicing the opponents for 50 damage every time the player hits the shift key. This duo is especially effective against grouped bunches of enemies, as they can deal damage to multiple targets at once, making short work of the enemy team.
                        While the damage the pair outputs certainly looks large, you have to take into account that Lucio and Zenyatta will likely be buffing the defending teams, so the damage will certainly not be a straight 60 DPS from Winston in addition to Genji's. Still, the pair functions well, and Genji has enough burst to ensure that Zenyatta and Lucio's presences are not enough to ensure the enemies survive. </p>
                </div>
            </div>

            <!-- Sidebar Section - Top 10 Games -->
            <div id="sidebar" style="height: 900px;">
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
