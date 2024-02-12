<?php
class MyClass
{
    // Constructor
    public function __construct()
    {
        echo "Constructor called. Object created.\n";
    }

    // Destructor
    public function __destruct()
    {
        echo "<br>Destructor called. Object destroyed.\n";
    }

    // Method
    public function greet()
    {
        echo "<br>Hello, I am an instance of MyClass.\n";
    }
}

// Create an object of MyClass
$obj = new MyClass();

// Call a method of MyClass
$obj->greet();
?>


<!-- write a php program to demonstrate class with constructor and
destructor -->