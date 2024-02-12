<?php

class MyClass
{
    public static $staticVariable = "I am a static variable";

    public static function staticMethod()
    {
        return "I am a static method";
    }
}

// Accessing static variable
echo "Accessing static variable: " . MyClass::$staticVariable . "<br>";

// Accessing static method
echo "Accessing static method: " . MyClass::staticMethod() . "<br>";

?>



<!-- write a php program to demonstrate how to access static members
of a class. -->