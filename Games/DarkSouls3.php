<!-- Authors: John Rafael Baroro & Joni Pablo -->
<!-- This file contains the full article of the Dark Souls III game as well as the game trailer and the comment box -->

<?php
session_start();
$game = "DarkSouls3";
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
            header("Location: DarkSouls3.php");
        }
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Dark Souls III</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3000px;">

            <div class="columns">

                
                <a style="color: red;"><h1> Dark Souls 3</h1></a>
                
                <!--This shows the 'Add to favourite button-->
                <?php if(isset($_SESSION['username']) && ($row['favourite'] != $myfavourites)){
                        include '../Includes/Favebutton.php';  ?>
                <?php } else if(!isset ($_SESSION['username'])) {?>
                        <!--If  user is not logged on, favourite button is not shown-->
                <?php } else {?>
                        <input id="favebtn" type="button" name="favebtn" value="Favorited ♥" style="color: red">
                <?php } ?>
                
                <h2>Platform: PC, PS4 and XONE</h2> 
                
                DS3 is a role-playing action packed game which is played from a third-person perspective and similar to the other games in the series. Based from the series creator and lead director Miyazaki, the gameplay design is followed closely from Dark Souls II. The player is generally equipped with a range of weapons such as bows, swords and throwable projectiles in order to fight his/her enemies. A shield is also available to be used as a secondary weapon but their main use is to deflect the enemies’ attacks and protect the player from suffering damage. Each weapon in the game has two basic kinds of attacks, one is the standard attack and the other is somewhat more powerful that can be charged up like the game from FromSoftware called Bloodborne.</br></br>
                <img src ="../Images/d31.jpg" style="width: 675px; height: 400px;  " > </br></br>

                Moreover, the attacks can be evaded when the player dodge-rolls. The checkpoints in the game are the bonfires and these checkpoints return from previous instalments. The ashes on the other hand play an important role in the game. Magic is also featured in the game with a system returning from Demon's Souls which is now known as “focus points” (FP). In order to perform a spell, the player’s focus points are used. There are two type of Estus Flasks in the game which can be selected to fit a player’s certain play style. One can refill the hit points similar to the previous games in the series while the other can refill the focus points as the new feature in Dark Souls III.</br></br>
                <img src ="../Images/d32.jpg" style="width: 675px; height: 400px;  " > </br></br>

                The movements and combat side of the game were made faster and with several movements of the player’s such as swinging the heavy weapons and back stepping can now be performed more rapidly compared to before and this allows the player to inflict more damage in a short time.
                In the game, the players come across various types of enemies and each of them has a different behaviour. Some of which change their pattern for fighting during battles. There is also new combat features added in Dark Souls III such as weapons and skills that can shield which are special abilities that differ from weapon to weapon that allow exclusive attacks and features with the cost of the FPs’.</br></br>
                <img src ="../Images/d33.jpg" style="width: 675px; height: 400px;  " > </br></br>
                The game is more focused on role-playing in which the character builder is expanded and weapons are enhanced to offer more tactical choices to players. There fewer overall maps are larger and more detailed that encourages the player to explore them compared to Dark Souls II. Lastly, the stats are adjusted and features multiplayer elements.

                </br></br><h2>Trailer:</h2> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_zDZYrIUgKE" frameborder="0" allowfullscreen></iframe>

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
                    $old = fopen("comments-darksouls.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("comments-darksouls.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("comments-darksouls.html", "r+t");
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
    </body>
</html>
