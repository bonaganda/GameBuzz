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
        <title>Dota 2</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3600px;">

            <div class="columns">
                <a style="color: red;"><h1>Dota 2</h1></a>

                <h2>By: Mr Pinkerton</h2> 
                We’ve never heard anyone talk about League of Legends or Dota in real life. We don’t know any friends that play them and we don’t even recall any fellow journos discussing them. Nor do we remember anyone writing into the Inbox about them. And yet on any given day they have over 10 million people playing them, and the mere announcement of Dota 2’s existence was enough to crash the websites reporting it.</br></br></br>

                <img src ="../Images/Kim/dota2.jpg" style="width: 675px; height: 400px;  " > </br></br>
                </br>This juxtaposition between objective success and subjective celebrity has always been an issue for PC games, where their lack of prominence on the high street and in sales charts (due to most being purchased digitally) makes them all but invisible to most mainstream gamers. The same will certainly be true of Dota 2, which has no plans for a retail release or any interest in normal video game marketing.</br></br></br>

                Although the significance of the game’s name has now largely been lost, originally DotA stood for Defense Of The Ancients. It began life in 2003 as a fan-created mod for Warcraft III, inspired by the Aeon of Strife map for the original Starcraft. Its original creator has long since left the scene and the concept is now overseen by the anonymous ‘IceFrog‘, who was invited to lead a team at Half-Life creator Valve to create this sequel. (That’s something Warcraft maker Blizzard weren’t too happy with at first, but although the mod was originally created and inspired by their games they have no direct connection to it.) Given its roots Dota 2 looks and controls very much like a real-time strategy game, but rather than ordering around dozens of faceless troops you control only one ‘hero’ unit, who can be levelled up in the manner of normal role-playing games. There are still computer-controlled allies to organise but the game is primarily a team-based battle of between four and 10 players.</br>
                </br></br><img src ="../Images/Kim/dota3.jpg" style="width: 675px; height: 400px;  " > </br></br></br>

                Nowadays games like Dota and League Of Legends are described as MOBAs, which stands for multiplayer online battle arena – a laughably unhelpful term which is strangely fitting given how infamously difficult the games are to get into. And how notoriously unpleasant and elitist their online community tends to be. These are problems Valve is obviously aware of but the suite of tutorials is strangely incomplete at launch, perhaps because Valve wants to concentrate on getting existing fans onside from the start. Even so, the basics of the game are fairly easy to grasp, with each team trying to protect their starting base – from which the drone-like computer-controlled troops are spawned. Matches last around 20 minutes to an hour – which is short for a real-time strategy game – and odd as it may seem there’s only one map. But that’s like saying there’s only one board for chess, and if and when Valve create a new one (as they’ve hinted they will) it’ll make far more difference to the game than all the other changes in Dota 2 combined. Even so, the single map seems all the more bizarre given that there are 102 different heroes, each with four unique skills and the choice to use over a hundred different items. We don’t dare to calculate how long it’d take to experience each of these permutations even briefly, but it goes a long way to explaining how the game eats up so many man hours of people’s time.</br></br></br>

                More than any other multiplayer game Dota 2 and its peers are much more like sports than they are traditional video games. You don’t learn the ropes in a few hours, get to prestige level in a month or two, and then just sit back and wait for the next yearly sequel. Most veteran Dota players will tell you it takes a good six months to become confident with a wide range of characters, and even then you’ll only be skimming the surface. The trick (and again this is in part to avoid the community) is to learn with friends, so that you all start at the same level and the learning experience becomes a social event – the equivalent of setting up a Sunday league football team.
                But the social aspect is not just a side benefit of playing the game; it’s a vital part of learning to play as a team. Although you only control one character at a time you’ll never get anywhere unless you can coordinate with your allies and make sure your attacks, retreats, and feints are part of a united front.</br></br></br>

                Rather than just reading about the features and watching videos the only way to tell whether you’re going to like Dota 2 is to try it. And considering it’s free (there are microtransactions, but only of the Team Fortress cosmetic sort) that doesn’t require much of an effort. The steep learning curve and unhelpful veterans are the only real obstacles to your enjoyment, but that too is not very different from getting into a new sport. However, the sporting comparisons do not mean that Dota 2 is beyond criticism, the most obvious being this clearly isn’t a sequel at all – in any commonly accepted sense of the word. The graphics and presentation are better but there’s very little fundamental change anywhere else. In particular Dota 2 doesn’t address the problem, present in all MOBA games, that once you begin getting an advantage in terms of the level of your characters it’s almost impossible for your opponent to stage a comeback.
                And if they decide to dig their heels in that just means a protracted endgame that can last 20 minutes or more and is no fun for anyone. Whether Valve continues to see that as all part of the fun or a problem to be fixed we’ll have to wait and see. But we’ve no doubt that the game will be on the receiving end of a fleet of additions and revisions for years to come. After all, it takes that long just to master the game and it’ll take considerably longer than that to get tired of it.
                </br></br></br>
                
                In Short: Gaming’s ultimate eSport gets a well-considered makeover by the masters at Valve, although new ideas, and fixes for old problems, are currently thin on the ground.</br></br>

                <center>
                    </br><h2>GameBuzz Rating:</h2>
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
                    $old = fopen("CommentsDoata2.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("CommentsDota2.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("CommentsDota2.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 3600px;">
                <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include '../Games/Top10-Sidebar.php' ?>
            </div>
    </body>
</html>
