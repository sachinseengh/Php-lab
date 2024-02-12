<?php

class Area
{
    private $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function area()
    {
        return $this->radius * $this->radius * 3.14;
    }
}

$a = new Area(7);

echo "Area of circle is " . $a->area();

?>


<!-- 3. write an object oriented program in php to find area of circle -->