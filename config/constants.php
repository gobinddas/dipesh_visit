<?php
// Start Session
session_start();

// Create Constant to store Non Repeating values
define('SITEURL', 'http://localhost/visitabroad/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'visitabroad');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD); //database connection
$db_select = mysqli_select_db($conn, DB_NAME);
