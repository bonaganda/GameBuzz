<!-- Author: Bonaliza Garcia -->
<!-- This file contains the login page of the GameBuzz website -->
    
    <?php 
session_start();
require './Database.php';

if(isset($_POST['login_btn'])){
    //to prevent sql injection
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    //Query the database for user
    try {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $con->query($sql);
    } catch(mysqli_sql_exception $e) {
        die ('Failed to query DB');
    }
    //Check if user exist
    if(!$row = $result ->fetch_assoc()){ 
        echo "<script language=javascript>alert('Entered invalid username or password.')</script>";
    } else {
        $_SESSION['username'] = $row['username'];
        header("Location: Home.php"); //redirects the user to the homepage if login is succesful
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>
        
        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>
       
        <div id="banner"></div>
        
        <div id="login_wrapper">
            <div class="loginbox">
                <div id="Sign-In"> 
                    <fieldset style="width:100%; height: 90%;"><legend>MEMBER LOGIN</legend> 
                        <form method="POST" action="Login.php" style="color: red;">
                            <p>
                                <label>Username:</label><br>
                                <input type="text" name="username" size="25" >
                            </p>
                            <p>
                                <label>Password:</label><br>
                                <input type="password" name="password" size="25">
                                <input id="button" type="submit" name="login_btn" value="Login"><br>  
                            </p>
                            <a href="SignUp.php">Not a member? Sign up now!</a>
                        </form> 
                    </fieldset> 
                </div>
            </div>
        </div>
    </body>
</html>

