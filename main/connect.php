<?php
// This script connects to the database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "tcsdatabase";

$con = new mysqli($server, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
