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
                        $error = array();

                        $visitorName = $_POST['visitorName'];
                        $emailAdd = $_POST['emailAdd'];
                        $messageInquiry = $_POST['messageInquiry'];

                        if (empty($visitorName) === true || empty($emailAdd) === true || empty($messageInquiry) === true) {
                            $error[] = 'The name, email address and message fields must be filled in.';
                        } else {
                            if (filter_var($emailAdd, FILTER_VALIDATE_EMAIL) === false) {
                                $error[] = 'The email address you entered is invalid.';
                            }
                            if (ctype_alpha($visitorName) === false) {
                                $error[] = 'Name must only contain letters!';
                            }
                        }
                        if (empty($error) === true) {
                            mail('kimbcapati@yahoo.com', 'Contact Form', $messageInquiry, 'From: ' . $emailAdd);
                            header('Location: ContactUs.php?sent');
                            exit();
                        }
                    }
                    ?>

                    <?php
                    if (isset($_GET['sent']) === true) {
                        echo '<p>Thank you for your message!</p>';
                    } else {
                        if (empty($error) === false) {
                            echo '<ul>';
                            foreach ($error as $errors) {
                                echo '<li>', $errors, '</li>';
                            }
                            echo '</ul>';
                        }
                        ?>

                        <form action="" method="post">
                            <p>
                                <label for="visitorName">Name:</label><br>
                                <input type="text" name="visitorName" id="visitorName" <?php
                                if (isset($_POST['visitorName']) === true) {
                                    echo 'value="', strip_tags($_POST['visitorName']), '"';
                                }
                                ?>>      
                            </p>
                            <p>
                                <label for="emailAdd">Email Address:</label><br>
                                <input type="text" name="emailAdd" id="emailAdd" <?php
                                if (isset($_POST['emailAdd']) === true) {
                                    echo 'value="', strip_tags($_POST['emailAdd']), '"';
                                }
                                ?>>   
                            </p>
                            <p>
                                <label for="messageInquiry">Message:</label><br>
                                <textarea name="messageInquiry" rows="8" cols="40" id="messageInquiry"><?php
                                    if (isset($_POST['messageInquiry']) === true) {
                                        echo strip_tags($_POST['messageInquiry']);
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
