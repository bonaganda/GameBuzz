<?php
    mysql_connect("localhost","root", "") or die("Error connecting to database: ". mysql_error());
    //connects to the localhost and returns error if cannot connect.
     
    mysql_select_db("sample") or die(mysql_connect_error());
    /* sample is the name of database we've created */
     
     
     
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

</body>
</html>

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
                
                <form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
            </ul>
        </nav>
 <div id="wrapper" style="height: 3000px;">
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
     <div class="columns">
       <?php
       
    $query = $_GET['query']; 
    // Retreive value from search form
     
    $min_length = 3;
    // Minimum length needed to search
     
    if(strlen($query) >= $min_length){ // if meets the minimum length
         
        $query = htmlspecialchars($query); 
        // changes characters to their equivalents
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL INJECTION
         
        $raw_results = mysql_query("SELECT * FROM article
            WHERE (`title` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields where result = title
        // article is the name of our table
     
       if(mysql_num_rows($raw_results) > 0){ // if there is something to be returned.
             
            while($results = mysql_fetch_array($raw_results)){
            
            
                echo "<p><h1>".$results['title']."</h1></p>";
                 
                if($results["title"] == "News") {
                   echo "<a href='News1.php'>News</a>";
                   
                } elseif($results["title"] == "Top 10 Games") {
                    echo "<a href='Top10.php'>Top10</a>"; 
                } elseif($results["title"] == "News 2") {
                    echo "<a href='News2.php'>News 2</a>"; 
                } elseif($results["title"] == "News 3") {
                    echo "<a href='News3.php'>News 3</a>"; 
                }elseif($results["title"] == "Review") {
                    echo "<a href='Reviews.php'>Review</a>"; 
                } elseif($results["title"] == "About") {
                    echo "<a href='About.php'>About</a>"; 
                } elseif($results["title"] == "Contact Us") {
                    echo "<a href='ContactUs.php'>Contact us</a>"; 
                } elseif($results["title"] == "Login") {
                    echo "<a href='Login.php'>Login</a>"; 
                } elseif($results["title"] == "PC") {
                    echo "<a href='PC.php'>PC</a>"; 
                } elseif($results["title"] == "PS4") {
                    echo "<a href='Ps4.php'>PS4</a>"; 
                } elseif($results["title"] == "XBOX ONE") {
                    echo "<a href='XboxOne.php'>Xbox One</a>"; 
                } elseif($results["title"] == "Total War: Warhammer") {
                    echo "<a href='Games/Warhammer.php'>Total War: Warhammer</a>"; 
                } elseif($results["title"] == "Quadrilateral Cowboy") {
                    echo "<a href='Games/QuadrilateralCowboy.php'>Quadrilateral Cowboy</a>"; 
                } elseif($results["title"] == "Doom") {
                    echo "<a href='Games/Doom.php'>Doom</a>"; 
                } elseif($results["title"] == "Dark Souls 3") {
                    echo "<a href='Games/DarkSouls3.php'>Dark Souls 3</a>"; 
                } elseif($results["title"] == "Inside") {
                    echo "<a href='Games/Inside.php'>Inside</a>"; 
                } elseif($results["title"] == "Overwatch") {
                    echo "<a href='Games/Overwatch.php'>Overwatch</a>"; 
                } elseif($results["title"] == "Hearts of Iron IV") {
                    echo "<a href='Games/HeartOfIron4.php'>Hearts of Iron IV</a>"; 
                } elseif($results["title"] == "Uncharted 4") {
                    echo "<a href='Games/Uncharted4.php'>Uncharted 4</a>"; 
                } elseif($results["title"] == "Dota 2") {
                    echo "<a href='Games/Dota2.php'>Dota 2</a>"; 
                } elseif($results["title"] == "Just Cause 3") {
                    echo "<a href='Games/JustCause3.php'>Just Cause 3</a>"; 
                } else { 
                    die('error');
                }
            
             
            }
  // posts result from the database
            
             
        } 
        else{ // if there is no kind of that data in the database
            echo "No results";
        }
         
    }
    else{ // if it is smaller than the minimum length then
        echo "Minimum length is ".$min_length;
    }
    ?>
 </div>
    </body>

</html>


