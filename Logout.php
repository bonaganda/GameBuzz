<!-- Author: Bonaliza Garcia-->
<!-- This file logs out the user to the website -->

<?php
session_start(); //session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();
$fave = null;
header("Location: Home.php"); //redirects to homepage after logging out
