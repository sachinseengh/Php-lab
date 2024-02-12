<?php

class Animal
{
    function animal()
    {
        echo "Dog is a Animal!";
    }
}


class Dog extends Animal
{
    function animal()
    {
        echo "Dog Barks!";
    }
}


$c = new Dog();

$c->animal();


?>


<!-- write an object oriented program in php to demonstrate method
overriding -->