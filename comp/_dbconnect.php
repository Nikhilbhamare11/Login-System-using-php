<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server,$username,$password);
if(!$conn){
    die("Connection to this database failed due to ".mysqli_connect_error());
}
else{
    // echo"Success Connecting to the db";
}

// SQL query to create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS `$database`";

// Execute the query to create the database
if (mysqli_query($conn, $sql)) {
    // echo "Database '$database' created successfully or already exists.<br>";

    // Select the database
    if (!mysqli_select_db($conn, $database)) {
        die("Error selecting database: " . mysqli_error($conn));
    }

}
else {
    echo "Error creating database: " . mysqli_error($conn);
}

// SQL query to create the 'users' table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `sno` INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(85) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `datetime` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL )";

// Execute the query
if (mysqli_query($conn, $sql)) {
    // echo "Table 'threads' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>
