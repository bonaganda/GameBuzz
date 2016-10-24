<!-- Authors: John Rafael Baroro & Joni Pablo -->
<!-- This file contains the full article of the Inside game as well as the game trailer and the comment box -->

<?php
session_start();
$game = "Inside";
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
            header("Location: Inside.php");
        }
    }
    
}  
?>

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

        <div id="wrapper" style="height: 2200px;">

            <div class="columns">
                <a style="color: red;"><h1>Inside</h1></a>
                
                <!--This shows the 'Add to favourite button-->
                <!--This shows the 'Add to favourite button-->
                <?php if(isset($_SESSION['username']) && ($row['favourite'] != $myfavourites)){
                        include '../Includes/Favebutton.php';  ?>
                <?php } else if(!isset ($_SESSION['username'])) {?>
                        <!--If  user is not logged on, favourite button is not shown-->
                <?php } else {?>
                        <input id="favebtn" type="button" name="favebtn" value="Favorite ♥" style="color: red">
                <?php } ?>

                <h2>Platform: PC, PS4 and XONE</h2>

                Inside is a puzzle platformer in which the player is a young boy who wears a red shirt and explores a surreal setting presented as a predominantly monochromatic 2.5D platform game using colour only to highlight parts of the setting. The game itself is very dark in nature and regularly silent, with only intermittent musical cues. The player basically controls the unnamed boy who runs, walks, climbs and swims and then uses objects to overcome the obstacles and progress in the game. Later on, the boy gains the ability to control bodies to complete specific puzzles. At several points in the game, the player may learn of hidden rooms which contain orbs that are glowing. If the glowing orbs are disabled during the game, then the player can unlock the game’s different ending.</br></br>
                <img src ="../Images/inside1.jpg" style="width: 675px; height: 400px;  " >

                <br><br>The main character can die in different ways, like being shot by a anaesthetic dart, drowning, mutilated by the dogs, ensnared by security machines or blown apart by shockwaves. These deaths are presented every so often graphically and realistically as in the predecessor game called Limbo. If the boy (main character) dies, then the game continues from the most recent checkpoint.

                </br></br><h2>Trailer: </h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/yDm6PAgNohU" frameborder="0" allowfullscreen></iframe>

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
                $read = fopen("comments-inside.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 2200px;">
                
                <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include 'Top10-Sidebar.php' ?>
            </div>

    </body>
</html>
