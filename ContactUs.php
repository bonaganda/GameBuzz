<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="Styles/MainStyleSheet.css"/>
    </head>
    <body>

        <!-- Calls Navbar.php and displays it in the page -->
        <?php include 'Includes/Navbar.php' ?>



        <div id="banner">
        </div>

        <div id="wrapper" style="height: 1020px;">
            <br>
            <center>
                <a style="color: red;"><h1>Contact Us</h1></a>
                <center>
                    <br>
                    <img src="Images/Kim/contactus.png" style="width: 600px; height: 280px;">
                    <br><br>
                    We would love to hear from you - if you have any inquiries,<br>fill in the form below and we will get back to you within 24 hours :) 
                    <br><br>
                    <?php
                    if (empty($_POST) === false) {
                        $errors = array();

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];

                        if (empty('name') === true || empty('email') === true || empty('message') === true) {
                            $errors[] = 'Name, email and message are required';
                        } else {
                            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                                $errors[] = 'That\'s not a valid email address';
                            }
                            if (ctype_alpha($name) === false) {
                                $errors[] = 'Name must only contain letters!';
                            }
                        }
                        if (empty($errors) === true) {
                            mail('kimbcapati@yahoo.com', 'Contact form', $message, 'From: ' . $email);
                            header('Location: ContactUs.php?sent');
                            exit();
                        }
                    }
                    ?>

                    <?php
                    if (isset($_GET['sent']) === true) {
                        echo '<p>Thanks for contacting us!</p>';
                    } else {
                        if (empty($errors) === false) {
                            echo '<ul>';
                            foreach ($errors as $error) {
                                echo '<li>', $error, '</li>';
                            }
                            echo '</ul>';
                        }
                        ?>

                        <form action="" method="post">
                            <p>
                                <label for="name">Name:</label><br>
                                <input type="text" name="name" id="name" <?php
                                if (isset($_POST['name']) === true) {
                                    echo 'value="', strip_tags($_POST['name']), '"';
                                }
                                ?>>      
                            </p>
                            <p>
                                <label for="email">Email:</label><br>
                                <input type="text" name="email" id="email" <?php
                                if (isset($_POST['email']) === true) {
                                    echo 'value="', strip_tags($_POST['email']), '"';
                                }
                                ?>>   
                            </p>
                            <p>
                                <label for="message">Message:</label><br>
                                <textarea name="mesage" rows="8" cols="40" id="message"><?php
                                    if (isset($_POST['message']) === true) {
                                        echo strip_tags($_POST['message']);
                                    }
                                    ?></textarea> 
                            </p>
                            <p>
                                <input type="submit" value="Submit"><input type="reset" value="Clear">
                            </p>
                        </form>
                        <?php
                    }
                    ?>
                </center>
        </div>
    </div>

</body>
</html>
