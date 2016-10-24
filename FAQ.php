<!-- Author: Kimberley Capati -->
<!-- This file contains the FAQ page of the GameBuzz website -->

<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Frequently Asked Questions</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>

        <!-- Leaves a margin between the navbar and the website's body -->
        <div id="banner"></div>

        <!-- Adds the website's wrapper -->
        <div id="wrapper" style="height: 1100px;">

            <div class="columns_about">

                <!-- This section contains questions and answers about our website -->
                <a style="color: red;"><h1>Frequently Asked Questions</h1></a>
                Here are the most frequently asked questions by our fellow GameBuzz users :-)
                </br></br></br>
                <a style="color: brown;"><h3>Where can I register/sign up?</h3></a>
                If you want to register an account with us, please visit the "LOGIN" page and then click on "Not a member? Sign up now!". This will direct you to our sign up page.
                </br></br>
                <a style="color: brown;"><h3>How do I sign in?</h3></a>
                You can simply sign in by clicking "LOGIN" which is found on the top right hand side next to the search bar.
                </br></br>
                <a style="color: brown;"><h3>I want to change my username. Do I have to start a new account?</h3></a>
                Yes. Once you have created an account with us, the username cannot be edited.
                </br></br>
                <a style="color: brown;"><h3>I think I found a bug. How can I report it?</h3></a>
                Bugger! While we're doing our best to keep things bug-free, some will inevitably pop up for us to squash. If you happen to come across one, we would totes appreciate it if you can send us a message through our "CONTACT US" page. Thanks in advance :-)
                </br></br>
                <a style="color: brown;"><h3>What browsers do you recommend I use to view GameBuzz?</h3></a>
                GameBuzz is optimized for the latest versions of modern web browsers, such as Chrome and Firefox.
                </br></br>
                <a style="color: brown;"><h3>Is GameBuzz available in languages other than English?</h3></a>
                No. Since we are a small website in New Zealand, our website is only available in English.. BUT we might think about adding more languages in the future!
                </br></br>
                <a style="color: brown;"><h3>What is GameBuzz written in?</h3></a>
                GameBuzz is written in JAVA, PHP, CSS and HTML.
                </br></br>
                <a style="color: brown;"><h3>Not answered above?</h3></a>
                Sorry! If you have a question that isn't answered here, please don't hesitate by sending us a message through our "CONTACT US" page. We will certainly reply to your message within 24 hours. 

            </div>
        </div>
         <?php include 'footer.php'; ?>
    </body>
</html>