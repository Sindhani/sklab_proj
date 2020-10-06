<?php
$servername = "habdsk.org";
$username = "habdskor";
$password = "S;7YLh9p@73Eea";
$db= "habdskor_habd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>