<!-- Authors: Joni Pablo -->
<!-- Navbar Section - (File to include to the rest of the web pages to display the navigation bar -->

<nav class="navigation">
    <ul id="nav">
        <a href="Home.php"><img src="Images/Logo/GBLogosmall.png" width="232" height="50" id="logo" /></a> 
        <li><a href="Home.php">HOME</a></li>
        <li class="dropdown" style="position: relative; top:">
            <div><a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">PLATFORM</a></div>
            <div class="dropdown-content" id="myDropdown">
                <a href="Ps4.php">PS4</a>
                <a href="PC.php">PC</a>
                <a href="XboxOne.php">XBOX ONE</a>
            </div>
        </li> 
        <li><a href="Reviews.php">REVIEWS</a></li>
        <li><a href="About.php">ABOUT</a></li>
        <li><a href="FAQ.php">F.A.Q</a></li>
        <li><a href="ContactUs.php">CONTACT US</a></li>
        <li><form action="search.php" method="GET">
                <input type="text" name="query" />
                <input type="submit" value="Search" />
            </form></li>
        <?php if (isset($_SESSION['username'])) { ?>
            <li class="dropdown" style="position: relative; top:">
                <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()"><?php echo $_SESSION['username']; ?></a>
                <div class="dropdown-content">
                    <a href="#">My Favorites</a>
                    <div class="dropdown-content-sub">
                        <?php while ($counter != -1) { ?>
                            <a href="./Games/<?php echo $fave[$counter] ?>.php"><?php echo $fave[$counter] ?></a>
                            <?php
                            $counter--;
                        }
                        ?>
                    </div>
                    <a href="Logout.php">Logout</a>
                </div>
            </li>
        <?php } else { ?>
            <li><a href="Login.php#">LOGIN</a></li>
        <?php } ?>

    </ul>
</nav>