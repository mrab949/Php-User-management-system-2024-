<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
    die("Cannot connect to the database: " . mysqli_connect_error());
}

$sql_create_db = "CREATE DATABASE IF NOT EXISTS rizwan";
if (!mysqli_query($conn, $sql_create_db)) {
    die("Error creating database: " . mysqli_error($conn));
}


mysqli_select_db($conn, 'rizwan');


$sql_create_table = "CREATE TABLE IF NOT EXISTS user14 (
    serial_number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    account_creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


if (!mysqli_query($conn, $sql_create_table)) {
    die("Error creating table: " . mysqli_error($conn));
}


 ?>