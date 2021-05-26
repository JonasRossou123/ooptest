<?php

// Copy the code of exercise 2 to here and delete everything related to cola.

class Beverage1{
//properties
private string $color;
private float $price;
private string $temperature;

public function __construct(string $color, float $price, string $temperature = 'cold'){
$this -> color = $color;
$this -> price = $price;
$this -> temperature = $temperature;
}

public function setColor($color)
    {
        $this -> color = $color;
    }

public function getColor()
    {
        return $this->color;
    }

public function getPrice()
    {
        return $this->price;
    }

public function getInfo (){
return 'This beverage is ' . $this->temperature .' and ' .$this->color;
}
}


class Beer1 extends Beverage1 {
private string $name;
private float $alcoholpercentage;

function __construct(string $color, float $price, string $name, float $alcoholpercentage, string $temperature = 'cold')
{
$this -> name = $name;
$this -> alcoholpercentage = $alcoholpercentage;
parent::__construct($color, $price, $temperature);
}

public function getAlcoholpercentage(){
return $this -> alcoholpercentage;
}

public function getbeerInfo(){
    echo 'Hi im ' . $this->name . ' and have an alcohol percentage of ' .$this->alcoholpercentage . ' and I have a ' .$this->getColor() .' color.';
}

public function getallinfoparent(){
    echo parent::getColor();
    echo '<br>';
    echo parent::getPrice();
}
    public function getallinfoparent1(){
        echo $this->getColor();
        echo '<br>';
        echo $this->getPrice();
    }
}

$duvel = new Beer1("blond", 3.5, 'Duvel', 8.5);

echo '<br>';
echo $duvel -> getAlcoholpercentage();
echo '<br>';
$duvel -> setColor('light');
echo '<br>';
$duvel -> getbeerInfo();
echo '<br>';
$duvel -> getallinfoparent();
echo '<br>';
$duvel -> getallinfoparent1();
echo '<br>';
$duvel -> getColor();



//After fixing the errors. Change the color of Duvel to light instead of blond and
//also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
//Create a new public method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and I have a light color."Make sure that u use the variables and not just this text line.
//Print this method on the screen on a new line. Do not use echo in the private method in the class itself!
