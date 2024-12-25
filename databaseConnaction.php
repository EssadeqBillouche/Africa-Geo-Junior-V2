<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'africadataexplorer';

// Establish the connection
$connection = mysqli_connect($host, $user, $pass, $db);

// Check the connection
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully';

?>
