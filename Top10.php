<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Top10</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>
        <nav class="navigation">
            <ul id="nav">
                <a href="Home.php"><img src="Images/Logo/GBLogosmall.png" width="232" height="50" id="logo" /></a> 
                <li><a href="Home.php">HOME</a></li>
                <li class="dropdown" style="position: relative; top:">
                    <div><a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">PLATFORM</a></div>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="#">PS4</a>
                        <a href="#">XONE</a>
                    </div>
                </li> 
                <li><a href="Reviews.php">REVIEWS</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Login.php#">LOGIN</a></li>
            </ul>
        </nav>
        
        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }


            window.onclick = function(e) {
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
      
        <div id="banner">
        </div>
        
        <div id="wrapper_top10">
            <div class="columns_top10">
                <a style="color: red;"><h1>Top 10 Games of 2016!</h1></a>
                <h2> Here are the best of the bests in the world of games!</br> </br></h2>
                <h2>Number 10</h2>
                <h3>Just Cause 3 - Score: 8.4 </h3>
                <img src="Images/jc3.jpg" style="width: 675px; height: 400px;  ">
                <p>Just Cause 3 is a playground where you get to be a physics-defying force of destruction, and its loop of liberating dozens
                    of towns across this enormous scenic world would’ve gotten old much quicker if the combat wasn’t so full of options for free-form mayhem. Getting the most out of it requires some  
                    creativity and tolerance for performance bugs on your part, so come expecting to make at least some of your own fun. We gave it a score of 8.4, making it's spot at number 10. </p>

                <h2>Number 9 </h2>
                <h3> Dota 2 - Score: 8.5 </h3>
                <img src="Images/d2.jpg" style="width: 675px; height: 400px;  ">
                <p>Dota 2 deserves its intimidating reputation, and it probably won’t suit you if you’re looking to play casually. There’s a huge time investment before you can even enjoy a game, let alone feel competent at it. But once you start to learn its secrets, there’s a wild and exciting variety of play here that’s unmatched, even by its peers. It’s a challenge of knowledge as well as reflexes, and success is a rush. The fact that it’s completely and totally free to play in the way we wish all free-to-play games could be isn’t just one of the most generous propositions anywhere in gaming, it creates a level playing field where skill and cooperation is paramount. With this, we have scored Dota 2 a decent 8.5, overtaking Just Cause 3 for the number 9 spot.</p>

                <h2>Number 8</h2>
                <h3>Uncharted 4 - Score 8.8</h3>
                <img src="Images/uncharted4.jpg" style="width: 675px; height: 400px;">
                <p>Uncharted 4: A Thief’s End is a remarkable achievement in blockbuster storytelling and graphical beauty. Though it’s  let down by a lack of imagination and some self-indulgence, especially in a third act that drags on far too long, Uncharted 4 carries on the series’ proud tradition of peerless polish and style, with a great multiplayer component to boot. Most importantly, it’s a gentle sendoff to the rag-tag group of characters we’ve known for nine years. For this game, we gave it an 8.8. A worthy thief’s end, indeed. </p>

                <h2>Number 7</h2>
                <h3>Hearts of Iron IV -Score: 8.9</h3>
                <img src="Images/soldier.jpg" style="width: 675px; height: 400px;">
                <p>You get a beautiful, thrilling wargame out of that bargain. While we found a number of flaws when we stood close to the tapestry, it's important to remember that Hearts of Iron 4 exists to encompass the whole sweep of the war. It captivates us because—imperfectly, impressionistically, and perhaps a little amorally—it lets us orchestrate the most titanic armed struggles in history, from the fussy economic details to the cut-and-thrust of mechanized warfare. There are other great strategic-level wargames out there. But we have never played anything like Hearts of Iron 4, and for that we gave it a whopping 8.9 as the score to take the number 7 spot! </p>
                
                <h2>Number 6</h2>
                <h3>Overwatch - Score: 9.0</h3>
                <img src="Images/ow.jpg" style="width: 675px; height: 400px;">
                <p>Overwatch is an incredible achievement in multiplayer shooter design. It bobs and weaves almost perfectly between being the quick-fix adrenaline hit you might want after a long day of work, and the thoughtful, strategic multiplayer experience that becomes the center of evening-long binges with friends. It might not have the most exhaustive list of maps and modes, but it provides nearly endless opportunities for exhilarating, coordinated play, and when you’re the one at the center of it, it feels like nothing else. Overwatch was a very solid game, and we gave it a flat solid score of 9.0. </p>

                </br></br>

                <input type="button" name="b2" value="next" onclick="location.href='Top10cont.php'">
            </div>
        </div>
        
    </body>
</html>


