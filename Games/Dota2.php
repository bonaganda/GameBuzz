<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dota 2</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
       <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3000px;">

            <div class="columns">
                <a style="color: red;"><h1>Dota 2</h1></a>

                <h2>Platform: PC</h2></br>
                Dota 2 is a multiplayer online battle arena (MOBA) video game in which two teams of five players compete to collectively abolish a large structure protected by the opposite team known as the “Ancient” while defending their own structure. 
                The game is fundamentally controlled using the standard real-time strategy controls and is presented on a single map in a 3D isometric perspective. 
                The game has 112 playable characters and ten players each control a “hero” of their own with each having their own unique design, weaknesses and strengths. 
                The characters are divided into two main roles in the game known as the “Carry” and the “Support”. 
                The carries start of each match as vulnerable and weak but sooner they become more powerful during the game therefore they can eventually “Carry” their own team to glory and victory. 
                Supports are usually lacking abilities that inflict heavy damage, instead having ones with more functionality and service that offer support for their carries.</br></br>
                <img src="../Images/dota21.jpg" style="width: 675px; height: 400px;">

                <br><br>All heroes have a basic damage-dealing attack plus the powerful hero-specific abilities. 
                Each character has at least four abilities and these are the principal means of fighting. The most powerful ability that each of the hero have is called “Ultimate” which requires them to have an experience level of 6 to be able to learn and use it. 
                A magic system also exists in the game called the “Mana Points” and so these points can be used if the player wants to activate an ability for their character. Mana points tend to regenerate very slowly and there is a cool down phase when an ability is used. 
                All of the heroes have three attributes – agility, strength and intelligence which can have an effect on the hero’s health, mana points and speed of attack respectively. Once a hero runs out of health or dies, a timer starts to count down until they respawn in their own base. 
                Also, players can buy items to provide their characters with their own special abilities. These items can be bought by anyone and they must have sufficient gold to be able to afford the items. Gold can be obtained when the enemy heroes’ are killed, destroying enemy structures and killing creeps.</br></br>
                <img src="../Images/dota22.jpg" style="width: 675px; height: 400px;">                

                <br><br>Dota 2 also features seasonal events that presents the players with alternative game modes that doesn’t completely follow the standard rules of the game. 
                In 2016, Valve has announced the “Custom Game Pass” option to custom game modes, which permits the creators of content to enhance exclusive features, content and other changes to the game mode. </br></br>
                <img src="../Images/dota23.jpg" style="width: 675px; height: 400px;">

                <br><br><h2>Trailer:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-cSFPIwMEq4" frameborder="0" allowfullscreen></iframe>

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
                    $old = fopen("comments-dota2.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("comments-dota2.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("comments-dota2.html", "r+t");
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
