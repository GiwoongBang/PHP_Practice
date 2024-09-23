<?php

class Car
{
    private $brand;
    private $name;

    public function __construct($brand, $name)
    {
        $this->brand = $brand;
        $this->name = $name;

        echo "<p>자동차가 생산되었습니다.</p>";
        echo "<p>브랜드: $this->brand<br>";
        echo "차종: $this->name</p>";

    }

    public function __destruct() {
        echo "<p>자동차가 폐차되었습니다.</p>";
        echo "<p>관련 증명서가 발급되었습니다.</p>";
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getName()
    {
        return $this->name;
    }

}

$bmw = new Car('bmw', 'x series');
$benz = new Car('benz', 'e class');

echo $bmw->getBrand() . '<br>';
echo $bmw->getName() . '<br><br>';

echo $benz->getBrand() . '<br>';
echo $benz->getName() . '<br><br>';