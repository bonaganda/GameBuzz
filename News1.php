<html>
    <head>
        <meta charset="UTF-8">
        <title>News1</title>
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
                    <h1>Zarya was predicted and confirmed lesbian!</h1>
                    <img src="Images/News1.jpg" style="width: 675px; height: 400px;  ">
                    <h2> After many report and interviews denying she was gay, there are lots of proofs of her dating tracer in public </h2>
                    <p>If you only have the ability to put in a few hours per week to help out with coverage, we can aid you in your development as a content creator. For those with the time and talent to make a significant impact straight away, there is equally the chance to make a name for yourself in one of the fastest-growing media areas globally. While the majority of the GG.net crew members work on voluntary basis, the industry is growing rapidly and our site is the perfect place to begin your journey within it. You will be working with your crew leader closely to coordinate tasks, but most of the time you will set your own tempo, and have the freedom to discover just how far you can go.
Take initiative and assign tasks to yourself: we love people who don’t need to be babysat and ordered around. If you want to write an article about an event – or if you want to help with the ticker by taking care of match data, go for it!
Use Skype and crew forums to communicate with the crew: our team is online most of the time, busy not having lives at all…</p>
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

