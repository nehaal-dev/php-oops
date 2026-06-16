<?php

/* Ek Student class banao. Uski 2 properties hongi — name aur age Ek method hoga — introduce() 
 Jo print kare: "Hi, I am Alex and I am 21 years old." */ ?>
   
<?php
class student
{
    public $name;
    public $age;

    function introduce($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        return "Hi , I am ".$name. '&nbspand I am '.$age.'years old' ;
    }
}
$obj = new student('Alex' ,21);
echo $obj ->introduce() ;


echo '<br> .<br>';   
 
?>
 
<?php
/* Day 1 Exercise 🎯

Ek Car class banao:
Properties: brand, color, speed
Method: describe() jo print kare:

"I am a Red Toyota and my speed is 120 km/h." */


class car{

    public $brand , $color ,$speed ;

    function describe($color,$brand,$speed){
        $this->brand=$brand;
        $this->color=$color;
        $this->speed=$speed;

        return 'I am a &nbsp' .$color.  '&nbsp'  .$brand .  '&nbsp and my speed is &nbsp' .$speed.  '&nbsp km/h .' ;
    }
}


    $des= new car() ;

    echo $des->describe('red','Toyota', 120) ;




?>