<!-- Author: Bonaliza Garcia -->
<!-- This file is used to connect the website to the database -->

<?php
//connect to DB
try {
    $con = mysqli_connect('localhost', 'root', '1234', 'signup');
} catch (mysqli_sql_exception $e) {
    die("Connection failed: " . +$e->getMessage());
}

