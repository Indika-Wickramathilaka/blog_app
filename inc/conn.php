<?php
//Defining host
$host = "localhost";

//Define user name
$username = "root";

//Define password
$password = "";

//Define database
$database = "BlogApp";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    /* die("Data base connection failed" . mysqli_error($conn)); */
    die("Database connection failed: " . mysqli_connect_error());
} else {
    /* echo "Database connection success!"; */
}
