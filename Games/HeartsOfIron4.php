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
        <title>Hearts of Iron IV</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>
      
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>
        
        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3000px;">

            <div class="columns">
                <a style="color: red;"><h1>Hearts Of Iron IV</h1></a>

                <h2>Platform: PC</h2></br>
                Hearts of Iron IV is a strategy game where the player is able to take command of any nation in World War II which is the most engaging conflict in world history and the player can lead the nation with their chosen ultimate weapon. 
                From the heart of the battlefield to the centre of command, the player will need to guide his/her nation to glory and wage war, invade or negotiate. 
                The power is fundamentally with the player to tip the very balance of World War II. 
                The question now is will the player relive or change the history? Will the player change the fate of the world by accomplishing victory no matter the costs? It is time to show and test the player’s ability as the supreme military leader in the world.</br></br>
                <img src="../Images/soldier1.jpg" style="width: 675px; height: 400px;">

                <br><br>The main features of the game is that it is a game where there is total strategic war. War is not only won in the land but so as the sea and in the air. It’s also accomplished in the minds and hearts of both men and women. 
                Next is the simulation of authentic real-time war: fight the wars with various range of tools available such as planes, ships, tanks, guns and even the newly discovered weapons of mass destruction. 
                The player is also given the option to choose which nation he/she would want to control and manage – either the small nations or the nations which are striving for power and glory to achieve victory. 
                In addition, the game has a topographical map complete with seasons, terrain and weather so that the players can experience the full World War II timespan. Storms, mud and snow can either be the player’s enemy or their strongest ally.</br></br>
                <img src="../Images/soldier2.jpg" style="width: 675px; height: 400px;">

                <br><br> The game is a matter of negotiations or forcing their will. The player will be able to experience the diplomacy systems and advanced politics, he/she can form some factions, participate in trade for resources and employ ministers to their party. 
                There is an intense combat online where the player can battle in both cooperative and competitive multiplayer for up to 32 players and it features a cross-platform multiplayer. 
                With this game, the users can experience the flexibility of the technological system and where all the most important powers get their own distinctive identity. 
                Finally, Players can develop comprehensive historic planes and tanks through the army experience and research.</br></br> 
                <img src="../Images/soldier3.jpg" style="width: 675px; height: 400px;">

                <br><br><h2>Trailer:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/e9BiUtINy4w" frameborder="0" allowfullscreen></iframe>

                <!-- Comment Section -->

                <br><br><br>

                <!-- Leave a comment text -->
                <font color = "white"><b>Leave a Comment</b></font> </br></br>

                <!-- Comment Form -->
                <form action="" method="POST">
                    <!-- Username text field -->
                    <input type = "text" name = "name" maxlength = "10" required> Username <font color = "red">(required)</font></br></br>                           
                    <!-- Comment box -->
                    <textarea rows ="5" cols ="60" name="commentContent" required></textarea></br></br>
                    <!-- Submit button -->
                    <input type = "submit" value = "Publish"></br>
                </form>

                <!-- Code to display the inputted name and comment in the page -->
                <?php
                if ($_POST) {

                    $name = $_POST['name'];
                    $content = $_POST['commentContent'];

                    #Get old comments
                    $old = fopen("comments-heartsofiron4.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("comments-heartsofiron4.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("comments-heartsofiron4.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 3000px;">

                <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include 'Top10-Sidebar.php' ?>
            </div>
    </body>
</html>
