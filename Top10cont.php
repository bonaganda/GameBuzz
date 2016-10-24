<!-- Author: John Rafael Baroro -->
<!-- Insert description here -->

<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Top10</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>

        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function (e) {
                if (!e.target.matches('.dropbtn')) {

                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    for (var d = 0; d < dropdowns.length; d++) {
                        var openDropdown = dropdowns[d];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>  

        <div id="banner"></div>

        <div id="wrapper_top10" style=" height: 3500px">
            <div class="columns_top10">
                <a style="color: red;"><h1>Top 5 - 1</h1></a>
                <h2> Here are the best of the bests in the world of games!</h2>

                <div class="columns" style="height: 600px;  border-radius: 10px; padding: 10px; background-color: #5F5E5E;">
                    <h2>Number 5</h2>
                    <a href="Games/Inside.php"><h3> INSIDE - Score: 9.1 </h3></a>
                    <a href="Games/Inside.php"><img src="Images/inside.jpg" style="width: 675px; height: 400px;  "></a>
                    <p>Inside very clearly builds upon what made Limbo great, and in fact builds something greater. 
                        Its unimaginable twist may leave you dumbfounded, confused, and quite possibly speechless, but it will fuel heated discussion with 
                        your friends about its meaning, its message, and its intentions. It’s a short ride, but one I felt compelled to take again – including a 
                        search for its mysterious hidden orb collectibles. Play it soon before anyone spoils a single big moment for you. For us, its a 9.1 outta 10. </p>
                </div>

                <div class="columns" style="height: 600px;  border-radius: 10px; padding: 10px; background-color: #5F5E5E;">
                    <h2>Number 4 </h2>
                    <a href="Games/DarkSouls3.php"><h3> Dark Souls 3 - Score: 9.3 </h3></a>
                    <a href="Games/DarkSouls3.php"><img src="Images/ds.jpg" style="width: 675px; height: 400px;  "></a>
                    <p>If Dark Souls 3 truly is the last in the series as we know it, then it’s a worthy send-off. Weapon arts allow stylish and versatile 
                        new moves without tarnishing the purity of the combat system. Lothric’s awe-inspiring locations provide visually stunning arenas for rigorous 
                        exploration and fierce face-offs with hosts of deadly enemies and even deadlier bosses. While not all the risky changes land as neatly as others, 
                        Dark Souls 3 is a powerful journey and the sequel the series truly deserves. A must play for action game lovers out there, and a solid 9.3.</p>
                </div>

                <div class="columns" style="height: 600px;  border-radius: 10px; padding: 10px; background-color: #5F5E5E;">
                    <h2>Number 3</h2>
                    <a href="Games/Doom.php"><h3>Doom - Score 9.4</h3></a>
                    <a href="Games/Doom.php"><img src="Images/doom.jpg" style="width: 675px; height: 400px;"></a>
                    <p>Doom is a tale of two very different shooters (and one quirky creation tool). The single-player campaign's reverent worship of the series' roots 
                        results in an old-school run-and-gun shooter which feels like imitation Doom, a cover of an old hit which nails all the right power chords but 
                        isn't exactly transformative. The multiplayer's attempts to borrow from the new to reinvigorate the old results in an experience which won't 
                        satisfy either school of thought. SnapMap, meanwhile, is a blend of weird and simple and endearing. </p>
                </div>    

                <div class="columns" style="height: 615px;  border-radius: 10px; padding: 10px; background-color: #5F5E5E;">
                    <h2>Number 2</h2>
                    <a href="Games/QuadrilateralCowboy.php"><h3>Quadrilateral Cowboy - Score: 9.6</h3></a>
                    <a href="Games/QuadrilateralCowboy.php"><img src="Images/cowboy.jpg" style="width: 675px; height: 400px;"></a>
                    <p>Quadrilateral Cowboy’s puzzles are mostly a joy to play. Its command line hacking is surprisingly accessible and pleasingly tactile, 
                        and when combined with its many interesting gadgets it allows for plenty of creative problem-solving and freedom in tackling all manner of 
                        whimsical cybercrime. While not all of its levels shine as brightly as the rest, I’m already feeling beckoned back by its replayability and
                        charm, eager to experiment more with the futuristic, hacker-themed playground it so stylishly constructs. This intrigued are interest, and we 
                        recommend this for you to try as well. This game gets the number 2 spot with a score of 9.6! </p>
                </div>

                <div class="columns" style="height: 630px;  border-radius: 10px; padding: 10px; background-color: #5F5E5E;">
                    <h2>Number 1</h2>
                    <a href="Games/Warhammer.php"><h3>Total War: Warhammer - Score: 10</h3></a>
                    <a href="Games/Warhammer.php"><img src="Images/war.jpg" style="width: 675px; height: 400px;"></a>
                    <p>Total War: Warhammer is brimming with exciting ideas, interesting characters, and outright, skull-stompingly delightful units and faction 
                        mechanics. The current roster of starting positions in the campaign feels thin, but each army therein is a distinctly different experience. 
                        Some factions (Vampire Counts, Greenskins) are more fun than others (Dwarfs), but none feel underdeveloped or unfinished. Deep hero progression 
                        and a well-executed Chaos invasion round out a campaign that, while it has some flaws in set-up and pacing, fulfilled all of my deepest fantasies 
                        of seeing giant, impossible armies clashing amidst the shrieking of griffins and the glow of flaming meteors summoned from the sky. It’s just 
                        a damn good time. This game grabs our top spot at number 1 with a perfect score of 10!</p>

                    <div class="center">
                        <ul class="pagination">
                            <br>
                            <li><a href="Top10.php">«</a></li>
                            <li><a href="Top10.php">1</a></li>
                            <li><a class="active" href="Top10cont.php">2</a></li>
                            <li><a href="Top10cont.php">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

