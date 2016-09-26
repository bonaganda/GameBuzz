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

                        <img src="Images/News1.jpg" style="width: 675px; height: 400px;">
                        <div class="text">Heroes of the Storm rated as the shittest game on the world, and zarya just got nerfed!</div>
                    </div>            

                    <div class="mySlides fade">

                        <img src="Images/News2.jpg" style="width: 675px; height: 400px;">
                        <div class="text">BattleNet is finally closing after selling overwatch to steam!</div>
                    </div>

                    <div class="mySlides fade">

                        <img src="Images/News3.jpg" style="    width: 675px; height: 400px;">
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
                        <a href=""><b><br>&nbsp;&nbsp;ARTICLES</b><br><br></a>
                        <!--List of game articles-->
                        <center>
                            <a href="Games/Inside.php"><img src="Images/Article Images/Inside.jpg" alt="inside" width="600" height="350" border="0"></a>
                            <font size ="3">
                            <a href="Games/Inside.php"><b><br>INSIDE</b><br></a>
                            </font>
                            <p align="left">Inside is a puzzle platformer in which the player is a young boy who wears a red shirt and explores a surreal setting presented as a predominantly monochromatic 2.5D platform game using colour only to highlight parts of the setting. The game itself is very dark in nature and regularly silent, with only intermittent musical cues. The player basically controls the unnamed boy who runs, walks, climbs 
                                and swims and then uses objects to overcome the obstacles and progress in the game.  
                                <a href="Games/Index.php"><b>Read More..</b></a>
                            </p><br><br>

                            <a href="Games/Overwatch.php"><img src="Images/Article Images/Overwatch.jpg" alt="overwatch" width="600" height="350" border="0"></a>
                            <font size ="3">
                            <a href="Games/Overwatch.php"><b><br>OVERWATCH</b><br></a>
                            </font>
                            <p align="left"> 
                                Overwatch is a team based shooter from renowned games studio, Blizzard. What sets this shooter apart from the rest is that there is a wide range of heroes for the player to fight with. Each hero has their own set of abilities that the player can master. There are a lot of characters in the game that the player can choose from such as Volatile Mercenary, 
                                Super-Intelligent Genetically Engineered Gorilla or Cyborg Ninja. 
                                <a href="Games/Overwatch.php"><b>Read More..</b></a>
                            </p><br><br>

                            <a href="Games/HeartsOfIron4.php"><img src="Images/Article Images/HOI.jpg" alt="heartsofiron4" width="600" height="350" border="0"></a>
                            <font size ="3">
                            <a href="Games/HeartsOfIron4.php"><b><br>HEARTS OF IRON IV</b><br></a>
                            </font>
                            <p align="left"> 
                                Hearts of Iron IV is a strategy game where the player is able to take command of any nation in World War II which is the most engaging conflict in world history and 
                                the player can lead the nation with their chosen ultimate weapon. From the heart of the battlefield to the centre of command, the player will need to guide his/her nation to glory and wage war, invade or negotiate. 
                                <a href="Games/HeartsOfIron4.php"><b>Read More..</b></a>
                            </p><br><br>

                            <a href="Home.php" button class="pagesbutton"><span>PREV</span></button>
                            <a href="Home2.php" button class="pagesbutton"><span>NEXT </span></button>
                            <a href="Home3.php" button class="pagesbutton"><span>LAST</span></button>
                           
                        </center>

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

        </div>

    </body>

</html>
