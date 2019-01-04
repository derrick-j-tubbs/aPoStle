<?php
// This file contains the database access information. 
// This file also establishes a connection to MySQL 

// Set the database access information as constants:

DEFINE('DB_USER', 'homestead');
DEFINE('DB_PASSWORD', 'secret');
DEFINE('DB_HOST', '127.0.0.1');
DEFINE('DB_PORT', '3306');
DEFINE('DB_NAME', 'apostle');

//Make the connection:
$dbConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Check the status of the connection:
if ($dbConnection->connect_error) {
    die("Could not connect to the database server: " .
        $dbConnection->connect_error . " " . $dbConnection->connect_errno .
        "</body></html>");
}