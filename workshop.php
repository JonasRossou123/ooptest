<?php
class Beverage{
    //properties
    var string $color;
    var float $price;
    var string $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold'){
        $this -> color = $color;
        $this -> price = $price;
        $this -> temperature = $temperature;
    }

    public function getInfo (){
        return 'This beverage is ' . $this->temperature .' and ' .$this->color;
    }
}

$cola = new Beverage("black", 2);

echo $cola->getInfo();
echo "<br>";
echo 'The temperature is ' .$cola->temperature;


class Beer extends Beverage {
    var string $name;
    var float $alcoholpercentage;

    function __construct(string $color, float $price, string $name, float $alcoholpercentage, string $temperature = 'cold')
    {
        $this -> name = $name;
        $this -> alcoholpercentage = $alcoholpercentage;
        parent::__construct($color, $price, $temperature);
    }

    public function getAlcoholpercentage(){
        return $this -> alcoholpercentage;
    }
}

$duvel = new Beer("blond", 3.5, 'Duvel', 8.5);

echo '<br>';
echo $duvel -> alcoholpercentage;
echo '<br>';
echo $duvel -> getAlcoholpercentage();
echo '<br>';
echo Beverage::getAlcoholpercentage();
