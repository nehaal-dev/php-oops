<?php 
 

//CONSTRUCTOR FN.
////constructor fn-> automatically call hojata h  JAB BHI KOI USKE class ka use krke object banata.isme bar bar value ko likhna nhi padta.


class Person {
    public $name;
    public $age;

    // Corrected the constructor syntax
    function __construct($n, $a) {
        
        $this->name = $n;
        $this->age = $a;
    }

    function show() {
        // Added a space for better output formatting
        echo "Your Name: " . $this->name . ", Age: " . $this->age . "<br>";
    }
}

// Creating instances(object) of the Person class
$person1 = new Person("Yahoo Baba", 22);
$person2 = new Person("Nehaal Baba", 24);

// Displaying the information
$person1->show();
$person2->show();


?>





