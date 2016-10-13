<?php

$server = 'localhost';
$username = 'root';
$password = 'bgarcia02';
$database = 'signup';

//connect to DB
try {
    $con = mysqli_connect("$server", $username, $password, $database);
} catch(mysqli_sql_exception $e) {
    die("Connection failed: ". +$e->getMessage());
}

