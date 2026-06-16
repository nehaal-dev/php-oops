 <?php
    // Level 3 — Real World 🔴
    // Ek Vehicle class banao — parent:
    // Properties: brand, speed
    // Constructor mein dono lo
    // Method: move() — return kare:
    // "Toyota is moving at 120 km/h"
    // Car class — child:
    // Extra property: doors
    // Method: honk() — return kare:
    // "Toyota is honking! Beep Beep!"
    // Method: getInfo() — return kare:
    //Brand: Toyota | Speed: 120 | Doors: 4"
    // Bike class — child:
    // Extra property: type (sports, regular)
    // Method: wheelie() — return kare
    // "Yamaha is doing a wheelie!"
    // Method: getInfo() — return kare:
    // "Brand: Yamaha | Speed: 180 | Type: Sports" 
    ?>
<?php
class Vehicle
{
    protected $brand, $speed;

    function __construct($brand, $speed)
    {

        $this->brand = $brand;
        $this->speed = $speed;
    }
    function move()
    {
        return $this->brand . ' is moving at speed ' . $this->speed . 'km/h';
    }
}

class Car extends Vehicle
{
    private $doors;

    function __construct($brand, $speed, $doors)
    {
        parent::__construct($brand, $speed);
        $this->doors = $doors;
    }

    function honk()
    {
        return $this->brand . '   is honking! Beep Beep!';
    }

    function getInfo()
    {
        return 'Brand :' . $this->brand . '| speed ' . $this->speed . '| Doors ' . $this->doors;
    }
}

class Bike extends Vehicle{
    private $type;

    function __construct($brand, $speed,$type)
    {
         parent::__construct($brand,$speed);
         $this->type=$type;
          
    }

    function wheelie(){
        return $this->brand . '   is doing a Wheelie' ;
    }

    function getInfo(){
        return 'Brand : '.$this->brand. ' |  Speed : ' .$this->speed. ' |  Type : ' . $this->type;
    }
    
}
 
$vehicle=new Vehicle('Toyota',120) ;
echo $vehicle->move();


$car=new Car('Toyota',120,4) ;

echo $car->move();
echo $car->honk();
echo $car->getInfo();

echo '<br> <br>' ;
 
$bike=new Bike('Yamaha', 180, 'Sports');

echo $bike->move();
echo $bike->wheelie();
echo $bike->getInfo();

?>