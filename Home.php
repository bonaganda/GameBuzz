<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
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


        <div id="wrapper">
            <div class="columns">
                <div id="news_area">
                    <div class="mySlides fade">
                        <a href="News1.php"> <img src="Images/News1.jpg" style="width: 675px; height: 400px"></a>
                        <div class="text">Heroes of the Storm rated as the shittest game on the world, and zarya just got nerfed!</div>
                    </div>            

                    <div class="mySlides fade">
                        <a href="News2.php"> <img src="Images/News2.jpg" style="width: 675px; height: 400px"></a>

                        <div class="text">BattleNet is finally closing after selling overwatch to steam!</div>
                    </div>

                    <div class="mySlides fade">
                        <a href="News3.php"> <img src="Images/News3.jpg" style="width: 675px; height: 400px"></a>
                        <div class="text">Asian pro team has decided to invade oceanic territory but lost to the mere ozies</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <br>

                    <div style="text-align:center">
                        <span class="dot" style="position:absolute;right:50%;top:90%" onclick="currentSlide(1)"></span> 
                        <span class="dot" style="position:absolute;right:47%;top:90%" onclick="currentSlide(2)"></span> 
                        <span class="dot" style="position:absolute;right:44%;top:90%"onclick="currentSlide(3)"></span> 
                    </div>

                    <script> var slideIndex = 1;
                        showSlides(slideIndex);

                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }

                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("dot");
                            if (n > slides.length) {
                                slideIndex = 1;
                            }
                            if (n < 1) {
                                slideIndex = slides.length;
                            }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                        }
                    </script>

                    <img src="Images/Article Images/divider.png" alt="divider" width="700" height="5" border="0"><br><br>

                    <!--Article Section*-->

                    <div id="article_column">

                    <!--Article title-->

                        <a href=""><b>&nbsp;&nbsp;ARTICLES</b><br><br></a>
                        <!--<center>-->
                            <!--List of game articles-->
                            <a href="Games/Warhammer.php"><img src="Images/Article Images/TotalWar.png" alt="warhammer" width="600" height="350" border="0"></br></a>
                            <font size ="3">
                            <a href="Games/Warhammer.php"><b><br>TOTAL WAR: WARHAMMER</b><br></a>
                            </font>
                            <p align="left">
                                Total War: Warhammer is a video game that is based on turns and real-time tactical battles between armies. The video game was developed by Creative Assembly and then later on published by Sega. The gameplay of the Total War series are featured along with the factions of Games Workshop’s Warhammer series. In the Total War Series, it is the 10th title 
                                and the first title to be released in the Total War: Warhammer trilogy. 
                                <a href="Games/Warhammer.php"><b>Read More..</b></a>
                            </p><br>                   
                            
                            <a href="Games/QuadrilateralCowboy.php"><img src="Images/Article Images/Quadrilateral.png" alt="quadrilateral cowboy" width="600" height="350" border="0"></br></a>
                            <font size ="3">
                            <a href="Games/QuadrilateralCowboy.php"><b><br>QUADRILATERAL COWBOY</b><br></a>
                            </font>
                            <p align="left"> 
                            Quadrilateral Cowboy is a puzzle video game developed by Blendo Games. It was released in July 2016 for Microsoft Windows, with Mac OS X and Linux versions to come in September 2016.
                            <a href="Games/QuadrilateralCowboy.php.php"><b>Read More..</b></a>
                            </p><br>

                            <a href="Games/Doom.php"><img src="Images/Article Images/Doom.jpg" alt="doom" wwidth="600" height="350" border="0"></a>
                            <font size ="3"></br>
                            <a href="Games/Doom.php"><b><br>DOOM</b><br></a>
                            </font>
                            <p align="left"> 
                                This game was developed by ID sotware, which was the studio that had pioneered the genre of first-person shooting and developed a multiplayer deathmatch. DOOM returns as a fun but brutal and challenging modern-day shooter experience. There are relentless demons, unbelievably destructive guns and very fast, fluid movement provide the grounds for an intense, first-person combat – whether you are destroying hordes of demons in Hell in the single-player mode or competing with your friends in several multiplayer modes. You can also easily create, play and share your content with the world by using the DOOM SnapMap game editor.
                                <a href="Games/Doom.php"><b>Read More..</b></a>
                            </p><br><br>

                            <!--<a href="Games/Warhammer.php"><b>< PREV  </b></a>-->
                            <b><a href="Home2.php" button class="pagesbutton"><span>NEXT </span></button>
                            <a href="Home3.php" button class="pagesbutton"><span>LAST</span></button></b>
                            
                    </div>

                </div>
            </div>
                <div id="sidebar">
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
                </div>
        </div>

    </body>

</html>
