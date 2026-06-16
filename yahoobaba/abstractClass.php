<?php

//ABSTRACT CLASS--> jab bhi hm kisi class ko abstrtact bna dete to us class ka hm kbhi bhi  object nhi bna skte.agr hme abstract class ki method and property use k ho to uske liye ek derived class bnate inheritnce ko use krke.
//abstract class bnane se phle use k keyword abstract. this follow 2 condition   1) us class ke pas abstract method hona chaiye. 2) method ko declare kiye but implement nhi kiye .implement k liye iska derived class bnate.3)jo bhi hmne derived class bnaye abstract class ki usme abtract method ko implement krna jruri h.


// abstract class A{
//     protected $name;

//     protected function __construct($n){
//         $this->name=$n;
//     }
//     abstract protected function show();// idhar method ko declare kiye but implement nhi kiye .implement k liye iska derived class bnate.
// }
// class B extends classA{
//     public function show(){
//         echo $this->name;
//     }


// }


//instance mtlb oject 

abstract class ParentA {

protected  $name;

abstract protected function calc($a,$b);
    
}


class child extends  ParentA{
  public  function calc($c,$d){
    // echo $c+$d;
    echo "hello";

    }

}
$object1=new child();
$object1->calc(10,20);










?>

 