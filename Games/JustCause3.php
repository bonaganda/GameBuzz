<!-- Authors: John Rafael Baroro & Joni Pablo -->
<!-- This file contains the full article of the Just Cause 3 game as well as the game trailer and the comment box -->

<?php
session_start();
$game = "JustCause3";
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
            header("Location: JustCause3.php");
        }
    }
    
}  
?>

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
                
                <!--This shows the 'Add to favourite button-->
                <?php if(isset($_SESSION['username']) && ($row['favourite'] != $myfavourites)){
                        include '../Includes/Favebutton.php';  ?>
                <?php } else if(!isset ($_SESSION['username'])) {?>
                        <!--If  user is not logged on, favourite button is not shown-->
                <?php } else {?>
                        <input id="favebtn" type="button" name="favebtn" value="Favorited ♥" style="color: red">
                <?php } ?>

                <h2>Platform: PC, PS4 and XONE</h2></br>
                Just Cause 3 is an open world adventure-action video game that is set on a fictional Mediterranean island known as Medici with Rico Rodriguez set as the main character. The map size is just like the setting of Just Cause 2 with 400sqm devoted to the new setting. Nevertheless, its volumetric terrain has increased to allow more vertically – as a result of this, it’s possible for the character to explore the subterranean caverns and to search the buildings more realistically and more efficiently. The world of the game consists of five key biomes, with each having distinctive landscapes and landmarks.<br><br>
                <img src="../Images/jc1.jpg" style="width: 675px; height: 400px;">

                <br><br>There are various equipment which are provided to players for traversal in the game. The signature features from the previous game such as grappling the hook and parachute have reappeared in Just Cause 3 with more enhanced mechanics. The concentration on disorder and overstated physics also remain. A new wingsuit has been created and equipped to the main character allows him to glide across the world faster. Additionally, a wide range of weapons like missile launchers and shotgun RPGs’, and vehicles such as ships, planes, fighter aircraft and exotic cars are included in the game. The vehicles in the game can be customised and can also be used as weapons.</br></br>
                <img src="../Images/jc2.jpg" style="width: 675px; height: 400px;">

                <br><br>Moreover, other game mechanics have been updated and overhauled. For example, Rico has the ability to tether and attach various items together with his grappling hook. Parachuting during the game has become more stable and even allows the users to shoot their enemies from the air. The character has also been given infinite C4. The C4 can be placed over the world but only three at a time is allowed or if the in-game ‘mods’ are used then up to five can be deployed. Players are allowed to move around the vehicles freely and they can liberate hostile towns and military bases in Just Cause 3. The destruction and creativity have been put emphasis on as well. The bridges and statues can be destroyed in several ways and Rebel Drop (a new mechanic) is a new featured added in the game. This allows the character to pause the game and choose any weapon, equipment and vehicles. After this, the items selected will be dropped into the game’s world. Lastly, the game features challenge modes where it includes mini games such as races and destruction frenzy mode, wherein if the player manages to destroy an enemy base then there are new challenges and objectives unlocked in the game.</br></br>
                <img src="../Images/jc33.jpg" style="width: 675px; height: 400px;">

                <br><br><h2>Trailer:</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-x1q7wY0koE" frameborder="0" allowfullscreen></iframe>

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
                $read = fopen("comments-justcause.html", "r+t");
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
