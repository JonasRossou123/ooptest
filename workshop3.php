<?php
//EXERCISE 5

const barname = 'Het Vervolg';


class Beverage2{
    //properties
    private string $color;
    private float $price;
    private string $temperature;

    const barname = 'Het Vervolg';

    public function __construct(string $color, float $price, string $temperature = 'cold'){
        $this -> color = $color;
        $this -> price = $price;
        $this -> temperature = $temperature;
    }

    public function getBar(){
          echo self::barname;

}


    public function getInfo (){
        return 'This beverage is ' . $this->temperature .' and ' .$this->color;
    }
}

class Beer2 extends Beverage2 {
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

    public function getBar(){
        echo self::barname;

    }


}

$duvel = new Beer2("blond", 3.5, 'Duvel', 8.5);

echo $duvel -> getAlcoholpercentage();
echo $duvel -> getBar();
echo $duvel -> getBar();
echo '<br>';


