<!-- Authors: John Rafael Baroro & Joni Pablo -->
<!-- This file contains the full article of the Quadlirateral Cowboy game as well as the game trailer and the comment box -->

<?php
session_start();
$game = "QuadrilateralCowboy";
include '../Database.php';

if(isset($_SESSION['username'])) {
    require '../Includes/Favourites.php';
    $user = $_SESSION['username'];
    $myfavourites = $game;
    
    //Query database for user
    try {
        $result = mysqli_query($con, "SELECT * FROM user_fave WHERE username = '$user' AND favourite = '$myfavourites'");
        $row = mysqli_fetch_assoc($result);
    } catch(mysqli_sql_exception $e) {
        die ('Failed to query DB');
    }
   
    //Inserts the users favorite game into the database for future access
    if(isset($_POST['fave_btn'])) {
        
        if($row['favourite'] != $myfavourites) {
            $sql = "INSERT INTO user_fave (username, favourite) VALUES ('$user', '$myfavourites')";            
            mysqli_query($con, $sql);
            header("Location: QuadrilateralCowboy.php");
        }
    }
    
}  
?>

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

        <div id="wrapper" style="height: 2800px;">

            <div class="columns">
                <a style="color: red;"><h1>Quadrilateral Cowboy</h1></a>
                
                <!--This shows the 'Add to favourite button-->
                <?php if(isset($_SESSION['username']) && ($row['favourite'] != $myfavourites)){
                        include '../Includes/Favebutton.php';  ?>
                <?php } else if(!isset ($_SESSION['username'])) {?>
                        <!--If  user is not logged on, favourite button is not shown-->
                <?php } else {?>
                        <input id="favebtn" type="button" name="favebtn" value="Favorite ♥" style="color: red">
                <?php } ?>

                <h2>Platform: PC</h2> 
                Quadrilateral Cowboy is a puzzle video game developed by Blendo Games. It was released in July 2016 for Microsoft Windows, with Mac OS X and Linux versions to come in September 2016.
                In this game, the player is a computer hacker in the 1980s and is armed with a “top-of-the-line hacking deck outfitted with a 56.6k modem and a staggering 256k Ram”. Based from Brendon Chung (developer of Blendo Games), the game takes place in the same universe as his other games, Thirty Flights of Loving and Gravity Bone, and shares the same “blocky” aesthetics. </br></br>
                <img src ="../Images/cowboy1.jpg" style="width: 675px; height: 400px;  " > </br></br>

                Quadrilateral Cowboy is played from the first-person perspective. The player’s role is a hacker which oversees one or more skilled agents that have missions to infiltrate buildings and steal documents. Each agent has a different skill set and abilities and in addition to the player’s hacker with their Deck, there is another character that has a saw to break through the doors whilst another person will be able to climb and move through the levels quickly. The player generally will experience what the agents would see through the virtual reality goggles that relay what they see to the hacker character. </br></br>
                <img src ="../Images/cowboy2.jpg" style="width: 675px; height: 400px;  " > </br></br>
                If the agents happen to come across locked doors, cameras and other security measures, the player which is the hacker will need to develop a program – typing the codes into their physical keyboards which in turn handles the security measures without setting off extra alarms to permit the agents to sneak in. Per se, the player must develop the program with the suitable timing to permit them to make it through the different obstacles they encounter without triggering the alarms in the building.
                Throughout the game, the player needs to access the other gadgets such as a rover to search and collect objects which also can be programmed by the player to assist in the heist.
                The heists were planned out in a virtual reality simulator within the game, the Heist Planner. This allows the hacker (player) to be able to adjust the timing and control of the agents and the interruptions within the system. This region will also supply a simple in-game tutorial system for the player to know the mechanics of hacking with the instructions displayed as sticky notes are attached to different objects or when the characters hold up signs during the game.

                </br></br> <h2>Trailer:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/S_IVvhSX2tY" frameborder="0" allowfullscreen></iframe>

                <!-- Comment Section -->

                <br><br><br>

                <!-- Leave a comment text -->
                <font color = "white"><b>Leave a Comment</b></font> </br></br>

                <!-- Comment Form -->
                <form action="" method="POST">                       
                    <!-- Comment box -->
                    <textarea rows ="5" cols ="60" name="commentContent" required></textarea></br></br>
                    <!-- Submit button -->
                    <input type = "submit" value = "Publish"></br>
                </form>

                <!-- Code to display the inputted name and comment in the page -->
                <?php
                if ($_POST) {
                    //if user is logged in, user is able to comment
                    if(isset($_SESSION['username'])) {
                        $name = $_SESSION['username'];
                        $content = $_POST['commentContent'];

                        #Get old comments
                        $old = fopen("comments-darksouls.html", "r+t");
                        $old_comments = fread($old, 1024);

                        #Delete everything, write down new and old comments
                        $write = fopen("comments-darksouls.html", "w+");
                        $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                        fwrite($write, $string);
                        fclose($write);
                        fclose($old);
                    } else {
                        echo "<script language=javascript>alert('Must be logged in to leave comments!')</script>";
                    }
                }

                #Read comments
                $read = fopen("comments-quadri.html", "r+t");
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
