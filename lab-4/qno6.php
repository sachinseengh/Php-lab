<?php

class ParentClass
{
    protected $property = "This is Parent Property";
}

class ChildClass extends ParentClass
{
    function getProperty()
    {
        return $this->property;
    }

    function getParentProperty()
    {
        return parent::$property;
    }
}

$childObj = new ChildClass();

echo "Child Property: " . $childObj->getProperty();
echo "Parent Property: " . $childObj->getParentProperty();

?>



<!-- 6. write a php program to demostrate use of this, parent keywords -->