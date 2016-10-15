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
        <title>Uncharted 4</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 2800px;">

            <div class="columns">
                <a style="color: red;"><h1>Uncharted 4</h1></a>

                <h2>Platform: PS4</h2></br>
                Uncharted 4 is an adventure-action packed game that is played from a third-person perspective, with platform game elements. 
                The player undertakes control of Nathan Drake, who is physically adept and is able to sprint, climb, jump, swim, scale narrow ledges and wall-faces to get amongst points, swing with a rope, use a grappling hook and do other acrobatic actions. 
                Drake can use different weapons such as assault rifles, grenades and pistols to kill his enemies. 
                Another feature that was incorporated in the game is the stealth elements which allows the player to sneak up to enemies and kill them without even being noticed. 
                The melee combat system was revised to evade the presence of quick time events and Drake can directly control the vehicles.</br></br>
                <img src="../Images/uncharted1.jpg" style="width: 675px; height: 400px;">

                <br><br>So while the game is linear, the environments feature various pathways for the player to discover. 
                The maps are considerably larger than the preceding games in the franchise, with the explorable region being 10 times greater than the previous games. 
                The enemies’ AI (artificial intelligence) is improved as they can now respond to the player’s actions more responsively, cooperate with each other and coordinate the tactics. 
                The AI of Drake’s companions, Sully and Sam are enhanced and they help Nathan in situations where there is combat, though the player can’t directly command them to do so. 
                Another feature that was introduced is the dialogue tree although this doesn’t affect the progression of the story. </br></br>
                <img src="../Images/uncharted2.jpg" style="width: 675px; height: 400px;">

                <br><br>Additionally, the changeover between the gameplay sequences and the cutscene is rather seamless. Competitive multiplayer is also featured in the game. 
                Lastly, there are certain things that can be unlocked in the game by using the points that the player has collected during the game are additional modes and visual filters, zero gravity mode, cel-shaded  artstyle and bullet time gameplay. </br></br>
                <img src="../Images/uncharted3.jpg" style="width: 675px; height: 400px;">

                <br><br><h2>Trailer:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hh5HV4iic1Y" frameborder="0" allowfullscreen></iframe>

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
                    $old = fopen("comments-uncharted.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("comments-uncharted.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("comments-uncharted.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 2800px;">
            <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
            <?php include 'Top10-Sidebar.php' ?>
            </div>
    </body>
</html>
