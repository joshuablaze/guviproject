<?php 
    // Enable us to use Headers
    ob_start();
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    $hostname = "localhost";
    $username = "root";
    $dbname = "project";
    
    $connection = mysqli_connect($hostname, $username,"", $dbname) or die("Database connection not established.");

    if($connection) {
        echo "connected successfully";
    }
?>
