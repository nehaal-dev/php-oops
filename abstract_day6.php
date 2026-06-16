<?php
// LEVEL 1  Day 6 — Abstract Class Project Task 🎯

// Vehicle Service System banao — jaise car service center mein hota hai.

// Abstract parent class Vehicle:
// Properties: $brand, $model
// Constructor mein dono lo
// Abstract method: service() — sirf declare karo
// Normal method: getDetails() — return kare:
// "Brand: Toyota | Model: Corolla"

// CarService — child:
// Extra property: $engineType
// service() implement karo:
// "Toyota Corolla - Car Service Done | Engine: Petrol"
// getInvoice():
// "Invoice: Toyota Corolla | Service: Car | Engine: Petrol"

// BikeService — child:
// Extra property: $wheelSize
// service() implement karo:
// "Yamaha R15 - Bike Service Done | Wheel: 17 inch"
// getInvoice():
// "Invoice: Yamaha R15 | Service: Bike | Wheel: 17 inch"

// TruckService — child:
// Extra property: $loadCapacity
// service() implement karo:
// "Tata Truck - Truck Service Done | Load: 10 tons"
// getInvoice():
// "Invoice: Tata Truck | Service: Truck | Load: 10 tons" 

abstract class Vehicle{
    protected $brand, $model;

    function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    abstract  function service();

    function getDetails() {
        return 'Brand :' . $this->brand . '| Models  : ' . $this->model;
    }
}


class CarService extends  Vehicle{

    private $engineType;

    function __construct($brand, $model, $engineType)
    {
        parent::__construct($brand, $model);
        $this->engineType = $engineType;
    }

    function service()
    {
        return  $this->brand . '- Car Service Done ' . '| Engine:' . $this->engineType;
    }

    function getInvoice()
    {
        return 'Invoice: ' . $this->brand . ' | Models : ' . $this->model . ' | Engine : ' . $this->engineType;
    }
}

class BikeService extends Vehicle{

    protected  $wheelSize;

    function __construct($brand, $model, $wheelSize)
    {
        parent::__construct($brand, $model);
        $this->wheelSize = $wheelSize;
    }
    function service() {
        return  $this->brand. '  - Bike Service Done |  Wheel: ' .   $this->wheelSize ;
    }

   
    function getInvoice(){
        return "Invoice: ".$this->brand. "  | Service: ". $this->model . "  | Wheel: " .$this->wheelSize  ;
    }
}


class TruckService  extends Vehicle{

    protected  $loadCapacity;

    function __construct($brand, $model, $loadCapacity)
    {
        parent::__construct($brand, $model);
        $this->loadCapacity = $loadCapacity;
    }
    function service() {
        return  $this->brand. '  - Truck Service Done | Load:   ' .   $this->loadCapacity ;
    }

   
    function getInvoice(){
        return "Invoice: ".$this->brand. "  | Models: ". $this->model . "  | load : " .$this->loadCapacity  ;
    }
}

//this is done only for check abstract class working or not 
// $vehicle=new Vehicle('Ashok Leyland','Alpha @xc ') ;
// echo $vehicle->service();

echo '<br>';

$car = new CarService('Toyota', 'Corolla', 'Petrol');
echo $car->getDetails();
echo $car->service();
echo $car->getInvoice();

$bike = new BikeService('Yamaha', 'R15', '17 inch');
echo $bike->getDetails();
echo $bike->service();
echo $bike->getInvoice();

$truck = new TruckService('Tata', 'Truck', '10 tons');
echo $truck->getDetails();
echo $truck->service();
echo $truck->getInvoice();