<!-- Authors: John Rafael Baroro & Joni Pablo -->
<!-- This file contains the full article of the Overwatch game as well as the game trailer and the comment box -->

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
        <title>Overwatch</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3000px;">

            <div class="columns">
                <a style="color: red;"><h1>Overwatch</h1></a>

                <h2>Platform: PC, XBOX ONE and PS4</h2></br>
                Overwatch is a team based shooter from renowned games studio, Blizzard. What sets this shooter apart from the rest is that there is a wide range of heroes for the player to fight with. 
                Each hero has their own set of abilities that the player can master. There are a lot of characters in the game that the player can choose from such as Volatile Mercenary, Super-Intelligent Genetically Engineered Gorilla or Cyborg Ninja. 
                The game is essentially all about teamwork so the player would need to know what his/her role and excel in it. 
                Whether the player is defending their team mates with energy shields, one of the people in action, or supporting their team mates by intensifying their damage attack to their enemy. Every hero has a role to fill in the game.</br></br>
                <img src="../Images/ow2.jpg" style="width: 675px; height: 400px;">

                <br><br>There are soldiers, adventurers, scientists and other oddities created and during a global crisis, an international task force encompassed of heroes from all over the globe were tasked with restoring the peace to the world that has been torn apart because of war. 
                Therefore, their name is called Overwatch. After the crisis have been prevented, they tried to maintain the peace for as long as they can and for years to come but in the end, Overwatch’s influence of doing so has weakened and they have parted.</br></br>
                <img src="../Images/ow1.jpg" style="width: 675px; height: 400px;">

                <br><br>The player can choose from 21 unique heroes with their own special abilities that needs to be mastered. 
                In order to unlock a hero’s potential, the player needs to master their skills and each hero plays differently. Since this a team based game, everyone in the team has a role of their own to play. 
                There are 3 roles: offence, support and defence. Each role is very important and will contribute to the success of the team. 
                The player will have to master their character’s abilities to enable them to work better with the team. 
                There are also different abilities that can work well with others so that the team will have to search the impeccable combination to rule on the battlefield.</br></br>
                <img src="../Images/ow3.jpg" style="width: 675px; height: 400px;">

                <br><br>Furthermore, the battles can be done across the globe and against other teams of heroes. 
                Escorting an EMP device through the King’s Row or even protecting the secrets of the Temple of Anubis, The world is the player’s battlefield. 

                <br><br><h2>Trailer:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dushZybUYnM" frameborder="0" allowfullscreen></iframe>

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
                    $old = fopen("comments-overwatch.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("comments-overwatch.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("comments-overwatch.html", "r+t");
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
