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
        <title>Inside</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3000px;">

            <div class="columns">
                <a style="color: red;"><h1>Inside</h1></a>

                <h2>By: JJ David</h2> 
                Sneaking through the forest, a child running for his life serves as the main protagonist of Inside. Running further into the forest, it becomes apparent that the boy is running from an ominous threat. Having to sneak past trucks filled to the brim with mindless people that are being shipped off to an unforeseen destination, you are given a sense that everything is not ok. Further enriching the experience is the threat of dogs chasing you, masked bad guys gunning you down and worm infested pigs being, well worm infested pigs.</br></br></br>
                
                <img src ="../Images/Kim/inside.jpg" style="width: 675px; height: 400px;  " > </br></br>
                </br>This was all in the first 10 minutes by the way. Part of what developer Playdead does so well is putting the player in an immediately immersive world with an action button and a jump button. Puzzles are the main antagonist of the game ranging from simple to almost really difficult. Never did I feel that a puzzle was going to end my game or make me have to go look it up or ask for advice. One of the things I really did like about some of the puzzles were the audio cues you would get from solving them, really giving satisfaction for progress.</br></br></br>
                
                The game adds in a mind controlling aspect where the player puts on a little helmet and you can control little mindless humans in the background for the purpose of solving a puzzle. It was a fun novel way to approach puzzle platforming and I rather liked it. Unfortunately, like the rest of the game, there just wasn’t enough of it. At certain points of the game you get achievements by finding out of the way hard to reach nodes to destroy. If you find them all you can achieve an Alternate ending which for the purpose of this review I did not do but it was nice to see a little added content for a short game.</br></br></br>
                
                About 50 minutes into the game I fell in love with the submarine you are given to play with. Obviously I’m biased since I served in the Navy on a Submarine but it was a fun little thing. It had a boost on it and a light and was simple. You could boost through barriers, over obstacles and into broken walls revealing access. Also there were these little underwater creatures you had to get away from but keep your spotlight on. I liked the way their hair flowed underwater with the current, it gave a sense of serenity. But let me tell you, the second you took your attention away from them they sneak up on you and completely eviscerate you. Which brings the brutal nature of this game. At any point when you die, you are completely ripped apart and or torn to shreds with blood going in all directions. It served as a reminder that this world the player is in is full of threats and the only way to get through it is to keep running.</br></br></br>
                
                All told if you do everything possible in this game you still fall well short of 10 hours, but at $20 it’s a novel puzzle platformer that definitely scratches the indie itch. Following up Limbo should have been an arduous task but it seems that developer Playdead has the ability of blurring the lines between art and video games inside its DNA. I for one feel like games like this need to exist in an industry bursting with more and more mundane AAA titles. Now if only it can take less than 6 years between games. Inside was definitely a very good game, even at times great but it was by no means a perfect platformer and was at best a pretty good puzzle game. What makes Inside good is the overall experience i.e. the tone, setting, pace and soundtrack. Definitely a must play.</br></br>
                     
                <center>
                    </br><h2>GameBuzz Rating:</h2>
                    <img src ="../Images/Kim/3star.png"></br></br></br>
                    <img src ="../Images/Kim/graphrating4.png"></br>
                </center>
                
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
                    $old = fopen("comments-war.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("comments-war.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("comments-war.html", "r+t");
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
