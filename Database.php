<?php

//connect to DB
try {
    $con = mysqli_connect('localhost', 'root', '1234', 'signup');
} catch(mysqli_sql_exception $e) {
    die("Connection failed: ". +$e->getMessage());
}

