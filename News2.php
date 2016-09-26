
<html>
    <head>
        <meta charset="UTF-8">
        <title>News2</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <nav class="navigation">
            <ul id="nav">
                <li><a href="Home.php">HOME</a></li>
                    <li class="dropdown" style="position: relative; top:80%">
                          <div><a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">PLATFORM</a></div>
                          <div class="dropdown-content" id="myDropdown">
                            <a href="#">PS4</a>
                            <a href="#">XBOX ONE</a>
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
        
        <div id="wrapper">
            
            <div class="columns">
                <div id="review_col1">
                    <h1>Battle.net is no more</h1>
                    <img src="Images/News2.jpg" style="width: 675px; height: 400px;  ">
                    <h2> Battle.net has stopped all their games and services after 10 years due to selling their best game Overwatch to Steam </h2>
                    <p>Genji and Winston can be seen relatively often in pro play, but the pair can be used together to accentuate each other's strengths. Genji and Winston both have insane vertical mobility, making them prime candidates as divers—hence the name "Dive Bros."
In order to properly explain why Genji and Winston function so well as a pair, let's take a look at the math. Winston does 50 damage upon landing, alongside a decent 60 damage per second using his Tesla Cannon. Genji, on the other hand, can deal an immediate 50 damage with his Swift Strike, and can follow up with rapid right clicks (24 damage per shuriken). Of course, this game isn't only about math; the numbers coincide perfectly with Swift Strike's passive, which grants Genji a dash reset for each elimination he participates in. 
You can likely see where the math leads. Once the pair of divers can pick up a single kill, Genji can finally do his fair share by continually reseting his dash, slicing the opponents for 50 damage every time the player hits the shift key. This duo is especially effective against grouped bunches of enemies, as they can deal damage to multiple targets at once, making short work of the enemy team.
While the damage the pair outputs certainly looks large, you have to take into account that Lucio and Zenyatta will likely be buffing the defending teams, so the damage will certainly not be a straight 60 DPS from Winston in addition to Genji's. Still, the pair functions well, and Genji has enough burst to ensure that Zenyatta and Lucio's presences are not enough to ensure the enemies survive. </p>
                </div>
            </div>
       
            <div id="sidebar">
                <b>TOP 10 GAMES</b><br><br>
                <a href="Articles/Article(Warhammer).php"><img src="Images/Sidebar/warhammer_banner.png" alt="warhammer" width="300" height="65" border="0"></a>
                <a href="Articles/Article(QuadrilateralCowboy).php"><img src="Images/Sidebar/quad_banner.png" alt="quadrilateral" width="300" height="65" border="0"></a>
                <a href="Articles/Article(Doom).php"><img src="Images/Sidebar/doom_banner.png" alt="doom" width="300" height="65" border="0"></a>
                <a href="Articles/Article(DarkSoulsIII).php"><img src="Images/Sidebar/dsouls_banner.png" alt="darksouls" width="300" height="65" border="0"></a>
                <a href="Articles/Article(Inside).php"><img src="Images/Sidebar/inside_banner.png" alt="inside" width="300" height="65" border="0"></a>
                <a href="Articles/Article(Overwatch).php"><img src="Images/Sidebar/overwatch_banner.png" alt="overwatch" width="300" height="65" border="0"></a>
                <a href="Articles/Article(HeartsOfIronIV).php"><img src="Images/Sidebar/heartsofiron_banner.png" alt="heartsofironiv" width="300" height="65" border="0"></a>
                <a href="Articles/Article(Uncharted4).php"><img src="Images/Sidebar/uncharted4_banner.png" alt="uncharted4" width="300" height="65" border="0"></a>
                <a href="Articles/Article(Dota2).php"><img src="Images/Sidebar/dota2_banner.png" alt="dota2" width="300" height="65" border="0"></a>
                <a href="Articles/Article(JustCause3).php"><img src="Images/Sidebar/justcause_banner.png" alt="justcause3" width="300" height="65" border="0"></a>
            </div>
            
            
        </div>
        
        
        
        
    </body>
</html>
