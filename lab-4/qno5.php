<?php

// Define a function to calculate the division
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        // If divisor is zero, throw an exception
        throw new Exception("Division by zero is not allowed");
    }
    return $dividend / $divisor;
}

// Try block to handle exceptions
try {
    // Attempting division
    $result = divide(10, 0);
    echo "Result of division: $result";
} catch (Exception $e) {
    // Catching and handling the exception
    echo "Error: " . $e->getMessage();
}

?>


<!-- 5. Write a program to demonstrate exception handling in php -->