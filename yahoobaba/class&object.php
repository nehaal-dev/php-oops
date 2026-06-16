<?php  
//class->>> blueprint of boject .class ke basis pr object bnate h . koi bhi clas ki 2 part hoti h 
//property & method

//properties  ek variable hota h jo class ke ander declare krte aur usey class ke bahar use krne k liye k public acess modifier ka use krte.
//jab bhi hm kisi bhi class  ke ander koi  value ko  store krani ho to  hm property ka use krte..
//jab bhi hme propery ki calculation krni ho to uske method ka use krte. ye sab chije hm tbhi krskte jab hm us class ki object bnayeneg.


//Methods: mehtod  property ki value ko use krke bnte h. jab bhi hm function ko class ke ander declare krte usey method bolte.


Class calculation{
    public $a,$b,$c;//properties

    function  sum(){ //method--> fn. writeen  inside class called method
        $this->c=$this->a+$this->b; // $this  keyword hme bata ki hm isi class ki property use krte.
        return $this->c;
     }
    function sub(){
    $this->c=$this->a-$this->b;
    return $this->c;
    }

}

$c1=new calculation(); //object 
$c1->a=20;
$c1->b=20;
 
$c2=new calculation();
$c2->a=50;
$c2->b=30;

 echo $c1->sum() ."\n";
echo $c2->sum() ."\n";
echo "<br>";
echo $c1->sub() ."\n";
echo $c2->sub() ."\n";
 echo "<br>";

class car{
    public $move,$high_performance;

    function  Scorpio(){
        echo $this->move;
    }
}

$feature=new car();// ye object car class ke ander ki kisi ki property and value ko access krleta h.
$feature->move="fast"   ."<br>";
$feature->scorpio();  //method ko call kiye object ki help se but ye fn ho gya bcz class ke bahar se call hua h. isko call kene se phle class ke ander  property ko value assign krna pdta aur useyy use krna hota.

//EXAMPLE-3
class person{
        public $name,$age,$mobno;
    
        function show(){
            echo "your name:".$this->name. "your age:".$this->age  ;
        }
    }
    
     $person1=new person();
     $person1->name="nehaal"  ."<br>";     
     $person1->age=24  ."<br>";  
     $person1->show();
    
?>