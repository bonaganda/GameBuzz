<!--Author: Bonaliza Garcia-->
<!--Gets the favourites row in the database and puts it in an array for the nav bar "My Favourites" dropdwon-->

<?php
$user = $_SESSION['username'];

//Query database for user in the user_fave table
$result = mysqli_query($con, "SELECT * FROM user_fave WHERE username = '$user'");
$fave = array();    
        while($row = mysqli_fetch_assoc($result)) {
           
            $favegame = $row['favourite'];
            array_push($fave, $favegame);
        }
$counter = sizeof($fave) -1;