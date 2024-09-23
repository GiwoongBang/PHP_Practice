<?php

class Base
{

    const AGE = 10;
    public $mustOlderthan = 20;

    public function display()
    {
        echo "display start<br>";
        echo $this->mustOlderthan . "<br>";
        echo "display end<br>";
    }

    public static function displayAge()
    {
        echo "static start<br>";
        echo self::AGE . "<br>";
        echo "static end<br>";
    }

}

$base_instance = new Base();
$base_instance->mustOlderthan = 30;

echo $base_instance->mustOlderthan . "<br>";
echo Base::AGE . "<br>";
echo $base_instance->display() . "<br>";
echo Base::displayAge();