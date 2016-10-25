<?php
    session_start();
    include '../Database.php';
    if(isset($_SESSION['username'])) {
        require '../Includes/Favourites.php';
    }
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

        <div id="wrapper" style="height: 2800px;">

            <div class="columns">
                <a style="color: red;"><h1>Just Cause 3</h1></a>

                <h2>By: Aidan Collett</h2> 
                Just Cause 3 is the latest instalment in the infamous Just Cause series, which is famous for being the video game equivalent of a bull in a china shop. With heat-seeking grenades. And a parachute. Where the china explodes easily. So it’s quite a lot of fun.</br></br></br>
                <img src ="../Images/Kim/justcause01.jpg" style="width: 675px; height: 400px;  " > </br></br>
                
                <center></br>“In JC3, the SAM sites have turned into HAM sites”</br></br></center>
                
                </br>JC3 has ruined the crucial freedom that made JC2 so enjoyable. It has adopted a more regimented, more organised way of entertaining the player, in a way not dissimilar to Far Cry. Rico now has to liberate regions, by liberating the outposts, military bases and towns contained within that region in order to continue along with the story missions. For me, this is an unprecedented and unnecessary infringement on the player’s liberty in the game, and makes JC3 a linear slog, rather than the enjoyable chaos fest I had hoped for. In place of blasting in and destroying everything in sight, you have to actually try to clear an area in order to proceed with the game. Forced, organised fun is no sort of fun at all. It really irks me when a game says “Hey! In order to fully enjoy this game, you need to destroy these 4 settlements, so then you can turn off the EMP that guards the next step on the journey, and here is a bunch of collectables for you to collect in the meantime.” Nothing screams fun like having to collect 18 pieces of a vintage weapon in order to unlock it, or having to collect every single car in the game and drive it to a garage so you can order it. There is literally nothing I would rather do in my free time than slog across the map, trying to find an elusive final rebel shrine so I can unlock a paintjob for my guns.</br></br></br>
                <img src ="../Images/Kim/justcause02.jpg" style="width: 675px; height: 400px;  " > </br></br>
                
                <center></br>“Forced, organised fun is no sort of fun at all”</br></br></center>
                
                </br>Except for play the damn game. And this seems to be what developers are finding difficult at the moment. They think the consumer wants a product that will absorb them from their drab lives, and simply suck the life out of them. So longevity comes before quality or enjoyment. Just Cause 3 is a perfect example of this philosophy. They have ruined the best bits of the old game in favour of creating a bigger world with more things to collect. Crucially, it’s not fun anymore, and I can’t recommend buying it. Go and replay JC2 if you really need your fix, and leave JC3 in CEX where it belongs.
                
                <center>
                    </br></br><h2>GameBuzz Rating:</h2>
                    <img src ="../Images/Kim/3star.png"></br></br></br>
                    <img src ="../Images/Kim/graphrating5.png"></br>
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
                    $old = fopen("CommentsJustCause3.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("CommentsJustCause3.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("CommentsJustCause3.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 2800px;">
                <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include '../Games/Top10-Sidebar.php' ?>
            </div>
            </div>
             <?php include '../footer.php'; ?> 
    </body>
</html>
