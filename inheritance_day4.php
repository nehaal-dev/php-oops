<?php
//Day 4 — Task 🎯Day 4 — Task 🎯  LEVEL 1
// Ek Animal class banao — parent: // Properties: name, age // Constructor mein dono lo // Method: eat() — return kare:// "John is eating"
// Method: sleep() — return kare:// "John is sleeping"// Ab Dog class banao — child:// Animal se inherit karo// Extra method: bark() — return kare:// "John is barking! Woof Woof!" 

// Level 2 — Applied 🟡
// Same Animal parent class rakho.
// 2 child classes banao:
// Dog class:

// bark() — "John is barking! Woof Woof!"
// fetch() — "John is fetching the ball!"

// Cat class:

// meow() — "Whiskers is meowing! Meow Meow!"
// purr() — "Whiskers is purring..."


class animal{

    protected $name , $age ;
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;        
    }

    function eat(){ 
        return $this->name .'   is eating <br>';
    }
    function sleep(){ 
        return  $this->name. '   is sleeping <br>' ;
    }
}

class dog extends animal{

    function bark(){
        return $this->name .'   is barking ! woof woof  ' ;
    }

    function fetch(){
        return $this->name. 'is fetching the ball!';
    }

}


class cat extends animal{

    function meow(){
        return $this->name . '  is meowing! Meow Meow! <br>';
    }

    function purr(){
        return $this->name. '  is purring ';
    }
}
//Case 2 — Child ki extra property hai

class cow extends animal{
    private $milk;
   
    function __construct($name, $age,$milk) {
        parent::__construct($name,$age);
        $this->milk=$milk;     
    }

    function give(){
        return  $this->name.'   | Age  '.$this->age.'  |  and Give us '.$this->milk;
    }

}


$dog =new dog('John' , 3);

echo $dog->eat();
echo $dog->sleep();
echo $dog->bark();

echo '<br><br>' ;

$cat=new cat('Whiskers',5) ;
echo $cat->eat();
echo $cat->sleep();
echo $cat->meow();
echo $cat->purr();

echo '<br><br>' ;

$cow=new cow('White_cow' ,5  ,'milk');

echo $cow->give();

echo '<br><br>' ;
?>
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