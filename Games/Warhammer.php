<!-- Authors: John Rafael Baroro & Joni Pablo -->
<!-- This file contains the full article of the Warhammer game as well as the game trailer and the comment box -->

<?php
session_start();
$game = "Warhammer";
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
            header("Location: Warhammer.php");
        }
    }
    
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Total War: Warhammer</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3200px;">

            <div class="columns">
                <a style="color: red;"><h1>Total War: Warhammer</h1></a>
                
                <!--This shows the 'Add to favourite button-->
                <?php if(isset($_SESSION['username']) && ($row['favourite'] != $myfavourites)){
                        include '../Includes/Favebutton.php';  ?>
                <?php } else if(!isset ($_SESSION['username'])) {?>
                        <!--If  user is not logged on, favourite button is not shown-->
                <?php } else {?>
                        <input id="favebtn" type="button" name="favebtn" value="Favorite ♥" style="color: red">
                <?php } ?>

                <h2>Platform: PC</h2> 
                Warhammer is a video game that is based on turns and real-time tactical battles between armies. The video game was developed by Creative Assembly and then later on published by Sega. The gameplay of the Total War series are featured along with the factions of Games Workshop’s Warhammer series. In the Total War Series, it is the 10th title and the first title to be released in the Total War: Warhammer trilogy.
                There are four playable factions featured in the game:
                The Empire of Man, The Dwarfs, The Vampire Counts and The “Greenskins”. There are two other playable factions – The Beastmen and the Chaos Warriors that are available as paid downloadable content.
                Warhammer presents a fantasy setting plus characters from the Warhammer universe. The player can control the characters (warriors, heroes and monsters). </br></br>
                <img src ="../Images/war1.jpg" style="width: 675px; height: 400px;  " >

                </br></br>Furthermore, the Chaos faction was indeed free to those who had pre-ordered or purchased it in the week it was firstly released and afterwards available as a downloadable content. In custom and multiplayer battles with a decreased unit roster, the Bretonnia faction is accessible.
                Each faction in the game can access their own distinctive units. For example, the Greenskins faction features units like Giants, Arachnarok spiders and Trolls. The human faction called the Empire features units like the Demigryph Knights and Steam Tanks. Each faction has their own dedicated campaign element. An example would be, a “Waaagh” system wherein this drives the player to be frequently on the warpath, is very unique to the Greenskins faction. There is also a new quest mode that features the battles such as the “The Battle of Blackfire Pass”, this asks the players to complete their missions and battles in order to receive unlockable items and abilities. Dragons and other flying creatures also make appearances in the game.</br> </br>
                <img src ="../Images/war2.jpg" style="width: 675px; height: 400px;  " > </br></br>

                The campaign map is slightly akin to the one in Attila with the exception being the diversity in the physical terrain and climate as one moves from a specific point in the map to another. The campaign map spans to different areas from north to south and west to east.  Another element that has been introduced in Warhammer is Magic, with most of the factions like Vampire Counts and Empire having access to different kinds of magic and particular factions, e.g. Dwarfs and some non-playable AI-controlled factions, having completely none or even limited access to magic.
                Moreover, agents are featured in the battles and on the campaign map.</br></br>
                <img src ="../Images/war3.jpg" style="width: 675px; height: 400px;  " > </br></br>
                Agents are attached to an army for the first time can take part in battles and give your side an edge depending on the type of the agent. Named agents can get injured in battles whilst the unnamed agents can be killed and can’t be brought back to life again. Warhammer also features a various kinds of animations e.g. there are around 30 different types of body and skeletons in the game instead of five or six in its predecessors and so as the flying units. Diplomacy, unit-building and city-building are available in the game. Lastly, Corruption, an external element is featured which is caused by the presence of Chaos armies and Vampire Count rather than internal aspects. 

                </br></br> <h2>Trailer: </h2> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HyU_1-Py0dA" frameborder="0" allowfullscreen></iframe>

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
                        $write = fopen("comments-war.html", "w+");
                        $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                        fwrite($write, $string);
                        fclose($write);
                        fclose($old);
                    } else {
                        echo "<script language=javascript>alert('Must be logged in to leave comments!')</script>";
                    }
                }

                #Read comments
                $read = fopen("comments-war.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 3200px;">
                
                <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include 'Top10-Sidebar.php' ?>
            </div>
            </div>
             <?php include '../footer2.php'; ?> 
    </body>
</html>
