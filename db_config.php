<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE','portal');
	$DB_DATABASE = DB_DATABASE;

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $DB_DATABASE";
if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";

} else {
    echo "Error creating database: " . $conn->error;
}

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
role int(3),
password VARCHAR(50)

)";

if ($conn->query($sql) === TRUE) {
    //echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//create courses table
$sql = "CREATE TABLE IF NOT EXISTS courses (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
coursename VARCHAR(30) NOT NULL,
coursecode VARCHAR(10) NOT NULL,
courseunit INT(1) NOT NULL,
level int(6) NOT NULL,
coordinator VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    //echo "Table  courses created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



$conn->close();
?> 