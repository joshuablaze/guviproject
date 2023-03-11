<?php
// Enable us to use Headers
ob_start();
// Set sessions
if(!isset($_SESSION)) {
    session_start();
}

// Include dbconfig file
include('dbconfig.php');

// Check if the form has been submitted
if(isset($_POST['submit'])) {
    // Get the user data from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['mobilenumber'];
    $password = $_POST['password'];

    // Insert the user data into the database
    $query = "INSERT INTO users (firstname, lastname, email, mobilenumber, password) VALUES ('$firstname', '$lastname', '$email', '$mobilenumber', '$password')";
    $result = mysqli_query($connection, $query);

    if($result) {
        // Registration successful
        header('Location: login.php');
        exit();
    } else {
        // Registration failed
        echo "Registration failed. Please try again.";
    }
}
?>