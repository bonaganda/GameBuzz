

<html>
    <head>
        <meta charset="UTF-8">
        <title>News3</title>
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
