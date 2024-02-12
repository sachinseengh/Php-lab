<?php
// Start the session
session_start();

// Set session variables
$_SESSION['name'] = "John";
$_SESSION['age'] = 30;

// Display session variables
echo "Name: " . $_SESSION['name'] . "<br>";
echo "Age: " . $_SESSION['age'] . "<br>";

// Unset session variables
session_unset();

// Destroy the session
session_destroy();
?>