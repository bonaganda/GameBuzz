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
                <li><a href="ContactUs.php">CONTACT US</a></li>
                <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="Logout.php#"><?php echo $_SESSION['username'];?> LOGOUT</a></li>
                <?php } else { ?>
                    <li><a href="Login.php#">LOGIN</a></li>
                <?php } ?>
                    <form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
            </ul>
        </nav>