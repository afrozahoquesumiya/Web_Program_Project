<?php
$host = "webprogramming25-db-1";
$username = "root"; 
$password = "password";
$dbname = "la_bella_cucina";

try {
    $conn = new mysqli($host,$username,$password,$dbname);
} catch (Exception $e) {
    echo " Could not connect to the database" . $e;
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully";
    
}
?>
