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
        <title>Just Cause 3</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3000px;">

            <div class="columns">
                <a style="color: red;"><h1>Just Cause 3</h1></a>

                <h2>By: Matthew S.</h2> 
                One of my favourite games of all time is Warhammer: Shadow of the Horned Rat. It’s available on GOG now, and while it’s not quite an old game, it remains deeply playable. The secret to its enduring success is the variety of the units, as well as your ability to take ownership of them because they all have individual names and accumulate experience. Messing around with those armies remains compelling to this day. </br></br>
                
                </br>I have measured every Warhammer game since against Shadow of the Horned Rat, and every single one of them has been found wanting. But, with Total War: Warhammer, we finally have the game that can replace the classic. Total War: Warhammer is, simply, the best Warhammer game ever developed.</br></br></br>
                <img src ="../Images/Kim/justcause01.jpg" style="width: 675px; height: 400px;  " > </br></br>

                </br>You’ve got a number of different classical Warhammer armies to take control of (and the promise of more to be added in later via DLC), and, in classical Total War style, you need to manage both the growth and maintenance of your empire – which plays out in a turn-based fashion – with the real-time battles as units clash with one another.</br></br></br>
                <img src ="../Images/Kim/justcause02.jpg" style="width: 675px; height: 400px;  " > </br></br>
                
                </br>There’s plenty of different units to recruit, and the battlefield control of them is comprehensive and engaging. Importantly, it’s also gorgeous to look at, and really helps to draw players in to a badly underrepresented fantasy universe in the video game realm. You could argue that Total War has hit a groove now where one game is merely iterating on what has come before, but I think that would be disingenuous, when each game is so distinctive. Napoleon really drew you to the Napoleonic Wars, Shogun was uniquely Japanese in tone, and now Warhammer convincingly teleports you into a fantasy universe where those miniatures that you used to spend weeks and months painting in anticipating of grand tabletop wargaming are able to come to life. 
                
                <center>
                    </br></br><h2>GameBuzz Rating:</h2>
                    <img src ="../Images/Kim/5star.png"></br></br></br>
                    <img src ="../Images/Kim/graphrating.png"></br>
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
