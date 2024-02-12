<?php

//Class
class Car
{
    function start()
    {
        echo "The Car is started";
    }
    function stop()
    {
        echo "<br>The Car is stopped";
    }
}

$c = new Car(); //Object

$c->start();
$c->stop();


?>

<!-- 1. write a program to create class and object in php -->