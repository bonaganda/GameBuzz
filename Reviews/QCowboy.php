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
        <title>Quadrilateral Cowboy</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3050px;">

            <div class="columns">
                <a style="color: red;"><h1>Quadrilateral Cowboy</h1></a>

                <h2>By: Jody Mulhern</h2> 
                Quadrilateral Cowboy is a unique environmental puzzle game developed by Blendo Games and available now on Steam. It’s already raked in tonnes of acclaim from some of the top dogs in the industry, and I’ve been kind of excited, albeit a little apprehensive to dive into it in earnest. It’s a first-person puzzle game set in a cyberpunk 1980 with an emphasis on computer hacking to gain access to restricted areas by manipulating security systems.</br></br>
                
                </br>So why the apprehension? Well, the one feature that makes this game so unique was something that I wasn’t entirely convinced with. You see, you’re basically just a nerd armed with a bulky, cumbersome laptop that must connect to doors, skylights, cameras etc. by actually typing command scripts with your real life keyboard. For example, if I wanted to switch off a security camera so I could sneak past undetected, I’d have to whip out my ridiculously amusing 1980 hacking deck and type – “camera1.off(3)”. The number beside “camera” corresponds to one particular camera (there could be 4 or 5 in one level) and the number (3) after the command dictates how long I want, in seconds, to keep the camera off. For most security systems, 3 seconds is the limit before the alarm sounds and you get brutally shot to death by an automated turret.</br></br></br>
                
                <img src ="../Images/Kim/qboy2.png" style="width: 675px; height: 400px;  " > </br></br>
                </br>Initially, this totally bewildered me. In a way, I almost closed my mind to the idea that this could be any fun. However, after an hour or so, I was battering commands in like a total boss, and as the commands got increasingly more complex, I found that simultaneously bending 3 or 4 different security measures to my will in a single line of code granted me a truly fist pumping moment that would put the finest head-shot to shame. In short, this game made me feel like a real hacker.</br></br></br>
                
                As you progress through each job, usually consisting of stealing an item or obtaining restricted files, you’ll collect your money and go on a “Shopping Expedition”. Here, you’ll be greeted by a domestic cat who’ll recognise you as a special customer and casually proceed to reveal some of the finest black market equipment that cowboys like yourself might require; A tiny programmable robot for reaching those hard to reach places, a remote controlled sniper for precision fire and a launch pad for catapulting anything you want across the map, including yourself – to name but a few.</br></br></br>
                <img src ="../Images/Kim/qboy3.jpg" style="width: 675px; height: 400px;  " > </br></br>
                
                </br>After that, the next mission is usually just an exercise in using the new tool you’ve just unlocked. This is where Quadrilateral Cowboy falters just a wee bit. Because of this format, you already know what tool to use before you even begin. Don’t get me wrong, the puzzles are still nicely designed, but there’s never truly a situation where you enter a new area and think to yourself.</br></br></br>
                
                Hacking into everything you can and jabbing commands like a gangster is where Quadrilateral Cowboy cements itself as a memorable and exciting new IP. Just like Portal, although perhaps not quite as impactful, Blendo Games have come along and changed the way people perceive the environmental puzzler. Still, it looks great and, despite a degree wasted potential, plays great too.
                
                <center>
                    </br></br><h2>GameBuzz Rating:</h2>
                    <img src ="../Images/Kim/4halfstar.png"></br></br></br>
                    <img src ="../Images/Kim/graphrating2.png"></br>
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
                    $old = fopen("CommentsQCowboy.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("CommentsQCowboy.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("CommentsQCowboy.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 3050px;">
                <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include '../Games/Top10-Sidebar.php' ?>
            </div>
    </body>
</html>
