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
        <title>Uncharted 4</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <div id="wrapper" style="height: 3750px;">

            <div class="columns">
                <a style="color: red;"><h1>Uncharted 4</h1></a>

                <h2>By: Michael Thomsen</h2> 
                The trouble with trilogies is that they almost never end at three. The same kind of thinking that assumes three parts will be necessary to tell a single story will inevitably need a fourth and fifth shot at getting things right. In that way, “Uncharted 4: A Thief’s End” feels as inevitable as it does unnecessary. Each new entry has strained to add something new to its post-Imperialist pulp fantasies of treasure hunting in far-away lands. It’s a game in which a character reaching for a door knob might trigger the whole building to collapse, leaving them left dangling by three fingers over a subterranean chasm.</br></br>
                
                </br>The first three games followed Nathan Drake in search of treasures lost to the modern world — El Dorado, Shangri-La, and Iram of the Pillars. They were weightless fables in which a hero did the work of nations — sneaking across borders, driving into areas still untouched by government census or GPS satellites, and hopefully walking away with a few crates of gold for his trouble.</br></br></br>
                
                <img src ="../Images/Kim/uncharted2.jpg" style="width: 675px; height: 400px;  " > </br></br>
                </br>As a video game, this sense of adventuring was reduced to three essential pieces — long shootouts against mercenaries; interludes of cliff-climbing and ruins-clambering; and lavish movie sequences in which characters try to establish some emotional bond between an unlikely crew of helpers stuck working with Nathan. The games never made the case for why Nathan thought this was a better way to find a fortune than day trading, but the thrill of dangling from a newly disgorged tree root while being fired upon by RPGs was enough to make the series a success.</br></br></br>
                
                “A Thief’s End” attempts to add something new to this formula by digging deeper into the psychology of its hero. The title and gloomy cover art suggest that someone’s going to have to die in order to gift players with enlightening insight into the business of treasure hunting. Will the man who defined himself through action be undone by the horrors of self-reflection?</br></br>
                
                </br>In an interview with Eurogamer, the game’s creative director Neil Druckmann promised to, more or less, burn the house down on his way out: “with the end of this story it will be really hard to do a sequel with Nathan Drake. Maybe there’ll be a prequel, maybe it will be a different character — I don’t know. But this is the end for Nathan Drake.” It sounds almost too good to be true.</br></br>
                
                “A Thief’s End” begins with Nathan having already quit. He’s retired from treasure hunting and happily married to Elena, the photojournalist who tagged along on his first adventure. The couple is leading a comfortable middle class life in New Orleans when Nathan’s brother Sam randomly appears. Nathan thought Sam had died during a caper in Panama 15 years earlier, but instead he was just stuck in a local prison, from which he escaped by promising a local drug lord money from a mythical treasure he and Nathan had been tracking when they were separated all those years back — the forgotten booty of the 17th Century pirate Henry Avery.</br></br>
                
                Nathan is guilted out of retirement and plunged back into the familiar whorl of guns and survivalist parkour to save his brother’s skin, a man who’s incrementally more reckless and selfish than Nathan. This is telegraphed by the vague cosmetic sleights of a dubious neck tattoo and receding hairline.</br></br></br>
                
                <img src ="../Images/Kim/uncharted3.jpg" style="width: 675px; height: 400px;  " > </br></br></br>
                The first few hours of the game jumps backward and forward through time, making it seem like there might be more behind each unanswered question than there is. The second half becomes a laborious trudge across a small but inexhaustible part of the Malagasy coast searching for the lost pirate colony of Libertalia. The brothers argue about their dead mother and Nathan begins to wonder whether his commitment to his last remaining blood relation is ruining his marriage. They process their feelings by shouting lines at each other like: “This has nothing to do with that!” And “This has everything to do with that!”</br></br>
                
                The “Uncharted” games have never excelled at storytelling. Instead, they’ve used it an accompaniment to overwhelming visual technology. The games have always struck me as garish more than gorgeous, more interested in overwhelming the senses than communicating with them. “A Thief’s End” is overflowing with useless detail. It overwhelms the eye with so many different points of focus that one almost clings to the over-the-shoulder focal point at the center of the screen, where the gun reticle can at least hint at a potential ways of engaging with all of the simulated objects and effects that are otherwise impossible to identify, let alone differentiate.</br></br>
                
                The best moment in “A Thief’s End” happens in the beginning, before there’s been time to think too much about any of these questions.</br></br>
                
                Nathan is scuba diving through shallow waters looking for a crashed cargo container a client has hired him to bring back to dry land. It could be filled with diamonds or ghostly mementos from some extinct civilization. He could be in the waters of Madagascar or Malaysia but, after finding all the loose crates and cinching the container to a pulley, Nathan resurfaces and we discover he’s in a muddy New Orleans river pulling up a shipment of copper wire for a trucking company that has had an accident on a bridge. The player is as easily convinced as the protagonist that there must be something worth salvaging in the wreckage, and the developers’ primary job is to ensure the wreck is big enough and detailed enough to not immediately give away the secret. “A Thief’s End” is less a conclusion to Nathan Drake’s story than an affirmation of the inconclusive wreck it has always been.</br>
                
                
                
                <center>
                    </br></br><h2>GameBuzz Rating:</h2>
                    <img src ="../Images/Kim/halfstar.png"></br></br></br>
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
                    $old = fopen("CommentsUncharted4.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("CommentsUncharted4.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("CommentsUncharted4.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 3750px;">
                <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include '../Games/Top10-Sidebar.php' ?>
            </div>
    </body>
</html>
