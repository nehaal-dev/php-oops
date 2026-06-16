<?php 


//OVERRIDING PROPERTY.

//first koi class liye jaise Class A aur uska properties  h $name="some text";  Ab yhi class A ko dusre class B ne inherit krliya aur usne same name ka  property liya $name .usi ko bolte overriding property.
//jab hm derived class me same name ka property  lete usko hm  prperty overriding   bolte.


// Class A{
//     public $name="some text";
// }

// Class B extends Class A{
//     public $name="Another text";
// }

//OVERRIDING METHOD
// jab hm  derived class me same name ka method use krlte/bnate usey (whi method base class me bhi bna h ) usi ko bolte overriding method.

// Class C{
//     public $name;
//     public function show(){
//         echo "My Name".$this-> name;
//     }
// }
// Class D extends Class C{
//     public function show(){
//         echo "your Nmae" .$this->name";
//     }

// }

Class base{
    public $name="Parent Class";
}

Class derived extends base{
    public $name="Child Class";
}

$test= new base();
echo $test->name;  //give output Parent Class.
echo"<br>";
$test1=new derived();
echo $test1->name;//give output Child Class. yhi same property ko override krdiya aur usey derived class me us krliya to ye hme derived class ke ander wala property dega.
echo"<br>";
//METHOD OVERIDING

Class human{
    public $male="nehaal";

    public function calc($a,$b){
        return $a*$b;

    }

}

Class animal extends human{
    public $male="nehaal";

    public function calc($a,$b){
        return $a+$b;
    }    
}
$test2=new animal();
echo $test2->calc(3,2);
echo "<br>";
$test3=new human();

echo $test3->calc(10,3);

?>