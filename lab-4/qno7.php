<?php

// Parent class
class Animal
{
    function makeSound()
    {
        return "Animal sound";
    }
}

// Child class extending Animal
class Dog extends Animal
{
    function makeSound()
    {
        return "Bark";
    }
}

// Child class extending Animal
class Cat extends Animal
{
    function makeSound()
    {
        return "Meow";
    }
}

// Creating objects of Dog and Cat
$dog = new Dog();
$cat = new Cat();

// Accessing child class methods
echo "Dog makes the sound: " . $dog->makeSound() . "<br>";
echo "Cat makes the sound: " . $cat->makeSound() . "<br>";

?>

<!-- Inheritence Example -->