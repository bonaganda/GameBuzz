<!-- Author: Kimberley Capati -->
<!-- This file contains the review page for Overwatch of the GameBuzz website -->

<?php
    session_start();
    include '../Database.php';
    if(isset($_SESSION['username'])) {
        require '../Includes/Favourites.php';
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Overwatch</title>
        <link rel="stylesheet" type="text/css" href="../Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include '../Includes/Navbar_1.php' ?>

        <div id="banner">
        </div>

        <!-- Adds the website's wrapper -->
        <div id="wrapper" style="height: 3000px;">

            <div class="columns">
                
                <!-- The section below is the article for Overwatch -->
                <a style="color: red;"><h1>Overwatch</h1></a>

                <h2>By: Dustin Chadwell</h2> 
                While I’ve generally enjoyed Blizzard’s output for quite some time, like most, I wasn’t entirely sure of what to expect with Overwatch. While Blizzard has certainly made a name for themselves in RTS / RPG circles over their many, many years of existence, a team-based shooter didn’t exactly seem like a perfect match to me. That said, as more and more of Overwatch came to light during the development process, and as various closed/open betas rolled around, it became clear we had little to worry about. And now that the finished product is here? Well, Overwatch has put most multiplayer shooters to shame much in the way that DOOM did for shooter campaigns just a couple weeks ago.</br></br></br>
                
                <img src ="../Images/Kim/overwatch3.jpg" style="width: 675px; height: 400px;  " > </br></br>
                </br>On the surface, there doesn’t seem to be a whole lot to Overwatch. It’s certainly not a mode heavy sort of shooter, with no single player campaign to speak of, and a single rotating special mode that rolls around weekly in addition to the standard rotation of maps. There’s 12 maps at the onset, and a solid roster of characters to play, but when looking at the features on paper, Overwatch does seem a bit bare. Thankfully that’s offset by how much fun it is to play, and how utterly addicting the game can be. I’ve had a hard time tearing myself away from playing it this week, and will likely devote dozens if not hundreds of hours to the game going forward.</br></br></br>
                
                The learning curve with Overwatch is hardly severe. Don’t get too hung up on class roles and skills, instead just work your way through the roster and see what ends up fitting your preferred playstyle. Despite characters filling similar roles, like tanks, support, attack and so on, they all feel pretty unique. And it doesn’t take long to figure what character works well on any given map, or gravitates towards defense or offense. By and large, most characters work well with just about anyone, meaning you can generally pair up with another character and perform effectively, even if they don’t seem particularly compatible at first.</br>
                </br></br><img src ="../Images/Kim/overwatch2.jpg" style="width: 675px; height: 400px;  " > </br></br>
                
                I also love the overall look of Overwatch. It’s a bright, vibrant take on first-person shooters that we still don’t see all that often. The character designs are fun and cartoony, and lend themselves well to fan-scripted backstories and theories. And it’s not just the character design, but also the map design, skins, music, and voiceover work that manages to blend Overwatch into a cohesive, fun, all-ages work of art.</br></br></br>
                
                Finally, Overwatch controls and plays like a dream. Even on consoles, which is my only experience with the game so far, the performance is generally buttery smooth. The various abilities that each character possesses are generally fun to perform and pull off, and the ability to access ultimate powers over time means that everyone typically has a moment to shine in any given match. Also, since there’s a healthy roster of characters present at the start of the game, it means that most matches will feel like something unique, even if the overall objective isn’t. Team composition can also be changed after every respawn, allowing every match to evolve the longer it continues. All in all, Overwatch continues to feel unique regardless of how much time you spend with it, and despite the low number of available modes to participate in. I’m genuinely impressed by what Blizzard has managed to do here, and I think you will be too.</br></br>
                
                <!-- Game Review Rating -->
                <center>
                    </br><h2>GameBuzz Rating:</h2>
                    <img src ="../Images/Kim/4star.png"></br></br></br>
                    <img src ="../Images/Kim/graphrating3.png"></br>
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
                    $old = fopen("CommentsOverwatch.html", "r+t");
                    $old_comments = fread($old, 1024);

                    #Delete everything, write down new and old comments
                    $write = fopen("CommentsOverwatch.html", "w+");
                    $string = "<b><br>" . $name . "</b><br>" . $content . "</br>" . $old_comments . "</br>";
                    fwrite($write, $string);
                    fclose($write);
                    fclose($old);
                }

                #Read comments
                $read = fopen("CommentsOverwatch.html", "r+t");
                echo "<br><br>Comments<hr>" . fread($read, 1024);
                fclose($read);
                ?>       

                <!-- End of Comment Section -->

            </div>

            <!-- Adjust sidebar size -->
            <div id="sidebar" style="height: 3000px;">
                <!-- Calls Top10-Sidebar.php and displays it in the page's sidebar -->
                <?php include '../Games/Top10-Sidebar.php' ?>
            </div>
            </div>
             <?php include '../footer2.php'; ?> 
    </body>
</html>
