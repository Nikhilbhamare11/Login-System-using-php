<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server,$username,$password,$database);
if (!$conn) {
//     echo "Success";
// }
// else {
    die("Error in connection". mysqli_connect_error());
}
?>