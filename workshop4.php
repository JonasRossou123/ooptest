<?php
//ex 6


// Copy the code of exercise 2 to here and delete everything related to cola.

class Beverage4
{
//properties
    private string $color;
    private float $price;
    private string $temperature;
    private static int $timesServed = 0;

    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        self::$timesServed += 1;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getInfo()
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color;
    }

    public function getTotalServed()
    {
        return self::$timesServed;
    }

}


class Beer4 extends Beverage4
{
    private string $name;
    private float $alcoholpercentage;

    function __construct(string $color, float $price, string $name, float $alcoholpercentage, string $temperature = 'cold')
    {
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
        parent::__construct($color, $price, $temperature);
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholpercentage;
    }

    public function getbeerInfo()
    {
        echo 'Hi im ' . $this->name . ' and have an alcohol percentage of ' . $this->alcoholpercentage . ' and I have a ' . $this->getColor() . ' color.';
    }

    public function getallinfoparent()
    {
        echo parent::getColor();
        echo '<br>';
        echo parent::getPrice();
    }

    public function getallinfoparent1()
    {
        echo $this->getColor();
        echo '<br>';
        echo $this->getPrice();
    }
}

$duvel = new Beer4("blond", 3.5, 'Duvel', 8.5);

echo '<br>';
echo $duvel->getAlcoholpercentage();
echo '<br>';
$duvel->setColor('light');
echo '<br>';
$duvel->getbeerInfo();
echo '<br>';
$duvel->getallinfoparent();
echo '<br>';
$duvel->getallinfoparent1();
echo '<br>';
$fanta = new Beverage4("yellow", 2);
$sprite = new Beverage4("transparent",3);
$westmalle = new Beer4("brown", 3, "Westmalle Dubbel", 7);
$tripledanvers = new Beer4("blond", 4, "Triple d'Anvers", 8);
echo $fanta->getTotalServed();



