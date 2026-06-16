<?php
//INTERFACE---> multiple class ki property  & method ko ek single class me inherit  krna hoto to usey interface khte.
//interface follow some rule --> interface ke ander hm koi property declare nhikrskte na hi usko koi value assign krenge.interface also work like abstract class.interface ka bhi koi object nhi bna skte.

//1) interface keyword use kr & interface ke ander property nhi likh skte  2) jo bhi method declare krenge usko implement nhi krskte ,implement derived class me hoga. aur uske aage access modifier use nhi krskte. 3)iska koi object nhi bna skte 4)interface use krne k liye derived class bnate aur use krte implements keyword. jitne bhi method declare kiye interface me unsab ko derived class me use krna jruri h.
//use for security purpose.

interface parent1{
    function calc($a,$b);  //yha method ke private,protected nhi use krskte.
   }

interface parent2{
    function sub($c,$d);
   }
      

class child implements parent1,parent2{

    public function calc($a,$b){
        echo $a+$b;
    }

    public function sub($c,$d){
        echo $c-$d;
    }
}

$test= new child();
$test->calc(25,25);
echo "<br>";
$test->sub(10,15);

?>