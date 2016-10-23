<!-- Author: John Rafael Baroro -->
<!-- This file contains the news page (news 3) of the GameBuzz website -->
    <?php 
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>News</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>
        
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

        <div id="banner"></div>

        <div id="wrapper" style="height: 820px">
            <div class="columns" style="border-radius: 10px; padding: 5px; background-color: #5F5E5E;">
                <div id="review_col1">
                    <h1>Asian Gamers Unite!</h1>
                    <img src="Images/News3.jpg" style="width: 675px; height: 400px;  ">
                    <h2> After years of asians being undergods when it comes to games, the get their comeback! </h2>
                    <p>
                    The idea of hosting a Dota 2 tournament on a ship may seem a bit mad, but there was some solid reasoning behind it according to Tournament Director Wang Zilin, who spoke to us about the launch of KeyTV's new product.

                    "In China there are many tournaments now, but tournaments are almost the same, only a few can be remembered," said Wang Zilin, Tournament Director for the Cruise Cup. "We wanted to do something new and bring the audience a new experience. 

                    "Another reason is a LAN on a boat can combine tourism and competition perfectly. Players don’t have to waste time on flights, they can play games and travel on a boat at the same time. When we arrive Fukuoka (Japan) and Jeju (South Korea), players can get off the cruise ship and enjoy their time there."

                    "The idea was our own. Cruises are not very popular among young people, no internet on the high seas, slow pace of life etc. We decided if we could solve the internet problem, and add some activities that young people like, the cruise journey will be interesting. 

                     "As far as I know there have been some attempts to use a satellite for an online stream, but no one has ever tried to host an Esports tournament and Esports Festival on a Cruise ship before."</p>
                </div>
            </div>

            <div id="sidebar" style="height: 820px;">
                <center>    
                    <a href="Top10.php"><b><br>TOP 10 GAMES</b><br><br></a>
                    <a href="Games/Warhammer.php"><img src="Images/Sidebar/warhammer_banner.png" alt="warhammer" width="300" height="60" border="0"></a>
                    <a href="Games/QuadrilateralCowboy.php"><img src="Images/Sidebar/quad_banner.png" alt="quadrilateral" width="300" height="60" border="0"></a>
                    <a href="Games/Doom.php"><img src="Images/Sidebar/doom_banner.png" alt="doom" width="300" height="60" border="0"></a>
                    <a href="Games/DarkSouls3.php"><img src="Images/Sidebar/dsouls_banner.png" alt="darksouls" width="300" height="60" border="0"></a>
                    <a href="Games/Inside.php"><img src="Images/Sidebar/inside_banner.png" alt="inside" width="300" height="60" border="0"></a>
                    <a href="Games/Overwatch.php"><img src="Images/Sidebar/overwatch_banner.png" alt="overwatch" width="300" height="60" border="0"></a>
                    <a href="Games/HeartsOfIron4.php"><img src="Images/Sidebar/heartsofiron_banner.png" alt="heartsofironiv" width="300" height="60" border="0"></a>
                    <a href="Games/Uncharted4.php"><img src="Images/Sidebar/uncharted4_banner.png" alt="uncharted4" width="300" height="60" border="0"></a>
                    <a href="Games/Dota2.php"><img src="Images/Sidebar/dota2_banner.png" alt="dota2" width="300" height="60" border="0"></a>
                    <a href="Games/JustCause3.php"><img src="Images/Sidebar/justcause_banner.png" alt="justcause3" width="300" height="60" border="0"></a>               
                </center>
            </div>            
        </div>
    </body>
</html>
