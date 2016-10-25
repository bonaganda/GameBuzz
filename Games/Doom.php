<!-- Authors: John Rafael Baroro & Joni Pablo -->
<!-- This file contains the full article of the Doom game as well as the game trailer and the comment box -->

<?php
session_start();
$game = "Doom";
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
            header("Location: Doom.php");
        }
    }
    
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Doom</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3000px;">

            <div class="columns">
                <a style="color: red;"><h1>Doom</h1></a>
                
                <!--This shows the 'Add to favourite button-->
                <?php if(isset($_SESSION['username']) && ($row['favourite'] != $myfavourites)){
                        include '../Includes/Favebutton.php';  ?>
                <?php } else if(!isset ($_SESSION['username'])) {?>
                        <!--If  user is not logged on, favourite button is not shown-->
                <?php } else {?>
                        <input id="favebtn" type="button" name="favebtn" value="Favorite ♥" style="color: red">
                <?php } ?>
                
                <h2> Platform: PC, PS4 and XONE </h2>
                This game was developed by ID sotware, which was the studio that had pioneered the genre of first-person shooting and developed a multiplayer deathmatch. DOOM returns as a fun but brutal and challenging modern-day shooter experience. There are relentless demons, unbelievably destructive guns and very fast, fluid movement provide the grounds for an intense, first-person combat – whether you are destroying hordes of demons in Hell in the single-player mode or competing with your friends in several multiplayer modes. You can also easily create, play and share your content with the world by using the DOOM SnapMap game editor. </br></br>
                <img src ="../Images/doom1.jpg" style="width: 675px; height: 400px;  " > </br></br>

                The game is essentially in a Union Aerospace Corporation’s massive research facility located in Mars. It has been overwhelmed by powerful and ferocious demons and only one person stands between their world and the world of humans. The player is the lone DOOM Marine and has been activated to do one thing which is to kill all of them.
                A key feature of the game is the relentless campaign. In this game, there isn’t any taking cover or stopping to regenerate the player’s health as he/she beats the Hell’s raging demon hordes. Iconic guns, upgrades, movement and an advanced melee system to knock-down, crush, stomp, slash, and blow the demons apart in violent and creative ways. </br></br>
                <img src ="../Images/Doom2.jpg" style="width: 675px; height: 400px;  " > </br> </br>

                Next, there is a return of the id Multiplayer. The player can dominate his/her opponents in DOOM’s signature, fast-paced arena-style combat. In both of the classic and all-new game modes, they can annihilate their enemies by utilizing their personal blend of skill, powerful weapons, vertical movement and exclusive power-ups that enable them to play as a demon. </br> </br>
                <img src ="../Images/Doom 3.jpg" style="width: 675px; height: 400px;  " > </br></br>
                A DOOM SnapMap is also available for use to expand the user’s gameplay experience. It is a powerful yet easy to use game and level editor. This enables for unlimited gameplay experiences on every platform. There is no need for previous experience or any special expertise as the users can rapidly and simply snap together and visually modify maps, add pre-defined or fully custom gameplay, and even edit game logic to produce new modes. Directly play your creation, share it with your friends or make it accessible to other players from around the globe – all in-game with just a push of a button. 

                </br></br><h2>Trailer:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/RO90omga8D4" frameborder="0" allowfullscreen></iframe>

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
                        $write = fopen("comments-doom.html", "w+");
                        $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                        fwrite($write, $string);
                        fclose($write);
                        fclose($old);
                    } else {
                        echo "<script language=javascript>alert('Must be logged in to leave comments!')</script>";
                    }
                }

                #Read comments
                $read = fopen("comments-doom.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 3000px;">
                
                <!-- Calls the Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include 'Top10-Sidebar.php' ?>
            </div>
            </div>
             <?php include '../footer2.php'; ?> 
    </body>
</html>
